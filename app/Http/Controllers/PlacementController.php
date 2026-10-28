<?php

namespace App\Http\Controllers;

use App\Models\Attempt;
use App\Models\Level;
use App\Models\Question;
use App\Services\GradingService;
use App\Services\PracticePayloadService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class PlacementController extends Controller
{
    /**
     * Questions sampled per level for the placement test.
     */
    private const int QUESTIONS_PER_LEVEL = 4;

    /**
     * Percentage needed to place the learner into a higher level.
     */
    private const int PASS_MARK = 70;

    public function __construct(
        private readonly GradingService $gradingService,
        private readonly PracticePayloadService $payloadService,
    ) {}

    /**
     * Intro screen of the placement test, with the sampled questions.
     */
    public function show(Request $request): View
    {
        $questions = collect(Level::orderBy('level_order')->get())
            ->flatMap(fn (Level $level) => $this->sampleFor($level))
            ->sortBy('id')
            ->values();

        return view('placement.show', [
            'recommendedLevel' => $request->user()->recommendedLevel,
            'questions' => $this->payloadService->forQuestions($questions),
            'questionIds' => $questions->pluck('id')->all(),
            'lastResult' => $request->user()->attempts()
                ->where('type', Attempt::TYPE_PLACEMENT)
                ->latest('id')
                ->first(),
            'scoresByLevel' => $request->session()->get('scoresByLevel'),
        ]);
    }

    /**
     * Grade the placement test and store the recommended starting level.
     */
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $user = $request->user();

        $validated = $request->validate([
            'question_ids' => ['required', 'array', 'max:40'],
            'question_ids.*' => ['integer', 'exists:questions,id'],
            'answers' => ['nullable', 'array'],
        ]);

        $questions = Question::with('module:id,level_id')
            ->whereIn('id', $validated['question_ids'])
            ->orderBy('id')
            ->get();

        $result = $this->gradingService->gradeQuestions(
            $questions,
            is_array($request->input('answers')) ? $request->input('answers') : [],
        );

        $scoresByLevel = $questions
            ->groupBy(fn (Question $question) => (string) $question->module?->level_id)
            ->map(function (Collection $levelQuestions) use ($result) {
                $ids = $levelQuestions->pluck('id')->all();
                $earned = collect($result['results'])
                    ->whereIn('question_id', $ids)
                    ->sum('earned');

                return [
                    'total' => count($ids),
                    'earned' => round((float) $earned, 2),
                    'percent' => count($ids) > 0 ? (int) round(($earned / count($ids)) * 100) : 0,
                ];
            });

        $recommended = $this->recommendLevel($scoresByLevel);

        Attempt::create([
            'user_id' => $user->id,
            'module_id' => null,
            'type' => Attempt::TYPE_PLACEMENT,
            'earned' => $result['earned'],
            'max_points' => $result['max'],
            'percentage' => $result['percentage'],
            'breakdown' => [
                'questions' => $result['results'],
                'levels' => $scoresByLevel->toArray(),
                'recommended_level_id' => $recommended->id,
            ],
        ]);

        $user->forceFill(['recommended_level_id' => $recommended->id])->save();

        $levelNames = Level::all()
            ->keyBy('id')
            ->map(fn (Level $level) => 'Level '.$level->level_order.' · '.$level->name)
            ->toArray();

        $payload = [
            'percentage' => $result['percentage'],
            'earned' => $result['earned'],
            'max' => $result['max'],
            'results' => $result['results'],
            'levels' => $scoresByLevel
                ->map(fn (array $score, $levelId) => $score + ['level_id' => (int) $levelId])
                ->values(),
            'level_names' => $levelNames,
            'recommended' => [
                'id' => $recommended->id,
                'slug' => $recommended->slug,
                'name' => $recommended->name,
                'cefr' => $recommended->cefr,
            ],
            'start_url' => route('levels.show', $recommended),
        ];

        if ($request->expectsJson()) {
            return response()->json($payload);
        }

        return redirect()
            ->route('placement.show')
            ->with('recommended', $recommended->slug)
            ->with('scoresByLevel', $scoresByLevel)
            ->with('status', 'Tes selesai! Level yang cocok untukmu: '.$recommended->name.' ('.$recommended->cefr.').');
    }

    /**
     * Sample marked questions for one level, falling back to any question.
     *
     * @return Collection<int, Question>
     */
    private function sampleFor(Level $level): Collection
    {
        $base = Question::query()
            ->whereHas('module', fn ($query) => $query->where('level_id', $level->id))
            ->with('module:id,level_id');

        $marked = (clone $base)->where('is_placement', true)
            ->inRandomOrder()
            ->limit(self::QUESTIONS_PER_LEVEL)
            ->get();

        if ($marked->count() >= self::QUESTIONS_PER_LEVEL) {
            return $marked;
        }

        return (clone $base)->inRandomOrder()->limit(self::QUESTIONS_PER_LEVEL)->get();
    }

    /**
     * Decide the recommended starting level from the per level scores.
     */
    private function recommendLevel(Collection $scoresByLevel): Level
    {
        $byOrder = Level::orderBy('level_order')->get()->keyBy('id');

        $advancedId = $byOrder->firstWhere('level_order', 3)?->id;
        $intermediateId = $byOrder->firstWhere('level_order', 2)?->id;

        $advanced = $scoresByLevel->get($advancedId, ['percent' => 0])['percent'] ?? 0;
        $intermediate = $scoresByLevel->get($intermediateId, ['percent' => 0])['percent'] ?? 0;

        if ($advanced >= self::PASS_MARK) {
            return $byOrder->firstWhere('level_order', 3);
        }

        if ($intermediate >= self::PASS_MARK) {
            return $byOrder->firstWhere('level_order', 2);
        }

        return $byOrder->firstWhere('level_order', 1);
    }
}
