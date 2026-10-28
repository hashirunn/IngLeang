<?php

namespace App\Services;

use App\Enums\ProgressStatus;
use App\Enums\QuestionSkill;
use App\Models\Attempt;
use App\Models\Level;
use App\Models\Module;
use App\Models\Progress;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProgressService
{
    public const int COMPLETION_THRESHOLD = 60;

    public function __construct(private readonly GradingService $grading) {}

    /**
     * Persist a graded module attempt and refresh the learner progress row.
     *
     * @param  array{earned: float, max: float, percentage: float, results: list<array<string, mixed>>}  $result
     * @return array{attempt: Attempt, progress: Progress}
     */
    public function recordModuleAttempt(User $user, Module $module, array $result): array
    {
        return DB::transaction(function () use ($user, $module, $result) {
            $attempt = Attempt::create([
                'user_id' => $user->id,
                'module_id' => $module->id,
                'type' => Attempt::TYPE_MODULE,
                'earned' => $result['earned'],
                'max_points' => $result['max'],
                'percentage' => $result['percentage'],
                'breakdown' => $result['results'],
            ]);

            $progress = Progress::firstOrNew([
                'user_id' => $user->id,
                'module_id' => $module->id,
            ]);

            $progress->attempts_count = $progress->attempts_count + 1;
            $progress->best_percentage = max($progress->best_percentage, $result['percentage']);
            $progress->last_attempted_at = now();

            if ($progress->best_percentage >= self::COMPLETION_THRESHOLD) {
                $progress->status = ProgressStatus::Completed;
                $progress->completed_at = $progress->completed_at ?? now();
            } else {
                $progress->status = ProgressStatus::InProgress;
            }

            $progress->save();

            $this->touchStreak($user);

            return ['attempt' => $attempt, 'progress' => $progress];
        });
    }

    /**
     * Record the daily learning streak for the given user.
     *
     * A streak day starts at 00:00 in User::STREAK_TIMEZONE (Asia/Jakarta), so
     * activity after midnight counts as the next day of the streak.
     */
    public function touchStreak(User $user): void
    {
        $today = Carbon::today(User::STREAK_TIMEZONE);

        $lastActive = $user->last_active_date === null
            ? null
            : Carbon::parse($user->last_active_date->toDateString(), User::STREAK_TIMEZONE);

        if ($lastActive !== null && $lastActive->isSameDay($today)) {
            return;
        }

        $isConsecutive = $lastActive !== null
            && $lastActive->copy()->addDay()->isSameDay($today);

        $user->forceFill([
            'streak_count' => $isConsecutive ? $user->streak_count + 1 : 1,
            'last_active_date' => $today->toDateString(),
        ])->save();
    }

    /**
     * Whether the learner may already open the given level.
     */
    public function isLevelUnlocked(User $user, Level $level): bool
    {
        $progressRows = $user->progress()->with('module:id,level_id')->get();

        $completedByLevel = $progressRows
            ->filter(fn (Progress $row) => $row->status === ProgressStatus::Completed)
            ->groupBy(fn (Progress $row) => (string) $row->module?->level_id)
            ->map(fn ($rows) => $rows->count());

        return $level->isUnlockedFor($user, $completedByLevel);
    }

    /**
     * Overall dashboard numbers for the learner.
     *
     * @return array<string, mixed>
     */
    public function dashboardStats(User $user): array
    {
        $progressRows = $user->progress()->with('module:id,level_id')->get();
        $levels = Level::withCount('modules')->orderBy('level_order')->get();

        $totalModules = (int) $levels->sum('modules_count');
        $completedModules = (int) $progressRows
            ->filter(fn (Progress $row) => $row->status === ProgressStatus::Completed)
            ->count();
        $startedModules = $progressRows->count();

        $bestScores = $progressRows->where('attempts_count', '>', 0)->pluck('best_percentage');
        $averageScore = $bestScores->isNotEmpty() ? round($bestScores->avg()) : 0;

        return [
            'total_modules' => $totalModules,
            'completed_modules' => $completedModules,
            'started_modules' => $startedModules,
            'overall_percent' => $totalModules > 0 ? (int) round(($completedModules / $totalModules) * 100) : 0,
            'average_score' => (int) $averageScore,
            'streak' => $user->current_streak_count,
            'today' => Carbon::now(User::STREAK_TIMEZONE)->translatedFormat('l, d F Y'),
            'levels' => $levels,
            'progress_rows' => $progressRows,
        ];
    }

    /**
     * Level overview with unlock flags and per level progress.
     *
     * @return Collection<int, Level>
     */
    public function levelsWithStatus(User $user): Collection
    {
        $levels = Level::withCount('modules')->with('modules:id,level_id,module_order,title,slug,icon,subtitle')->orderBy('level_order')->get();
        $progressRows = $user->progress()->with('module:id,level_id,module_order')->get();

        $completedByLevel = $progressRows
            ->filter(fn (Progress $row) => $row->status === ProgressStatus::Completed)
            ->groupBy(fn (Progress $row) => (string) $row->module?->level_id)
            ->map(fn ($rows) => $rows->count());

        return $levels->map(function (Level $level) use ($user, $progressRows, $completedByLevel) {
            $level->setAttribute('unlocked', $level->isUnlockedFor($user, $completedByLevel));
            $level->setAttribute('status', $level->statusFor($user, $progressRows));
            $level->setAttribute('my_progress', $progressRows->where('module.level_id', $level->id)->keyBy('module_id'));

            return $level;
        });
    }

    /**
     * The next module the learner should continue with.
     */
    public function nextModule(User $user): ?Module
    {
        $unlockedLevelIds = $this->levelsWithStatus($user)
            ->filter(fn (Level $level) => $level->getAttribute('unlocked'))
            ->pluck('id');

        $completedModuleIds = $user->progress()
            ->where('status', ProgressStatus::Completed->value)
            ->pluck('module_id');

        return Module::whereIn('level_id', $unlockedLevelIds)
            ->with('level:id,slug,name,level_order,theme')
            ->withCount('questions')
            ->whereNotIn('id', $completedModuleIds)
            ->orderBy('level_id')
            ->orderBy('module_order')
            ->first();
    }

    /**
     * Average score per skill, computed from every graded attempt.
     *
     * @return array<string, array{label: string, icon: string, percent: float, answered: int}>
     */
    public function skillSummary(User $user): array
    {
        $breakdowns = $user->attempts()
            ->latest('id')
            ->limit(100)
            ->get(['breakdown'])
            ->pluck('breakdown');

        $buckets = [];

        foreach ($breakdowns as $breakdown) {
            foreach ($breakdown as $item) {
                $skill = $item['skill'] ?? null;

                if ($skill === null) {
                    continue;
                }

                $buckets[$skill]['earned'] = ($buckets[$skill]['earned'] ?? 0) + (float) ($item['earned'] ?? 0);
                $buckets[$skill]['max'] = ($buckets[$skill]['max'] ?? 0) + (float) ($item['max'] ?? 0);
                $buckets[$skill]['count'] = ($buckets[$skill]['count'] ?? 0) + 1;
            }
        }

        $summary = [];

        foreach (QuestionSkill::cases() as $skillCase) {
            $bucket = $buckets[$skillCase->value] ?? null;

            $summary[$skillCase->value] = [
                'label' => $skillCase->label(),
                'icon' => $skillCase->icon(),
                'percent' => $bucket !== null && $bucket['max'] > 0
                    ? (int) round(($bucket['earned'] / $bucket['max']) * 100)
                    : 0,
                'answered' => $bucket['count'] ?? 0,
            ];
        }

        return $summary;
    }

    /**
     * Latest attempts shown on the dashboard.
     *
     * @return Collection<int, Attempt>
     */
    public function recentAttempts(User $user, int $limit = 5): Collection
    {
        return $user->attempts()
            ->where('type', Attempt::TYPE_MODULE)
            ->with('module:id,module_order,title,level_id,icon')
            ->latest('id')
            ->limit($limit)
            ->get();
    }
}
