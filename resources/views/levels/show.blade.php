@extends('layouts.app')

@section('title', $level->name . ' · Level ' . $level->level_order)

@section('content')
    @php
        $percent = $status['percent'];
        $isUnlocked = true;
    @endphp

    <div class="animate-fade-up">
        <nav class="mb-4 flex items-center gap-2 text-xs font-semibold text-slate-400">
            <a href="{{ route('levels.index') }}" class="hover:text-emerald-600">Level Belajar</a>
            <span>/</span>
            <span class="text-slate-600">Level {{ $level->level_order }} · {{ $level->name }}</span>
        </nav>

        {{-- Hero --}}
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br {{ \App\Support\LevelTheme::gradient($level->theme) }} p-6 text-white shadow-lg sm:p-8">
            <div class="absolute -right-16 -top-20 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
            <div class="relative flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <div class="flex flex-wrap gap-2">
                        <span class="chip border-white/20 bg-white/15 text-white">Level {{ $level->level_order }}</span>
                        <span class="chip border-white/20 bg-white/15 text-white">{{ $level->cefr }}</span>
                        <span class="chip border-white/20 bg-white/15 text-white">{{ $level->modules->count() }} modul</span>
                    </div>
                    <h1 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">{{ $level->name }}</h1>
                    <p class="mt-2 max-w-2xl text-sm leading-relaxed text-white/85">{{ $level->description }}</p>
                    <p class="mt-3 text-[13px] font-medium text-white/60">{{ $level->tagline }}</p>
                </div>

                <div class="flex items-center gap-4 sm:flex-col sm:items-end">
                    <div class="relative grid h-24 w-24 place-items-center">
                        <svg class="absolute h-24 w-24 -rotate-90" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="10"></circle>
                            <circle cx="60" cy="60" r="54" fill="none" stroke="#fff" stroke-width="10" stroke-linecap="round"
                                stroke-dasharray="{{ 2 * M_PI * 54 }}"
                                stroke-dashoffset="{{ 2 * M_PI * 54 - (2 * M_PI * 54 * $percent / 100) }}"
                                style="transition: stroke-dashoffset 1s ease"></circle>
                        </svg>
                        <span class="text-xl font-bold">{{ $percent }}%</span>
                    </div>
                    <p class="text-[13px] font-medium text-white/70">
                        {{ $status['completed_modules'] }}/{{ $status['total_modules'] }} modul selesai
                    </p>
                </div>
            </div>
        </div>

        {{-- Module list --}}
        <div class="mt-6 grid gap-4 md:grid-cols-2">
            @foreach ($level->modules as $module)
                @php
                    $progress = $progressRows->get($module->id);
                    $best = (int) round($progress?->best_percentage ?? 0);
                    $completed = $progress?->status?->value === 'completed';
                    $skillGroups = $module->questions->groupBy('skill');
                @endphp

                <a href="{{ route('modules.show', $module) }}"
                    class="card group relative flex flex-col p-5 transition hover:-translate-y-1 hover:border-emerald-300 hover:shadow-md">
                    @if ($completed)
                        <span class="absolute right-4 top-4 grid h-7 w-7 place-items-center rounded-full bg-emerald-100 text-emerald-600">
                            <x-icon name="check" class="h-4 w-4" />
                        </span>
                    @endif

                    <div class="flex items-start gap-3">
                        <span
                            class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl bg-gradient-to-br {{ \App\Support\LevelTheme::gradient($level->theme) }} text-xl text-white shadow-sm transition group-hover:scale-105">
                            {{ $module->icon ?? '📘' }}
                        </span>
                        <div class="min-w-0">
                            <p class="text-[13px] font-medium text-slate-400">
                                Modul {{ $module->module_order }} dari {{ $level->modules->count() }}
                            </p>
                            <h3 class="mt-0.5 text-base font-bold leading-tight text-slate-900 transition group-hover:text-emerald-700">
                                {{ $module->title }}
                            </h3>
                            <p class="mt-0.5 text-xs text-slate-400">{{ $module->subtitle }}</p>
                        </div>
                    </div>

                    <p class="mt-3 line-clamp-2 text-sm text-slate-500">{{ $module->summary }}</p>

                    <div class="mt-3 flex flex-wrap gap-1.5">
                        @foreach ($skillGroups as $skill => $questions)
                            @php $skillEnum = \App\Enums\QuestionSkill::from($skill); @endphp
                            <span class="chip gap-1 px-2 py-0.5 text-[11px]">
                                <x-icon name="{{ $skillEnum->lineIcon() }}" class="h-3 w-3" />
                                {{ $skillEnum->label() }} · {{ $questions->count() }}
                            </span>
                        @endforeach
                    </div>

                    <div class="mt-4 flex items-center gap-3 border-t border-slate-100 pt-3">
                        <div class="h-2 flex-1 overflow-hidden rounded-full bg-slate-100">
                            <div data-bar="{{ $best }}" class="h-full rounded-full transition-all duration-700 {{ $completed ? 'bg-emerald-500' : ($progress ? 'bg-amber-400' : 'bg-slate-300') }}"
                                style="width: 0"></div>
                        </div>
                        <span class="text-xs font-bold {{ $progress ? 'text-slate-700' : 'text-slate-400' }}">
                            {{ $progress ? $best.'%' : 'Belum mulai' }}
                        </span>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- Level navigation --}}
        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ route('levels.index') }}" class="btn-secondary"><x-icon name="arrow-left" class="h-4 w-4" /> Semua level</a>
            @php
                $nextLevel = $siblingLevels->firstWhere('level_order', $level->level_order + 1);
            @endphp
            @if ($nextLevel && $nextLevel->unlocked)
                <a href="{{ route('levels.show', $nextLevel) }}" class="btn-primary">Level berikutnya: {{ $nextLevel->name }} <x-icon name="arrow-right" class="h-4 w-4" /></a>
            @elseif ($nextLevel)
                <span class="chip">
                    <x-icon name="lock" class="h-3.5 w-3.5" /> {{ $nextLevel->name }} terkunci sampai level ini selesai {{ $level->unlock_threshold }}%
                </span>
            @endif
        </div>
    </div>
@endsection
