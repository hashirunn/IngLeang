@extends('layouts.app')

@section('title', 'Hasil Latihan')

@section('content')
    @php
        $percent = (int) round($attempt->percentage);
        $correctCount = collect($results)->where('is_correct', true)->count();
        $tone = match (true) {
            $percent >= 90 => 'emerald',
            $percent >= 80 => 'teal',
            $percent >= 60 => 'amber',
            default => 'rose',
        };
        $ringClass = match ($tone) {
            'emerald' => 'stroke-emerald-400',
            'teal' => 'stroke-teal-400',
            'amber' => 'stroke-amber-400',
            default => 'stroke-rose-400',
        };
        $typeIcons = [
            'mcq' => 'check-badge',
            'fill_blank' => 'pencil',
            'true_false' => 'scale',
            'matching' => 'puzzle',
            'speaking' => 'mic',
        ];
        $typeLabels = [
            'mcq' => 'Pilihan ganda',
            'fill_blank' => 'Isi kosong',
            'true_false' => 'Benar/Salah',
            'matching' => 'Matching',
            'speaking' => 'Speaking',
        ];
        $describe = function (array $result, mixed $value) {
            if ($value === null || $value === '' || $value === []) {
                return 'Tidak dijawab';
            }

            return match ($result['type']) {
                'mcq' => ($result['options'][(int) $value] ?? $value),
                'true_false' => filter_var($value, FILTER_VALIDATE_BOOLEAN) ? 'Benar' : 'Salah',
                default => is_scalar($value) ? (string) $value : json_encode($value),
            };
        };
    @endphp

    <div class="animate-fade-up">
        <nav class="mb-4 flex flex-wrap items-center gap-2 text-xs font-semibold text-slate-400">
            <a href="{{ route('dashboard') }}" class="hover:text-emerald-600">Dashboard</a>
            <span>/</span>
            @if ($attempt->module)
                <a href="{{ route('levels.show', $attempt->module->level) }}" class="hover:text-emerald-600">
                    Level {{ $attempt->module->level->level_order }}
                </a>
                <span>/</span>
                <a href="{{ route('modules.show', $attempt->module) }}" class="hover:text-emerald-600">{{ $attempt->module->title }}</a>
                <span>/</span>
            @endif
            <span class="text-slate-600">Hasil latihan</span>
        </nav>

        {{-- Score card --}}
        <div class="card overflow-hidden">
            <div class="relative overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 px-5 py-7 text-white sm:px-8">
                <div class="absolute -right-12 -top-16 h-56 w-56 rounded-full bg-emerald-400/20 blur-3xl"></div>
                <div class="relative flex flex-col items-center gap-6 sm:flex-row">
                    <div class="relative h-32 w-32 shrink-0">
                        <svg class="h-32 w-32 -rotate-90" viewBox="0 0 120 120">
                            <circle cx="60" cy="60" r="54" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="10"></circle>
                            <circle cx="60" cy="60" r="54" fill="none" stroke-width="10" stroke-linecap="round"
                                class="{{ $ringClass }}" stroke-dasharray="{{ 2 * M_PI * 54 }}"
                                stroke-dashoffset="{{ 2 * M_PI * 54 }}"
                                style="transition: stroke-dashoffset 1.1s cubic-bezier(0.22, 1, 0.36, 1)"
                                data-ring-target="{{ 2 * M_PI * 54 - (2 * M_PI * 54 * $percent / 100) }}"></circle>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <span class="text-3xl font-bold" data-count-up="{{ $percent }}">{{ $percent }}</span>
                            <span class="text-xs font-medium text-white/60">nilai</span>
                        </div>
                    </div>

                    <div class="flex-1 text-center sm:text-left">
                        <span class="chip border-white/10 bg-white/10 text-white/80">{{ $attempt->statusLabel() }}</span>
                        <h1 class="mt-2 text-2xl font-bold tracking-tight sm:text-3xl">
                            @if ($percent >= 90)
                                Luar biasa!
                            @elseif ($percent >= 80)
                                Bagus sekali!
                            @elseif ($percent >= 60)
                                Bagus, tinggal dipoles
                            @else
                                Ayo pelajari materinya lagi
                            @endif
                        </h1>
                        <p class="mt-1 text-sm text-white/70">
                            {{ $correctCount }} dari {{ count($results) }} soal benar ·
                            {{ $attempt->earned }} dari {{ $attempt->max_points }} poin ·
                            {{ $attempt->created_at->format('d M Y, H:i') }}
                        </p>
                        @if ($attempt->module)
                            <p class="mt-1 text-xs text-white/50">{{ $attempt->module->level->name }} · Modul {{ $attempt->module->module_order }} · {{ $attempt->module->title }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-2 px-5 py-4 sm:px-8">
                @if ($attempt->module)
                    <a href="{{ route('modules.show', $attempt->module) }}#latihan" class="btn-primary">
                        <x-icon name="refresh" class="h-4 w-4" /> Kerjakan lagi
                    </a>
                    <a href="{{ route('levels.show', $attempt->module->level) }}" class="btn-secondary">Kembali ke {{ $attempt->module->level->name }}</a>
                    <a href="{{ route('dashboard') }}" class="btn-secondary">Dashboard</a>
                @else
                    <a href="{{ route('placement.show') }}" class="btn-primary">Lihat hasil tes penempatan</a>
                    <a href="{{ route('levels.index') }}" class="btn-secondary">Semua level</a>
                @endif
            </div>
        </div>

        {{-- Review --}}
        <h2 class="section-title mb-3 mt-7 flex items-center gap-2">
            <x-icon name="clipboard-check" class="h-5 w-5 text-emerald-600" /> Pembahasan jawaban
        </h2>

        <div class="space-y-3">
            @foreach ($results as $index => $result)
                <div class="review-item" style="animation-delay: {{ min($index * 60, 480) }}ms">
                    <div class="flex items-start gap-3">
                        <span
                            class="mt-0.5 grid h-7 w-7 shrink-0 place-items-center rounded-lg {{ $result['is_correct'] ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700' }}">
                            <x-icon name="{{ $result['is_correct'] ? 'check' : 'x' }}" class="h-4 w-4" />
                        </span>

                        <div class="min-w-0 flex-1">
                            <div class="flex flex-wrap items-center gap-2 text-xs">
                                <span class="chip">
                                    <x-icon name="{{ $typeIcons[$result['type']] ?? 'pencil' }}" class="h-3.5 w-3.5" />
                                    {{ $typeLabels[$result['type']] ?? 'Soal' }}
                                </span>
                                <span class="chip">
                                    <x-icon name="{{ \App\Enums\QuestionSkill::from($result['skill'])->lineIcon() }}" class="h-3.5 w-3.5" />
                                    {{ \App\Enums\QuestionSkill::from($result['skill'])->label() }}
                                </span>
                                <span class="answer-pill {{ $result['is_correct'] ? 'pill-correct' : 'pill-wrong' }}">
                                    {{ rtrim(rtrim(number_format($result['earned'], 2, '.', ''), '0'), '.') }}/{{ rtrim(rtrim(number_format($result['max'], 2, '.', ''), '0'), '.') }} poin
                                </span>
                            </div>

                            <div class="lesson-body mt-2 text-[15px]">{!! $result['prompt'] !!}</div>

                            @if (! empty($result['audio_text']))
                                <div class="mt-2 flex flex-wrap items-center gap-2 rounded-xl bg-sky-50 px-3 py-2 text-sm text-sky-800">
                                    <span class="font-semibold">Transkrip audio:</span>
                                    <span class="italic">“{{ $result['audio_text'] }}”</span>
                                    <button type="button" data-speak="{{ $result['audio_text'] }}"
                                        class="btn bg-sky-600 px-2.5 py-1 text-xs text-white hover:bg-sky-500">
                                        <x-icon name="volume" class="h-3.5 w-3.5" /> Putar
                                    </button>
                                </div>
                            @endif

                            @if ($result['type'] === 'matching')
                                @php
                                    $given = is_array($result['user_answer'] ?? null) ? $result['user_answer'] : [];
                                @endphp
                                <div class="mt-3 grid gap-2 sm:grid-cols-2">
                                    @foreach ($result['correct_answer'] as $pair)
                                        @php
                                            $answer = $given[$pair['left']] ?? null;
                                            $isPairCorrect = $answer !== null && strcasecmp((string) $answer, (string) $pair['right']) === 0;
                                        @endphp
                                        <div
                                            class="rounded-xl border p-3 text-sm {{ $isPairCorrect ? 'border-emerald-200 bg-emerald-50/50' : 'border-rose-200 bg-rose-50/40' }}">
                                            <p class="font-semibold text-slate-800">{{ $pair['left'] }}</p>
                                            <p class="mt-0.5 text-xs text-slate-500">
                                                Jawabanmu:
                                                <span class="font-semibold {{ $isPairCorrect ? 'text-emerald-700' : 'text-rose-700' }}">
                                                    {{ $answer ?? 'Tidak dijawab' }}
                                                </span>
                                            </p>
                                            @if (! $isPairCorrect)
                                                <p class="text-xs text-slate-500">Kunci: <span class="font-semibold text-emerald-700">{{ $pair['right'] }}</span></p>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @elseif ($result['type'] === 'speaking')
                                <div class="mt-3 space-y-1.5 rounded-xl border border-slate-200 p-3 text-sm">
                                    <p><span class="font-semibold text-slate-600">Jawabanmu:</span>
                                        “{{ $result['user_answer'] ?: 'Tidak dijawab' }}”</p>
                                    <p><span class="font-semibold text-slate-600">Kalimat target:</span> “{{ $result['correct_answer'] }}”</p>
                                    @php
                                        $similarity = $result['max'] > 0 ? round(($result['earned'] / $result['max']) * 100) : 0;
                                    @endphp
                                    <p class="text-xs text-slate-500">Kemiripan:
                                        <span class="font-bold {{ $similarity >= 70 ? 'text-emerald-600' : 'text-rose-500' }}">{{ $similarity }}%</span>
                                    </p>
                                </div>
                            @else
                                <div class="mt-3 flex flex-wrap items-center gap-2 text-sm">
                                    <span class="answer-pill {{ $result['is_correct'] ? 'pill-correct' : 'pill-wrong' }}">
                                        Jawabanmu: {{ $describe($result, $result['user_answer'] ?? null) }}
                                    </span>
                                    @if (! $result['is_correct'])
                                        <span class="answer-pill pill-correct">Kunci: {{ $describe($result, $result['correct_answer']) }}</span>
                                    @endif
                                </div>
                            @endif

                            @if (! empty($result['explanation']))
                                <div class="mt-3 rounded-xl bg-emerald-50/70 px-3 py-2.5 text-sm text-emerald-900">
                                    <span class="font-semibold">Pembahasan:</span> {!! $result['explanation'] !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 flex flex-wrap justify-center gap-2">
            @if ($attempt->module)
                <a href="{{ route('modules.show', $attempt->module) }}" class="btn-dark">Buka materi modul ini</a>
            @endif
            <a href="{{ route('levels.index') }}" class="btn-secondary">Pilih level lain</a>
        </div>
    </div>
@endsection
