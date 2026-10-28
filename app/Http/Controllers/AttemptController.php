<?php

namespace App\Http\Controllers;

use App\Models\Attempt;
use App\Models\Module;
use App\Services\GradingService;
use App\Services\ProgressService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AttemptController extends Controller
{
    public function __construct(
        private readonly GradingService $gradingService,
        private readonly ProgressService $progressService,
    ) {}

    /**
     * Grade a submitted practice set and return the results immediately.
     */
    public function store(Request $request, Module $module): JsonResponse|RedirectResponse
    {
        $user = $request->user();

        if (! $this->progressService->isLevelUnlocked($user, $module->level)) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Level masih terkunci.'], 403)
                : redirect()->route('levels.index')->with('error', 'Level masih terkunci.');
        }

        $validated = $request->validate([
            'answers' => ['nullable', 'array'],
        ]);

        $questions = $module->questions()->get();
        $answers = $this->gradingService->filterAnswers($validated['answers'] ?? [], $questions);
        $result = $this->gradingService->gradeQuestions($questions, $answers);

        $record = $this->progressService->recordModuleAttempt($user, $module, $result);
        $nextModule = $this->progressService->nextModule($user);

        if (! $request->expectsJson()) {
            return redirect()->route('attempts.show', $record['attempt']);
        }

        return response()->json([
            'attempt_id' => $record['attempt']->id,
            'earned' => $result['earned'],
            'max' => $result['max'],
            'percentage' => $result['percentage'],
            'status_label' => $record['attempt']->statusLabel(),
            'module_completed' => $record['progress']->isCompleted(),
            'attempts_count' => $record['progress']->attempts_count,
            'best_percentage' => $record['progress']->best_percentage,
            'results' => $result['results'],
            'result_url' => route('attempts.show', $record['attempt']),
            'next_module_url' => $nextModule !== null ? route('modules.show', $nextModule) : null,
        ]);
    }

    /**
     * Review a graded attempt with explanations.
     */
    public function show(Request $request, Attempt $attempt): View
    {
        if ($attempt->user_id !== $request->user()->id) {
            throw new AccessDeniedHttpException('Kamu hanya bisa membaca hasil latihanmu sendiri.');
        }

        $attempt->load('module.level');

        return view('attempts.show', [
            'attempt' => $attempt,
            'results' => $attempt->breakdown,
        ]);
    }
}
