<?php

use App\Http\Controllers\AttemptController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PlacementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/progress', [DashboardController::class, 'reset'])->name('progress.reset');

    Route::get('/placement', [PlacementController::class, 'show'])->name('placement.show');
    Route::post('/placement', [PlacementController::class, 'store'])->name('placement.store');

    Route::get('/levels', [LevelController::class, 'index'])->name('levels.index');
    Route::get('/levels/{level}', [LevelController::class, 'show'])->name('levels.show');

    Route::get('/modules/{module}', [ModuleController::class, 'show'])->name('modules.show');
    Route::post('/modules/{module}/attempts', [AttemptController::class, 'store'])->name('attempts.store');

    Route::get('/attempts/{attempt}', [AttemptController::class, 'show'])->name('attempts.show');
});
