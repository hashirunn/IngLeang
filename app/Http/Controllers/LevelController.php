<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Services\ProgressService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LevelController extends Controller
{
    public function __construct(private readonly ProgressService $progressService) {}

    /**
     * Overview of the three learning levels.
     */
    public function index(Request $request): View
    {
        return view('levels.index', [
            'levels' => $this->progressService->levelsWithStatus($request->user()),
        ]);
    }

    /**
     * Show the sub-level modules contained in one level.
     */
    public function show(Request $request, Level $level): RedirectResponse|View
    {
        $user = $request->user();

        if (! $this->progressService->isLevelUnlocked($user, $level)) {
            return redirect()
                ->route('levels.index')
                ->with('error', 'Selesaikan minimal '.$level->unlock_threshold.'% modul sebelumnya atau kerjakan tes penempatan untuk membuka level '.$level->name.'.');
        }

        $progressRows = $user->progress()->get()->keyBy('module_id');

        return view('levels.show', [
            'level' => $level->load('modules.questions'),
            'progressRows' => $progressRows,
            'status' => $level->statusFor($user, $user->progress()->with('module:id,level_id')->get()),
            'siblingLevels' => $this->progressService->levelsWithStatus($user),
        ]);
    }
}
