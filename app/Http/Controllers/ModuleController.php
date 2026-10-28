<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Services\PracticePayloadService;
use App\Services\ProgressService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ModuleController extends Controller
{
    public function __construct(
        private readonly ProgressService $progressService,
        private readonly PracticePayloadService $payloadService,
    ) {}

    /**
     * Show the lesson material and the interactive exercises of a module.
     */
    public function show(Request $request, Module $module): RedirectResponse|View
    {
        $user = $request->user();
        $module->load(['level', 'questions']);

        if (! $this->progressService->isLevelUnlocked($user, $module->level)) {
            return redirect()
                ->route('levels.index')
                ->with('error', 'Level '.$module->level->name.' masih terkunci. Selesaikan level sebelumnya terlebih dahulu.');
        }

        $siblings = $module->level->modules()->withCount('questions')->get();
        $position = $siblings->search(fn (Module $item) => $item->id === $module->id);

        return view('modules.show', [
            'module' => $module->loadCount('questions'),
            'level' => $module->level,
            'practice' => $this->payloadService->forQuestions($module->questions),
            'skillCounts' => $module->skillCounts(),
            'progress' => $module->progressFor($user),
            'attempts' => $user->attempts()
                ->forModule($module->id)
                ->latest('id')
                ->limit(10)
                ->get(),
            'previousModule' => $siblings->get($position - 1),
            'nextModule' => $siblings->get($position + 1),
            'moduleNumber' => $position + 1,
        ]);
    }
}
