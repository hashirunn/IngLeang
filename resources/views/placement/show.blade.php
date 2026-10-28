@extends('layouts.app')

@section('title', 'Tes Penempatan')

@section('content')
    <div class="animate-fade-up">
        <nav class="mb-4 flex items-center gap-2 text-xs font-semibold text-slate-400">
            <a href="{{ route('dashboard') }}" class="hover:text-emerald-600">Dashboard</a>
            <span>/</span>
            <span class="text-slate-600">Tes Penempatan</span>
        </nav>

        {{-- Hero --}}
        <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-slate-900 via-indigo-900 to-slate-900 p-6 text-white shadow-lg sm:p-8">
            <div class="absolute -right-14 -top-16 h-56 w-56 rounded-full bg-indigo-500/20 blur-3xl"></div>
            <div class="relative flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="chip items-center gap-1.5 border-white/15 bg-white/10 text-white">
                        <x-icon name="compass" class="h-3.5 w-3.5" /> Tes Penempatan
                    </span>
                    <h1 class="mt-3 text-3xl font-bold tracking-tight sm:text-4xl">Mulai dari level yang tepat</h1>
                    <p class="mt-2 max-w-2xl text-sm leading-relaxed text-white/80">
                        {{ count($questions) }} soal singkat campuran dari ketiga level. Hasilnya langsung
                        memberi rekomendasi level belajar — dan membuka level tersebut untukmu.
                    </p>
                </div>
                <div class="flex gap-3 text-center sm:text-right">
                    <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-3 backdrop-blur">
                        <p class="text-2xl font-bold">{{ count($questions) }}</p>
                        <p class="mt-0.5 text-xs font-medium text-white/70">Soal</p>
                    </div>
                    <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-3 backdrop-blur">
                        <p class="text-2xl font-bold">±5</p>
                        <p class="mt-0.5 text-xs font-medium text-white/70">Menit</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Result from the last submission (server rendered) --}}
        @if (session('scoresByLevel') && session('recommended'))
            @php
                $recommendedLevel = \App\Models\Level::where('slug', session('recommended'))->first();
            @endphp

            @if ($recommendedLevel)
                <div class="mt-5 overflow-hidden rounded-3xl border border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-5 sm:p-6">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <span class="chip items-center gap-1.5 border-emerald-200 bg-white/70 text-emerald-700">
                                <x-icon name="check-badge" class="h-3.5 w-3.5" /> Hasil tes
                            </span>
                            <h2 class="mt-2 text-xl font-bold text-slate-900 sm:text-2xl">
                                Level yang cocok: {{ $recommendedLevel->name }} ({{ $recommendedLevel->cefr }})
                            </h2>
                            <p class="muted mt-1">{{ $recommendedLevel->description }}</p>
                        </div>
                        <a href="{{ route('levels.show', $recommendedLevel) }}" class="btn-primary shrink-0 items-center gap-2">
                            Mulai belajar <x-icon name="arrow-right" class="h-4 w-4" />
                        </a>
                    </div>

                    <div class="mt-5 space-y-3">
                        @foreach (session('scoresByLevel') as $levelId => $score)
                            @php
                                $level = \App\Models\Level::find($levelId);
                            @endphp
                            @if ($level)
                                <div>
                                    <div class="mb-1 flex items-center justify-between text-sm">
                                        <span class="font-semibold text-slate-700">
                                            Level {{ $level->level_order }} · {{ $level->name }}
                                        </span>
                                        <span class="font-bold {{ $score['percent'] >= 70 ? 'text-emerald-600' : 'text-slate-400' }}">
                                            {{ $score['percent'] }}% ({{ rtrim(rtrim(number_format($score['earned'], 2, '.', ''), '0'), '.') }}/{{ $score['total'] }} poin)
                                        </span>
                                    </div>
                                    <div class="h-2.5 overflow-hidden rounded-full bg-white/80">
                                        <div data-bar="{{ $score['percent'] }}"
                                            class="h-full rounded-full transition-all duration-700 {{ $score['percent'] >= 70 ? 'bg-emerald-500' : 'bg-slate-300' }}"
                                            style="width: 0"></div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        @elseif ($recommendedLevel)
            <div class="mt-5 flex flex-wrap items-center justify-between gap-3 rounded-2xl border border-indigo-100 bg-indigo-50 px-4 py-3">
                <p class="text-sm text-indigo-800">
                    Rekomendasi terakhirmu: <strong>Level {{ $recommendedLevel->level_order }} · {{ $recommendedLevel->name }}</strong>.
                    Kamu boleh mengerjakan tes ini lagi kapan saja.
                </p>
                <a href="{{ route('levels.show', $recommendedLevel) }}" class="btn-secondary">Lanjut belajar</a>
            </div>
        @endif

        {{-- How it works --}}
        <div class="mt-5 grid gap-3 sm:grid-cols-3">
            <div class="card p-4">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-700">1</span>
                <p class="mt-3 text-sm font-semibold text-slate-800">Jawab {{ count($questions) }} soal</p>
                <p class="muted mt-1">Pilihan ganda, isi kosong, dan benar/salah dari ketiga level.</p>
            </div>
            <div class="card p-4">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-700">2</span>
                <p class="mt-3 text-sm font-semibold text-slate-800">Nilai per level dihitung</p>
                <p class="muted mt-1">Minimal 70% pada level menengah/mahir untuk naik level.</p>
            </div>
            <div class="card p-4">
                <span class="grid h-9 w-9 place-items-center rounded-xl bg-indigo-50 text-sm font-bold text-indigo-700">3</span>
                <p class="mt-3 text-sm font-semibold text-slate-800">Level langsung terbuka</p>
                <p class="muted mt-1">Rekomendasi disimpan ke profilmu dan membuka level tersebut.</p>
            </div>
        </div>

        {{-- Runner --}}
        <div class="mt-6 flex flex-wrap items-center justify-between gap-3">
            <h2 class="section-title flex items-center gap-2">
                <x-icon name="pencil" class="h-5 w-5 text-emerald-600" /> Mulai kerjakan
            </h2>
            <span class="chip">Bisa diulang kapan saja</span>
        </div>

        <div data-exercise-status class="mb-2 mt-2 text-xs font-semibold text-slate-400"></div>

        <div id="exercise-root" data-exercise></div>

        <script type="application/json" id="exercise-data">
            {!! json_encode([
                'mode' => 'placement',
                'endpoint' => route('placement.store'),
                'levelUrl' => route('levels.index'),
                'questions' => $questions,
            ], JSON_HEX_TAG | JSON_UNESCAPED_SLASHES) !!}
        </script>

        @if ($lastResult)
            <p class="mt-6 text-center text-xs text-slate-400">
                Tes terakhir: {{ $lastResult->created_at->format('d M Y, H:i') }} ·
                nilai {{ round($lastResult->percentage) }}% ·
                <a href="{{ route('attempts.show', $lastResult) }}" class="font-bold text-emerald-600 hover:underline">lihat pembahasan</a>
            </p>
        @endif
    </div>
@endsection
