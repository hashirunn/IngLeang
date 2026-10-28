@extends('layouts.app')

@section('title', $module->title)

@section('content')
    @php
        $best = (int) round($progress?->best_percentage ?? 0);
        $completed = $progress?->status?->value === 'completed';
    @endphp

    <div class="animate-fade-up">
        {{-- Breadcrumb --}}
        <nav class="mb-4 flex flex-wrap items-center gap-2 text-xs font-semibold text-slate-400">
            <a href="{{ route('levels.index') }}" class="hover:text-emerald-600">Level</a>
            <span>/</span>
            <a href="{{ route('levels.show', $level) }}" class="hover:text-emerald-600">
                Level {{ $level->level_order }} · {{ $level->name }}
            </a>
            <span>/</span>
            <span class="text-slate-600">Modul {{ $moduleNumber }}</span>
        </nav>

        {{-- Header --}}
        <div class="card overflow-hidden">
            <div class="relative overflow-hidden bg-gradient-to-br {{ \App\Support\LevelTheme::gradient($level->theme) }} px-5 py-6 text-white sm:px-7">
                <div class="absolute -right-10 -top-16 h-48 w-48 rounded-full bg-white/10 blur-2xl"></div>
                <div class="relative flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                    <div class="min-w-0">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="chip border-white/20 bg-white/15 text-white">{{ $module->icon }} Modul {{ $moduleNumber }}</span>
                            <span class="chip border-white/20 bg-white/15 text-white">{{ $module->questions_count }} latihan</span>
                            @if ($completed)
                                <span class="chip items-center gap-1.5 border-emerald-200 bg-emerald-50 text-emerald-700">
                                    <x-icon name="check" class="h-3.5 w-3.5" /> Selesai
                                </span>
                            @elseif ($progress)
                                <span class="chip items-center gap-1.5 border-amber-200 bg-amber-50 text-amber-700">
                                    <x-icon name="clock" class="h-3.5 w-3.5" /> Berlangsung
                                </span>
                            @endif
                        </div>
                        <h1 class="mt-3 text-2xl font-bold tracking-tight sm:text-3xl">{{ $module->title }}</h1>
                        <p class="mt-1.5 max-w-2xl text-sm text-white/85">{{ $module->summary }}</p>
                    </div>

                    <div class="shrink-0 rounded-2xl border border-white/20 bg-white/10 px-4 py-3 text-center backdrop-blur sm:min-w-[130px]">
                        <p class="text-2xl font-bold">{{ $progress ? $best.'%' : '—' }}</p>
                        <p class="mt-0.5 text-xs font-medium text-white/70">
                            {{ $progress ? 'Nilai terbaik' : 'Belum dicoba' }}
                        </p>
                    </div>
                </div>

                <div class="relative mt-5 h-2.5 overflow-hidden rounded-full bg-white/20">
                    <div data-bar="{{ $best }}" class="h-full rounded-full bg-white transition-all duration-1000" style="width: 0"></div>
                </div>
            </div>

            {{-- Tabs --}}
            <div class="flex gap-1.5 overflow-x-auto border-t border-slate-100 bg-slate-50/70 p-2">
                <button type="button" role="tab" data-tab="materi" aria-selected="true"
                    class="flex flex-1 items-center justify-center gap-2 whitespace-nowrap rounded-xl px-4 py-2.5 text-sm font-semibold transition sm:flex-none">
                    <x-icon name="book-open" class="h-[18px] w-[18px]" /> Materi
                </button>
                <button type="button" role="tab" data-tab="latihan" aria-selected="false"
                    class="flex flex-1 items-center justify-center gap-2 whitespace-nowrap rounded-xl px-4 py-2.5 text-sm font-semibold transition sm:flex-none">
                    <x-icon name="pencil" class="h-[18px] w-[18px]" /> Latihan
                </button>
                <button type="button" role="tab" data-tab="riwayat" aria-selected="false"
                    class="flex flex-1 items-center justify-center gap-2 whitespace-nowrap rounded-xl px-4 py-2.5 text-sm font-semibold transition sm:flex-none">
                    <x-icon name="clock" class="h-[18px] w-[18px]" /> Riwayat
                </button>
            </div>
        </div>

        {{-- ============ MATERI ============ --}}
        <div data-panel="materi" class="mt-5 space-y-5">
            {{-- Objectives --}}
            <div class="card p-5">
                <h2 class="section-title flex items-center gap-2">
                    <x-icon name="target" class="h-5 w-5 text-emerald-600" /> Tujuan belajar
                </h2>
                <ul class="mt-3 grid gap-2 sm:grid-cols-2">
                    @foreach ($module->objectives as $objective)
                        <li class="flex items-start gap-2.5 rounded-xl bg-slate-50 px-3 py-2.5 text-sm text-slate-700">
                            <span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-emerald-100 text-emerald-600">
                                <x-icon name="check" class="h-3 w-3" />
                            </span>
                            <span>{{ $objective }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Sections --}}
            @foreach ($module->sections as $index => $section)
                <article class="card overflow-hidden">
                    <div class="flex items-center gap-3 border-b border-slate-100 bg-slate-50/60 px-5 py-3.5">
                        <span
                            class="grid h-8 w-8 place-items-center rounded-lg bg-emerald-50 text-xs font-bold text-emerald-700">{{ $index + 1 }}</span>
                        <h2 class="text-base font-bold tracking-tight text-slate-900">{{ $section['heading'] }}</h2>
                    </div>

                    <div class="px-5 py-5">
                        <div class="lesson-body">{!! $section['body'] !!}</div>

                        @if (! empty($section['examples']))
                            <div class="mt-4">
                                <p class="mb-2 text-[13px] font-medium text-slate-500">Contoh kalimat</p>
                                <div class="grid gap-2">
                                    @foreach ($section['examples'] as $example)
                                        <div
                                            class="flex items-start justify-between gap-3 rounded-xl border border-slate-100 bg-slate-50/70 px-3.5 py-2.5 transition hover:border-emerald-200 hover:bg-emerald-50/40">
                                            <div class="min-w-0">
                                                <p class="text-sm font-semibold text-slate-900">{{ $example['en'] }}</p>
                                                <p class="text-xs italic text-slate-500">{{ $example['id'] }}</p>
                                            </div>
                                            <button type="button" data-speak="{{ $example['en'] }}"
                                                class="btn-soft shrink-0 px-2.5 py-1.5 text-xs"
                                                aria-label="Dengarkan kalimat">
                                                <x-icon name="volume" class="h-4 w-4" />
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </article>
            @endforeach

            {{-- Vocabulary --}}
            @if (is_array($module->vocabulary) && $module->vocabulary !== [])
                <div class="card p-5">
                    <div class="flex items-center justify-between">
                        <h2 class="section-title flex items-center gap-2">
                            <x-icon name="book" class="h-5 w-5 text-emerald-600" /> Kosakata kunci
                        </h2>
                        <span class="chip">{{ count($module->vocabulary) }} kata</span>
                    </div>

                    <div class="mt-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($module->vocabulary as $word)
                            <div
                                class="group rounded-2xl border border-slate-200 bg-white p-4 transition hover:-translate-y-0.5 hover:border-emerald-300 hover:shadow-sm">
                                <div class="flex items-start justify-between gap-2">
                                    <div class="min-w-0">
                                        <p class="text-base font-bold text-slate-900">{{ $word['word'] }}</p>
                                        @if (! empty($word['phonetic']))
                                            <p class="text-xs text-emerald-600">{{ $word['phonetic'] }}</p>
                                        @endif
                                    </div>
                                    <button type="button" data-speak="{{ $word['word'] }}"
                                        class="grid h-8 w-8 shrink-0 place-items-center rounded-lg bg-slate-50 text-slate-400 transition hover:bg-emerald-50 hover:text-emerald-600"
                                        aria-label="Ucapkan kata">
                                        <x-icon name="volume" class="h-[18px] w-[18px]" />
                                    </button>
                                </div>
                                <p class="mt-2 text-sm font-semibold text-slate-700">{{ $word['meaning'] }}</p>
                                @if (! empty($word['example']))
                                    <p class="mt-1.5 text-xs italic leading-relaxed text-slate-400">“{{ $word['example'] }}”</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="flex flex-col gap-3 rounded-2xl border border-emerald-100 bg-emerald-50/70 px-5 py-4 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-sm text-emerald-800">Sudah paham materinya? Uji pemahamanmu lewat latihan interaktif.</p>
                <button type="button" data-tab="latihan" class="btn-primary shrink-0">Mulai latihan <x-icon name="arrow-right" class="h-4 w-4" /></button>
            </div>
        </div>

        {{-- ============ LATIHAN ============ --}}
        <div data-panel="latihan" class="mt-5 hidden">
            <div class="mb-4 flex flex-col gap-3 rounded-2xl border border-slate-200 bg-white p-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="section-title flex items-center gap-2">
                        <x-icon name="pencil" class="h-5 w-5 text-emerald-600" /> Latihan {{ $module->title }}
                    </h2>
                    <p class="muted mt-0.5">
                        {{ $module->questions_count }} soal campuran — pilihan ganda, isi kosong, benar/salah,
                        matching, listening, dan speaking. Nilai langsung muncul setelah dikumpulkan.
                    </p>
                </div>
                <div class="flex flex-wrap gap-1.5">
                    @foreach ($skillCounts as $skill => $count)
                        <span class="chip text-[13px]">
                            <x-icon name="{{ \App\Enums\QuestionSkill::from($skill)->lineIcon() }}" class="h-4 w-4" />
                            {{ \App\Enums\QuestionSkill::from($skill)->label() }} {{ $count }}
                        </span>
                    @endforeach
                </div>
            </div>

            <div data-exercise-status class="mb-2 text-xs font-semibold text-slate-400"></div>

            <div id="exercise-root" data-exercise></div>

            <script type="application/json" id="exercise-data">
                {!! json_encode([
                    'mode' => 'module',
                    'endpoint' => route('attempts.store', $module),
                    'levelUrl' => route('levels.show', $level),
                    'questions' => $practice,
                ], JSON_HEX_TAG | JSON_UNESCAPED_SLASHES) !!}
            </script>
        </div>

        {{-- ============ RIWAYAT ============ --}}
        <div data-panel="riwayat" class="mt-5 hidden">
            @if ($attempts->isEmpty())
                <div class="card flex flex-col items-center gap-3 p-10 text-center">
                    <span class="grid h-12 w-12 place-items-center rounded-xl bg-slate-50 text-slate-400">
                        <x-icon name="clock" class="h-6 w-6" />
                    </span>
                    <p class="muted">Belum ada nilai untuk modul ini. Kerjakan latihannya dulu, ya.</p>
                    <button type="button" data-tab="latihan" class="btn-primary">Mulai latihan <x-icon name="arrow-right" class="h-4 w-4" /></button>
                </div>
            @else
                <div class="card overflow-hidden">
                    <div class="hidden grid-cols-12 gap-3 border-b border-slate-100 bg-slate-50 px-5 py-3 text-[13px] font-medium text-slate-500 sm:grid">
                        <span class="col-span-4">Waktu</span>
                        <span class="col-span-3">Nilai</span>
                        <span class="col-span-3">Status</span>
                        <span class="col-span-2 text-right">Detail</span>
                    </div>

                    @foreach ($attempts as $attempt)
                        <div class="grid grid-cols-12 items-center gap-3 border-b border-slate-100 px-5 py-3 last:border-b-0">
                            <span class="col-span-6 text-sm text-slate-600 sm:col-span-4">{{ $attempt->created_at->format('d M Y · H:i') }}</span>
                            <span class="col-span-3 text-sm font-bold tabular-nums text-slate-900 sm:col-span-3">{{ round($attempt->percentage) }}%</span>
                            <span class="col-span-3 sm:col-span-3">
                                <span class="answer-pill {{ $attempt->percentage >= 60 ? 'pill-correct' : 'pill-wrong' }}">{{ $attempt->statusLabel() }}</span>
                            </span>
                            <a href="{{ route('attempts.show', $attempt) }}"
                                class="col-span-12 text-sm font-semibold text-emerald-600 hover:underline sm:col-span-2 sm:text-right">Buka</a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Module navigation --}}
        <div class="mt-8 grid gap-3 sm:grid-cols-2">
            @if ($previousModule)
                <a href="{{ route('modules.show', $previousModule) }}"
                    class="card group flex items-center gap-3 p-4 transition hover:border-emerald-300">
                    <x-icon name="arrow-left" class="h-5 w-5 shrink-0 text-slate-400" />
                    <div class="min-w-0">
                        <p class="text-[13px] font-medium text-slate-400">Modul sebelumnya</p>
                        <p class="truncate text-sm font-semibold text-slate-800 group-hover:text-emerald-700">{{ $previousModule->title }}</p>
                    </div>
                </a>
            @else
                <div></div>
            @endif

            @if ($nextModule)
                <a href="{{ route('modules.show', $nextModule) }}"
                    class="card group flex items-center justify-end gap-3 p-4 text-right transition hover:border-emerald-300">
                    <div class="min-w-0">
                        <p class="text-[13px] font-medium text-slate-400">Modul berikutnya</p>
                        <p class="truncate text-sm font-semibold text-slate-800 group-hover:text-emerald-700">{{ $nextModule->title }}</p>
                    </div>
                    <x-icon name="arrow-right" class="h-5 w-5 shrink-0 text-slate-400" />
                </a>
            @else
                <a href="{{ route('levels.show', $level) }}" class="card group flex items-center justify-end gap-3 p-4 text-right transition hover:border-emerald-300">
                    <div>
                        <p class="text-[13px] font-medium text-slate-400">Modul terakhir</p>
                        <p class="text-sm font-semibold text-slate-800 group-hover:text-emerald-700">Kembali ke {{ $level->name }}</p>
                    </div>
                    <x-icon name="arrow-right" class="h-5 w-5 shrink-0 text-slate-400" />
                </a>
            @endif
        </div>
    </div>
@endsection
