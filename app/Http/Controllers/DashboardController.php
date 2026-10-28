<?php

namespace App\Http\Controllers;

use App\Services\ProgressService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(private readonly ProgressService $progressService) {}

    /**
     * Learner dashboard: progress, streak, levels and next lesson.
     */
    public function index(Request $request): View
    {
        $user = $request->user();

        $this->progressService->touchStreak($user);

        return view('dashboard', [
            'stats' => $this->progressService->dashboardStats($user),
            'levels' => $this->progressService->levelsWithStatus($user),
            'nextModule' => $this->progressService->nextModule($user),
            'skills' => $this->progressService->skillSummary($user),
            'recentAttempts' => $this->progressService->recentAttempts($user),
        ]);
    }

    /**
     * Reset every learning record of the authenticated learner.
     */
    public function reset(Request $request): RedirectResponse
    {
        $user = $request->user();

        $user->progress()->delete();
        $user->attempts()->delete();
        $user->forceFill([
            'streak_count' => 0,
            'last_active_date' => null,
            'recommended_level_id' => null,
        ])->save();

        return redirect()->route('dashboard')->with('status', 'Progres belajar berhasil direset. Mulai lagi dari level Beginner.');
    }
}
