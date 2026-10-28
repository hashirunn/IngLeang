@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="animate-fade-up">
        {{-- Greeting --}}
        <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h1 class="text-[26px] font-bold tracking-tight text-slate-900 sm:text-3xl">
                    Halo, {{ Str::of(auth()->user()->name)->before(' ') }}
                </h1>
                <p class="muted mt-1">{{ $stats['today'] }} — siap belajar bahasa Inggris hari ini?</p>
            </div>
            <a href="{{ route('placement.show') }}" class="btn-secondary mt-1 self-start sm:mt-0">
                <x-icon name="compass" class="h-4 w-4" /> Tes penempatan
            </a>
        </div>

        {{-- Stat cards --}}
        <div class="mt-6 grid grid-cols-2 gap-3 lg:grid-cols-4">
            <div class="card p-4">
                <div class="flex items-center justify-between">
                    <p class="caption">Beruntun</p>
                    <x-icon name="flame" class="h-4 w-4 text-slate-300" />
                </div>
                <p class="mt-2 text-3xl font-bold leading-none tracking-tight text-slate-900">
                    {{ $stats['streak'] }}<span class="ml-1 text-sm font-medium text-slate-400">hari</span>
                </p>
            </div>

            <div class="card p-4">
                <div class="flex items-center justify-between">
                    <p class="caption">Modul selesai</p>
                    <x-icon name="check-badge" class="h-4 w-4 text-slate-300" />
                </div>
                <p class="mt-2 text-3xl font-bold leading-none tracking-tight text-slate-900">
                    {{ $stats['completed_modules'] }}<span class="text-lg font-medium text-slate-300">/{{ $stats['total_modules'] }}</span>
                </p>
            </div>

            <div class="card p-4">
                <div class="flex items-center justify-between">
                    <p class="caption">Progres total</p>
                    <x-icon name="trending" class="h-4 w-4 text-slate-300" />
                </div>
                <p class="mt-2 text-3xl font-bold leading-none tracking-tight text-slate-900">
                    <span data-count-up="{{ $stats['overall_percent'] }}">0</span><span class="text-lg font-medium text-slate-300">%</span>
                </p>
            </div>

            <div class="card p-4">
                <div class="flex items-center justify-between">
                    <p class="caption">Rata-rata nilai</p>
                    <x-icon name="star" class="h-4 w-4 text-slate-300" />
                </div>
                <p class="mt-2 text-3xl font-bold leading-none tracking-tight text-slate-900">
                    <span data-count-up="{{ $stats['average_score'] }}">0</span><span class="text-lg font-medium text-slate-300">%</span>
                </p>
            </div>
        </div>

        {{-- Continue learning --}}
        <div class="mt-6">
            @if ($nextModule)
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br {{ \App\Support\LevelTheme::gradient($nextModule->level->theme) }} p-5 text-white shadow-lg sm:p-6">
                    <div class="absolute -right-10 -top-12 h-44 w-44 rounded-full bg-white/10 blur-2xl"></div>
                    <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div class="min-w-0">
                            <span class="inline-flex items-center gap-1.5 rounded-full bg-white/15 px-3 py-1 text-xs font-semibold">
                                <x-icon name="play" class="h-3.5 w-3.5" /> Lanjutkan belajar
                            </span>
                            <p class="mt-3 text-[13px] font-medium text-white/70">
                                {{ $nextModule->level->name }} · Modul {{ $nextModule->module_order }}
                            </p>
                            <h2 class="mt-1 text-xl font-bold sm:text-2xl">
                                {{ $nextModule->title }}
                            </h2>
                            <p class="mt-1 line-clamp-2 text-sm text-white/80">{{ $nextModule->summary }}</p>
                            <p class="mt-2 text-[13px] text-white/60">{{ $nextModule->questions_count }} latihan · {{ is_array($nextModule->objectives) ? count($nextModule->objectives) : 0 }} tujuan belajar</p>
                        </div>
                        <a href="{{ route('modules.show', $nextModule) }}"
                            class="btn shrink-0 bg-white text-slate-900 hover:bg-white/90">Buka modul <x-icon name="arrow-right" class="h-4 w-4" /></a>
                    </div>
                </div>
            @else
                <div class="card flex flex-col items-center gap-4 bg-gradient-to-br from-emerald-50 to-teal-50 p-6 text-center sm:flex-row sm:text-left">
                    <span class="grid h-12 w-12 place-items-center rounded-xl bg-emerald-100 text-emerald-600">
                        <x-icon name="trophy" class="h-6 w-6" />
                    </span>
                    <div>
                        <h2 class="text-lg font-bold text-slate-900">Semua modul selesai!</h2>
                        <p class="muted mt-1">Kamu sudah menuntaskan seluruh kurikulum IngLearn. Ulangi latihan untuk menyempurnakan nilai.</p>
                    </div>
                    <a href="{{ route('levels.index') }}" class="btn-primary sm:ml-auto">Lihat semua level</a>
                </div>
            @endif
        </div>

        <div class="mt-6 grid grid-cols-1 gap-6 lg:grid-cols-3">
            {{-- Levels overview --}}
            <div class="lg:col-span-2">
                <div class="mb-3 flex items-center justify-between">
                    <h2 class="section-title">Level belajar</h2>
                    <a href="{{ route('levels.index') }}" class="text-sm font-semibold text-emerald-600 hover:underline">Lihat semua</a>
                </div>

                <div class="space-y-3">
                    @foreach ($levels as $level)
                        @php
                            $percent = $level->status['percent'];
                            $isUnlocked = $level->unlocked;
                        @endphp
                        <a href="{{ $isUnlocked ? route('levels.show', $level) : route('levels.index') }}"
                            class="card group flex items-center gap-4 p-4 transition hover:-translate-y-0.5 hover:shadow-md {{ $isUnlocked ? '' : 'opacity-70' }}">
                            <span
                                class="grid h-12 w-12 shrink-0 place-items-center rounded-xl bg-gradient-to-br text-white {{ \App\Support\LevelTheme::gradient($level->theme) }}">
                                <x-icon name="{{ $isUnlocked ? 'book' : 'lock' }}" class="h-6 w-6" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <div class="flex flex-wrap items-center gap-2">
                                    <p class="font-semibold text-slate-900">Level {{ $level->level_order }} · {{ $level->name }}</p>
                                    <span class="chip">{{ $level->cefr }}</span>
                                    @if (! $isUnlocked)
                                        <span class="chip bg-slate-100 text-slate-500">Terkunci</span>
                                    @elseif ($percent >= 100)
                                        <span class="chip border-emerald-100 bg-emerald-50 text-emerald-700">Selesai</span>
                                    @endif
                                </div>
                                <p class="mt-0.5 truncate text-[13px] text-slate-500">{{ $level->tagline }}</p>
                                <div class="mt-2 flex items-center gap-3">
                                    <div class="h-2 flex-1 overflow-hidden rounded-full bg-slate-100">
                                        <div data-bar="{{ $percent }}" class="h-full rounded-full transition-all duration-700 {{ \App\Support\LevelTheme::solid($level->theme) }}"
                                            style="width: 0"></div>
                                    </div>
                                    <span class="text-[13px] font-semibold text-slate-500">{{ $level->status['completed_modules'] }}/{{ $level->status['total_modules'] }}</span>
                                </div>
                            </div>
                            <x-icon name="chevron-right" class="h-5 w-5 shrink-0 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-slate-500" />
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Skill summary --}}
            <div>
                <h2 class="section-title mb-3">Kemampuanmu</h2>
                <div class="card divide-y divide-slate-100 p-1">
                    @foreach ($skills as $skillKey => $skill)
                        <div class="flex items-center gap-3 px-3 py-3">
                            <span class="grid h-9 w-9 shrink-0 place-items-center rounded-lg bg-slate-50 text-slate-500">
                                <x-icon name="{{ \App\Support\Icons::forSkill($skillKey) }}" class="h-[18px] w-[18px]" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between text-[13px]">
                                    <span class="font-semibold text-slate-700">{{ $skill['label'] }}</span>
                                    <span class="font-semibold tabular-nums {{ $skill['percent'] >= 70 ? 'text-emerald-600' : 'text-slate-400' }}">
                                        {{ $skill['answered'] > 0 ? $skill['percent'].'%' : '—' }}
                                    </span>
                                </div>
                                <div class="mt-1.5 h-1.5 overflow-hidden rounded-full bg-slate-100">
                                    <div data-bar="{{ $skill['percent'] }}" class="h-full rounded-full bg-slate-800 transition-all duration-700" style="width: 0"></div>
                                </div>
                                <p class="mt-1 text-xs text-slate-400">{{ $skill['answered'] }} soal dijawab</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Recent attempts --}}
        <div class="mt-6">
            <div class="mb-3 flex items-center justify-between">
                <h2 class="section-title">Latihan terakhir</h2>
            </div>

            @if ($recentAttempts->isEmpty())
                <div class="card flex flex-col items-center gap-3 p-10 text-center">
                    <span class="grid h-12 w-12 place-items-center rounded-xl bg-emerald-50 text-emerald-600">
                        <x-icon name="sprout" class="h-6 w-6" />
                    </span>
                    <p class="muted">Belum ada latihan yang tersimpan. Mulai dari modul pertama untuk mencatat progresmu.</p>
                    <a href="{{ route('levels.show', $levels->first()) }}" class="btn-primary">Mulai belajar <x-icon name="arrow-right" class="h-4 w-4" /></a>
                </div>
            @else
                <div class="card divide-y divide-slate-100">
                    @foreach ($recentAttempts as $attempt)
                        <a href="{{ route('attempts.show', $attempt) }}"
                            class="flex items-center gap-4 px-4 py-3 transition hover:bg-slate-50 sm:px-5">
                            <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-slate-50 text-slate-500">
                                <x-icon name="clipboard-check" class="h-5 w-5" />
                            </span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-sm font-semibold text-slate-800">{{ $attempt->module?->title ?? 'Tes penempatan' }}</p>
                                <p class="text-[13px] text-slate-400">{{ $attempt->created_at->diffForHumans() }}</p>
                            </div>
                            <span
                                class="answer-pill tabular-nums {{ $attempt->percentage >= 60 ? 'pill-correct' : 'pill-wrong' }}">{{ round($attempt->percentage) }}%</span>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
