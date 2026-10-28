@extends('layouts.app')

@section('title', 'Level Belajar')

@section('content')
    <div class="animate-fade-up">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h1 class="text-[26px] font-bold tracking-tight text-slate-900 sm:text-3xl">Pilih levelmu</h1>
                <p class="muted mt-1">
                    Tiga level sesuai CEFR. Level baru terbuka setelah minimal {{ 60 }}% modul sebelumnya selesai,
                    atau lewat tes penempatan.
                </p>
            </div>
            <a href="{{ route('placement.show') }}" class="btn-primary mt-1 self-start sm:mt-0">
                <x-icon name="compass" class="h-4 w-4" /> Kerjakan tes penempatan
            </a>
        </div>

        <div class="mt-7 space-y-5">
            @foreach ($levels as $level)
                @php
                    $percent = $level->status['percent'];
                    $isUnlocked = $level->unlocked;
                    $grade = match (true) {
                        $percent >= 90 => 'Sangat baik',
                        $percent >= 80 => 'Siap lanjut',
                        $percent >= 60 => 'Perlu penguatan',
                        default => null,
                    };
                @endphp

                <div class="card overflow-hidden transition {{ $isUnlocked ? 'hover:shadow-md' : 'opacity-80 grayscale-[0.3]' }}">
                    <div class="relative overflow-hidden bg-gradient-to-br {{ \App\Support\LevelTheme::gradient($level->theme) }} px-5 py-6 text-white sm:px-7">
                        <div class="absolute -right-12 -top-16 h-48 w-48 rounded-full bg-white/10 blur-2xl"></div>
                        <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="chip border-white/20 bg-white/15 text-white">Level {{ $level->level_order }}</span>
                                    <span class="chip border-white/20 bg-white/15 text-white">{{ $level->cefr }}</span>
                                    @if (! $isUnlocked)
                                        <span class="chip border-white/20 bg-slate-900/40 text-white">
                                            <x-icon name="lock" class="h-3.5 w-3.5" /> Terkunci
                                        </span>
                                    @elseif ($grade)
                                        <span class="chip border-white/20 bg-white/15 text-white">{{ $grade }}</span>
                                    @endif
                                </div>
                                <h2 class="mt-2 text-2xl font-bold tracking-tight sm:text-3xl">{{ $level->name }}</h2>
                                <p class="mt-1 max-w-2xl text-sm text-white/80">{{ $level->description }}</p>
                            </div>

                            <div class="shrink-0 sm:text-right">
                                <p class="text-3xl font-bold">{{ $percent }}%</p>
                                <p class="text-[13px] font-medium text-white/70">
                                    {{ $level->status['completed_modules'] }}/{{ $level->status['total_modules'] }} modul selesai
                                </p>
                            </div>
                        </div>

                        <div class="relative mt-5 h-2.5 overflow-hidden rounded-full bg-white/20">
                            <div data-bar="{{ $percent }}" class="h-full rounded-full bg-white transition-all duration-1000" style="width: 0"></div>
                        </div>
                    </div>

                    <div class="grid gap-3 p-4 sm:grid-cols-2 sm:p-5 lg:grid-cols-3">
                        @foreach ($level->modules as $module)
                            @php
                                $progress = $level->my_progress->get($module->id);
                                $modulePercent = $progress?->best_percentage ?? 0;
                                $completed = $progress?->status?->value === 'completed';
                            @endphp

                            @if ($isUnlocked)
                                <a href="{{ route('modules.show', $module) }}"
                                    class="group flex items-start gap-3 rounded-2xl border border-slate-200 bg-white p-3.5 transition hover:-translate-y-0.5 hover:border-emerald-300 hover:shadow-sm">
                            @else
                                <div class="flex items-start gap-3 rounded-2xl border border-dashed border-slate-200 bg-slate-50/60 p-3.5 opacity-70">
                            @endif
                                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-lg bg-slate-50 text-lg transition group-hover:scale-105">
                                        {{ $module->icon ?? '📘' }}
                                    </span>
                                    <div class="min-w-0 flex-1">
                                        <div class="flex items-center gap-2">
                                            <span class="text-[13px] font-medium text-slate-400">Modul {{ $module->module_order }}</span>
                                            @if ($completed)
                                                <span class="flex items-center gap-1 text-[11px] font-semibold text-emerald-600">
                                                    <x-icon name="check" class="h-3 w-3" /> Selesai
                                                </span>
                                            @elseif ($progress)
                                                <span class="text-[11px] font-semibold text-amber-500">Berlangsung</span>
                                            @endif
                                        </div>
                                        <p class="truncate text-sm font-bold text-slate-800 transition group-hover:text-emerald-700">
                                            {{ $module->title }}
                                        </p>
                                        <p class="line-clamp-1 text-xs text-slate-400">{{ $module->subtitle ?: $module->summary }}</p>

                                        @if ($progress)
                                            <div class="mt-2 flex items-center gap-2">
                                                <div class="h-1.5 flex-1 overflow-hidden rounded-full bg-slate-100">
                                                    <div data-bar="{{ (int) round($modulePercent) }}"
                                                        class="h-full rounded-full transition-all duration-700 {{ $completed ? 'bg-emerald-500' : 'bg-amber-400' }}"
                                                        style="width: 0"></div>
                                                </div>
                                                <span class="text-[11px] font-bold text-slate-500">{{ (int) round($modulePercent) }}%</span>
                                            </div>
                                        @endif
                                    </div>
                                    <x-icon name="arrow-right"
                                        class="h-4 w-4 shrink-0 text-slate-300 transition group-hover:translate-x-0.5 group-hover:text-emerald-500" />
                                @if ($isUnlocked)
                                </a>
                            @else
                                </div>
                            @endif
                        @endforeach
                    </div>

                    @if (! $isUnlocked)
                        <div class="flex flex-col gap-3 border-t border-slate-100 bg-slate-50 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                            <p class="flex items-center gap-2 text-sm text-slate-500">
                                <x-icon name="lock" class="h-4 w-4 shrink-0 text-slate-400" />
                                <span>Selesaikan minimal <strong>{{ $level->unlock_threshold }}%</strong> modul
                                    Level {{ max(1, $level->level_order - 1) }}, atau kerjakan tes penempatan untuk membuka level ini.</span>
                            </p>
                            <a href="{{ route('placement.show') }}" class="btn-secondary">Kerjakan tes penempatan</a>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
