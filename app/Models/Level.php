<?php

namespace App\Models;

use App\Enums\ProgressStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Support\Collection;

class Level extends Model
{
    /** @use HasMany<Module> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'level_order',
        'cefr',
        'tagline',
        'description',
        'theme',
        'unlock_threshold',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'level_order' => 'integer',
            'unlock_threshold' => 'integer',
        ];
    }

    /** @return HasMany<Module> */
    public function modules(): HasMany
    {
        return $this->hasMany(Module::class)->orderBy('module_order');
    }

    /** @return HasManyThrough<Question> */
    public function questions(): HasManyThrough
    {
        return $this->hasManyThrough(Question::class, Module::class);
    }

    /**
     * A level is unlocked when it is the first one, when the placement test
     * recommended it (or a higher one), or when enough modules of the previous
     * level have been completed.
     */
    public function isUnlockedFor(User $user, Collection $completedCountsByLevel): bool
    {
        if ($this->level_order === 1) {
            return true;
        }

        $recommendedOrder = $user->recommendedLevel?->level_order ?? 0;

        if ($recommendedOrder >= $this->level_order) {
            return true;
        }

        $previousOrder = $this->level_order - 1;
        $previous = $this->where('level_order', $previousOrder)
            ->withCount(['modules as total_modules'])
            ->first();

        if ($previous === null) {
            return false;
        }

        $completed = (int) ($completedCountsByLevel->get($previous->id) ?? 0);
        $total = (int) $previous->total_modules;

        if ($total === 0) {
            return false;
        }

        return round(($completed / $total) * 100) >= $previous->unlock_threshold;
    }

    /**
     * Short status payload used by the level overview screens.
     *
     * @return array<string, mixed>
     */
    public function statusFor(User $user, Collection $progressRows): array
    {
        $rows = $progressRows->where('module.level_id', $this->id);
        $total = $this->modules_count ?? $this->modules()->count();
        $started = $rows->count();
        $completed = (int) $rows->where('status', ProgressStatus::Completed->value)->count();
        $percent = $total > 0 ? (int) round(($completed / $total) * 100) : 0;

        return [
            'total_modules' => $total,
            'started_modules' => $started,
            'completed_modules' => $completed,
            'percent' => $percent,
        ];
    }
}
