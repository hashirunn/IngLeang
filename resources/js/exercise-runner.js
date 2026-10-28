import { listenOnce, recognitionSupported, speak, stopSpeaking, ttsSupported } from './speech.js';

const LETTERS = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

const CIRCUMFERENCE = 2 * Math.PI * 54;

/**
 * The line-icon set is authored once server side (App\Support\Icons) and
 * published to the page as JSON so JS-rendered UI matches the Blade views.
 */
const ICON_PATHS = loadIconPaths();

const TYPE_ICONS = { mcq: 'check-badge', fill_blank: 'pencil', true_false: 'scale', matching: 'puzzle', speaking: 'mic' };
const TYPE_LABELS = { mcq: 'Pilihan ganda', fill_blank: 'Isi kosong', true_false: 'Benar/Salah', matching: 'Matching', speaking: 'Speaking' };
const SKILL_ICONS = { vocabulary: 'book', grammar: 'puzzle', reading: 'book-open', listening: 'headphones', speaking: 'mic', writing: 'pencil' };
const SKILL_LABELS = {
    vocabulary: 'Kosakata',
    grammar: 'Tata Bahasa',
    reading: 'Membaca',
    listening: 'Menyimak',
    speaking: 'Berbicara',
    writing: 'Menulis',
};

function loadIconPaths() {
    const host = document.getElementById('icon-paths');

    if (!host) {
        return {};
    }

    try {
        return JSON.parse(host.textContent) ?? {};
    } catch (error) {
        return {};
    }
}

function icon(name, className = 'h-4 w-4') {
    const paths = ICON_PATHS[name];

    if (!paths) {
        return '';
    }

    return `<svg class="${className}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">${paths}</svg>`;
}

/**
 * Interactive exercise runner used by both module practice and the
 * placement test. Answers are graded server side and the results are
 * rendered immediately after submission.
 */
export function initExerciseRunner(root, dataElement) {
    if (!root || !dataElement) {
        return;
    }

    const config = JSON.parse(dataElement.textContent);

    const state = {
        questions: config.questions ?? [],
        answers: {},
        index: 0,
        busy: false,
        autoTimer: null,
        mode: config.mode ?? 'module',
        endpoint: config.endpoint,
        csrf: config.csrf,
        levelUrl: config.levelUrl ?? null,
        startedAt: Date.now(),
    };

    const statusHost = root.querySelector('[data-exercise-status]') ?? document.querySelector('[data-exercise-status]');

    function toast(message, type = 'error') {
        const host = document.getElementById('toast-host');
        if (!host) {
            window.alert(message);
            return;
        }

        const el = document.createElement('div');
        el.className = [
            'animate-slide-in rounded-xl px-4 py-3 text-sm font-medium shadow-lg',
            type === 'error' ? 'bg-rose-600 text-white' : 'bg-slate-900 text-white',
        ].join(' ');
        el.textContent = message;
        host.appendChild(el);

        setTimeout(() => {
            el.style.transition = 'opacity .3s ease';
            el.style.opacity = '0';
            setTimeout(() => el.remove(), 320);
        }, 3600);
    }

    function clearAutoAdvance() {
        if (state.autoTimer) {
            clearTimeout(state.autoTimer);
            state.autoTimer = null;
        }
    }

    function autoAdvance() {
        clearAutoAdvance();
        state.autoTimer = setTimeout(() => {
            if (state.index < state.questions.length - 1) {
                state.index += 1;
                renderQuestion();
            }
        }, 320);
    }

    function setAnswer(questionId, value) {
        state.answers[questionId] = value;
    }

    function hasAnswer(question) {
        const value = state.answers[question.id];

        if (value === undefined || value === null || value === '') {
            return false;
        }

        if (question.type === 'matching') {
            return Object.keys(value).length > 0;
        }

        return true;
    }

    function answeredCount() {
        return state.questions.filter((question) => hasAnswer(question)).length;
    }

    /* ------------------------------------------------------------------ */
    /* Rendering: question screen                                          */
    /* ------------------------------------------------------------------ */

    function renderQuestion() {
        stopSpeaking();
        clearAutoAdvance();

        const question = state.questions[state.index];
        const total = state.questions.length;
        const progress = Math.round(((state.index + 1) / total) * 100);
        const isLast = state.index === total - 1;

        root.innerHTML = `
            <div class="card overflow-hidden animate-fade-up">
                <div class="border-b border-slate-100 px-4 py-4 sm:px-6">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="chip">
                                ${icon(SKILL_ICONS[question.skill] ?? 'sparkle', 'h-3.5 w-3.5')} ${escapeHtml(question.skill_label)}
                            </span>
                            <span class="chip">
                                ${icon(TYPE_ICONS[question.type] ?? 'pencil', 'h-3.5 w-3.5')} ${escapeHtml(question.type_label)}
                            </span>
                            ${question.has_audio ? `<span class="chip border-sky-100 bg-sky-50 text-sky-700">${icon('headphones', 'h-3.5 w-3.5')} Listening</span>` : ''}
                        </div>
                        <span class="text-xs font-semibold text-slate-400">Soal ${state.index + 1} / ${total}</span>
                    </div>
                    <div class="mt-3 h-2 overflow-hidden rounded-full bg-slate-100">
                        <div class="h-full rounded-full bg-emerald-500 transition-all duration-500" style="width: ${progress}%"></div>
                    </div>
                </div>

                <div class="space-y-5 px-4 py-5 sm:px-6 sm:py-6" data-body>
                    ${renderBody(question)}
                </div>

                <div class="flex flex-col gap-3 border-t border-slate-100 px-4 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                    <button type="button" data-prev class="btn-secondary ${state.index === 0 ? 'invisible' : ''}">
                        ${icon('arrow-left', 'h-4 w-4')} Sebelumnya
                    </button>
                    <div class="flex flex-1 items-center justify-end gap-3">
                        <span class="hidden text-xs text-slate-400 sm:inline" data-answered-hint>
                            ${answeredCount()} / ${total} terjawab
                        </span>
                        <button type="button" data-next class="${isLast ? 'btn-primary' : 'btn-dark'}">
                            ${isLast ? `Kumpulkan jawaban ${icon('check', 'h-4 w-4')}` : `Berikutnya ${icon('arrow-right', 'h-4 w-4')}`}
                        </button>
                    </div>
                </div>
            </div>`;

        bindQuestionEvents(question, isLast);
    }

    function renderBody(question) {
        const promptHtml = renderPrompt(question);
        const audioPanel = question.has_audio ? renderAudioPanel(question) : '';

        switch (question.type) {
            case 'mcq':
                return `
                    ${audioPanel}
                    <div class="lesson-body text-base">${promptHtml}</div>
                    <div class="grid gap-2.5" data-options>
                        ${question.options
                            .map((option, index) => {
                                const selected = state.answers[question.id] === index;
                                return `
                                <button type="button" class="option" data-option="${index}" ${selected ? 'data-state="selected"' : ''}>
                                    <span class="option-key">${LETTERS[index] ?? index + 1}</span>
                                    <span>${escapeHtml(option)}</span>
                                </button>`;
                            })
                            .join('')}
                    </div>`;

            case 'fill_blank':
                return `
                    ${audioPanel}
                    <div class="lesson-body text-base">${promptHtml}</div>
                    <div>
                        <label class="mb-1.5 block text-xs font-medium text-slate-500">Jawabanmu</label>
                        <input type="text" class="input text-base" data-fill autocomplete="off" autocapitalize="off"
                            spellcheck="false" placeholder="Ketik jawaban di sini..."
                            value="${escapeAttribute(state.answers[question.id] ?? '')}">
                        <p class="mt-2 text-xs text-slate-400">Tekan <kbd class="rounded border border-slate-200 bg-slate-50 px-1.5 py-0.5">Enter</kbd> untuk lanjut. Huruf besar/kecil tidak berpengaruh.</p>
                    </div>`;

            case 'true_false':
                return `
                    ${audioPanel}
                    <div class="lesson-body text-base">${promptHtml}</div>
                    <div class="grid grid-cols-2 gap-3" data-options>
                        <button type="button" class="option justify-center" data-option="true" ${state.answers[question.id] === true ? 'data-state="selected"' : ''}>
                            <span class="option-key">T</span><span class="font-semibold">Benar</span>
                        </button>
                        <button type="button" class="option justify-center" data-option="false" ${state.answers[question.id] === false ? 'data-state="selected"' : ''}>
                            <span class="option-key">F</span><span class="font-semibold">Salah</span>
                        </button>
                    </div>`;

            case 'matching':
                return `
                    <div class="lesson-body text-base">${promptHtml}</div>
                    <div class="space-y-3">
                        ${question.lefts
                            .map((left, index) => {
                                const chosen = state.answers[question.id]?.[left] ?? '';
                                return `
                                <div class="flex flex-col gap-2 rounded-xl border border-slate-200 bg-slate-50/60 p-3 sm:flex-row sm:items-center sm:gap-3">
                                    <span class="flex-1 font-semibold text-slate-800">${escapeHtml(left)}</span>
                                    <span class="hidden text-slate-300 sm:inline">${icon('arrow-right', 'h-4 w-4')}</span>
                                    <select data-match="${escapeAttribute(left)}" class="input sm:w-64">
                                        <option value="">Pilih pasangan...</option>
                                        ${question.rights
                                            .map((right) => `<option value="${escapeAttribute(right)}" ${chosen === right ? 'selected' : ''}>${escapeHtml(right)}</option>`)
                                            .join('')}
                                    </select>
                                </div>`;
                            })
                            .join('')}
                    </div>`;

            case 'speaking':
                return `
                    <div class="lesson-body text-base">${promptHtml}</div>
                    <div class="rounded-2xl border border-emerald-100 bg-emerald-50/70 p-4">
                        <p class="text-[13px] font-medium text-emerald-700">Kalimat yang harus diucapkan</p>
                        <p class="mt-1.5 text-lg font-bold leading-snug text-slate-900">${escapeHtml(question.target ?? '')}</p>
                        ${question.hint ? `<p class="mt-1 text-sm text-slate-500">${escapeHtml(question.hint)}</p>` : ''}
                        <button type="button" class="btn-soft mt-3" data-speak-target>${icon('volume', 'h-4 w-4')} Dengarkan contoh</button>
                    </div>
                    <div class="rounded-2xl border border-slate-200 p-4">
                        <div class="flex flex-wrap items-center gap-3">
                            <button type="button" class="btn-primary" data-mic>${icon('mic', 'h-4 w-4')} Rekam suara</button>
                            <span class="text-xs text-slate-400" data-mic-state>Gunakan mikrofon, atau ketik jawaban.</span>
                        </div>
                        <div class="mt-3" data-transcript hidden>
                            <label class="mb-1.5 block text-xs font-medium text-slate-500">Yang terdengar (boleh diperbaiki)</label>
                            <input type="text" class="input" data-transcript-input autocomplete="off"
                                value="${escapeAttribute(state.answers[question.id] ?? '')}">
                            <div class="mt-3 flex flex-wrap gap-2">
                                <button type="button" class="btn-primary" data-use-transcript>
                                    Gunakan jawaban ini ${icon('check', 'h-4 w-4')}
                                </button>
                                <button type="button" class="btn-secondary" data-mic-again>${icon('refresh', 'h-4 w-4')} Ulangi</button>
                            </div>
                        </div>
                        ${
                            recognitionSupported()
                                ? ''
                                : '<p class="mt-3 rounded-lg bg-amber-50 px-3 py-2 text-xs text-amber-700">Browser ini belum mendukung pengenalan suara. Ketik jawabanmu sebagai gantinya.</p>'
                        }
                    </div>`;

            default:
                return promptHtml;
        }
    }

    function renderPrompt(question) {
        let html = question.prompt ?? '';

        if (question.type === 'fill_blank') {
            html = html.replace(/_{3,}/g, '<span class="mx-1 inline-block w-24 border-b-2 border-emerald-400 align-bottom"></span>');
        }

        return html;
    }

    function renderAudioPanel() {
        if (!ttsSupported()) {
            return '<div class="rounded-xl bg-amber-50 px-4 py-3 text-xs text-amber-700">Browser ini belum mendukung pemutar suara.</div>';
        }

        return `
            <div class="flex flex-wrap items-center gap-3 rounded-2xl border border-sky-100 bg-sky-50/70 p-4">
                <button type="button" class="btn bg-sky-600 text-white hover:bg-sky-500" data-play-audio>${icon('volume', 'h-4 w-4')} Dengarkan audio</button>
                <button type="button" class="btn-secondary" data-play-slow>🐢 Putar perlahan</button>
                <span class="text-xs text-sky-700">Audio diucapkan otomatis saat soal muncul.</span>
            </div>`;
    }

    function bindQuestionEvents(question, isLast) {
        root.querySelectorAll('[data-play-audio]').forEach((button) => {
            button.addEventListener('click', () => speak(audioText(question)));
        });
        root.querySelectorAll('[data-play-slow]').forEach((button) => {
            button.addEventListener('click', () => speak(audioText(question), { rate: 0.6 }));
        });

        const fill = root.querySelector('[data-fill]');
        if (fill) {
            fill.addEventListener('input', () => setAnswer(question.id, fill.value));
            fill.addEventListener('keydown', (event) => {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    goNext();
                }
            });
        }

        root.querySelectorAll('[data-option]').forEach((button) => {
            button.addEventListener('click', () => {
                const raw = button.dataset.option;
                const value = question.type === 'true_false' ? raw === 'true' : Number(raw);

                setAnswer(question.id, value);

                root.querySelectorAll('[data-option]').forEach((item) => item.removeAttribute('data-state'));
                button.setAttribute('data-state', 'selected');

                autoAdvance();
            });
        });

        root.querySelectorAll('[data-match]').forEach((select) => {
            select.addEventListener('change', () => {
                const current = state.answers[question.id] ?? {};
                current[select.dataset.match] = select.value;
                setAnswer(question.id, { ...current });
                updateAnsweredHint();
            });
        });

        const micButton = root.querySelector('[data-mic]');
        const micAgain = root.querySelector('[data-mic-again]');
        const transcriptWrap = root.querySelector('[data-transcript]');
        const transcriptInput = root.querySelector('[data-transcript-input]');
        const useTranscript = root.querySelector('[data-use-transcript]');
        const micState = root.querySelector('[data-mic-state]');
        const speakTarget = root.querySelector('[data-speak-target]');

        if (speakTarget) {
            speakTarget.addEventListener('click', () => speak(question.target, { rate: 0.9 }));
        }

        const record = async () => {
            if (!recognitionSupported()) {
                if (transcriptWrap) {
                    transcriptWrap.hidden = false;
                    transcriptInput?.focus();
                }
                return;
            }

            if (micState) {
                micState.textContent = 'Mendengarkan... ucapkan sekarang.';
                micState.classList.add('text-rose-500', 'font-semibold');
            }
            if (micButton) {
                micButton.disabled = true;
                micButton.innerHTML = `${icon('mic', 'h-4 w-4')} Merekam...`;
            }

            try {
                const result = await listenOnce({ lang: 'en-US', timeout: 10000 });

                if (transcriptWrap) {
                    transcriptWrap.hidden = false;
                }

                if (result.transcript) {
                    if (transcriptInput) {
                        transcriptInput.value = result.transcript;
                    }
                    setAnswer(question.id, result.transcript);
                    if (micState) {
                        micState.textContent = 'Berhasil merekam. Periksa teksnya, lalu klik "Gunakan jawaban ini".';
                        micState.classList.remove('text-rose-500', 'font-semibold');
                    }
                } else {
                    if (micState) {
                        micState.textContent = 'Suara belum terdengar. Coba lagi lebih dekat ke mikrofon.';
                    }
                    if (transcriptInput) {
                        transcriptInput.focus();
                    }
                }
            } catch (error) {
                const messages = {
                    'not-allowed': 'Izin mikrofon ditolak. Izinkan mikrofon di browser, atau ketik jawabanmu.',
                    'service-not-allowed': 'Layanan suara tidak tersedia. Ketik jawabanmu sebagai gantinya.',
                    network: 'Gagal terhubung ke layanan suara. Ketik jawabanmu sebagai gantinya.',
                };
                toast(messages[error.message] ?? 'Gagal mengenali suara. Ketik jawabanmu sebagai gantinya.');
                if (micState) {
                    micState.textContent = 'Pengenalan suara gagal — ketik jawabanmu.';
                }
            } finally {
                if (micButton) {
                    micButton.disabled = false;
                    micButton.innerHTML = `${icon('mic', 'h-4 w-4')} Rekam suara`;
                }
            }
        };

        micButton?.addEventListener('click', record);
        micAgain?.addEventListener('click', record);

        transcriptInput?.addEventListener('input', () => setAnswer(question.id, transcriptInput.value));

        useTranscript?.addEventListener('click', () => {
            const value = (transcriptInput?.value ?? '').trim();
            if (!value) {
                toast('Rekam suaramu atau ketik jawaban terlebih dahulu.');
                return;
            }
            setAnswer(question.id, value);
            if (state.index < state.questions.length - 1) {
                state.index += 1;
            }
            renderQuestion();
        });

        root.querySelector('[data-prev]')?.addEventListener('click', () => {
            clearAutoAdvance();
            if (state.index > 0) {
                state.index -= 1;
                renderQuestion();
            }
        });

        root.querySelector('[data-next]')?.addEventListener('click', () => {
            clearAutoAdvance();
            if (isLast) {
                submit();
                return;
            }
            state.index += 1;
            renderQuestion();
        });

        if (question.has_audio) {
            setTimeout(() => speak(audioText(question), { rate: 0.92 }), 350);
        }

        if (question.type === 'fill_blank') {
            setTimeout(() => root.querySelector('[data-fill]')?.focus(), 120);
        }
    }

    /**
     * Listening transcripts are encoded so they are not readable at a glance;
     * the runner decodes them only to speak the audio.
     */
    function audioText(question) {
        if (question.audio) {
            try {
                return decodeBase64(question.audio);
            } catch (error) {
                return '';
            }
        }

        return question.audio_text ?? question.target ?? '';
    }

    function decodeBase64(value) {
        const binary = window.atob(value);
        const bytes = Uint8Array.from(binary, (character) => character.charCodeAt(0));
        return new TextDecoder('utf-8').decode(bytes);
    }

    function updateAnsweredHint() {
        const hint = root.querySelector('[data-answered-hint]');
        if (hint) {
            hint.textContent = `${answeredCount()} / ${state.questions.length} terjawab`;
        }
    }

    function goNext() {
        clearAutoAdvance();
        if (state.index < state.questions.length - 1) {
            state.index += 1;
            renderQuestion();
        } else {
            submit();
        }
    }

    /* ------------------------------------------------------------------ */
    /* Submission                                                          */
    /* ------------------------------------------------------------------ */

    async function submit() {
        if (state.busy) {
            return;
        }

        const missing = state.questions.length - answeredCount();

        if (missing > 0 && !window.confirm(`Masih ada ${missing} soal yang belum dijawab. Kumpulkan sekarang?`)) {
            return;
        }

        state.busy = true;
        stopSpeaking();

        const submitButton = root.querySelector('[data-next]');
        if (submitButton) {
            submitButton.disabled = true;
            submitButton.innerHTML = 'Memeriksa jawaban...';
        }

        try {
            const response = await fetch(state.endpoint, {
                method: 'POST',
                headers: {
                    Accept: 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': state.csrf,
                    'X-Requested-With': 'XMLHttpRequest',
                },
                body: JSON.stringify({
                    answers: state.answers,
                    question_ids: state.questions.map((question) => question.id),
                }),
            });

            if (!response.ok) {
                const payload = await response.json().catch(() => ({}));
                throw new Error(payload.message ?? 'Gagal mengirim jawaban.');
            }

            const data = await response.json();
            renderResults(data);
        } catch (error) {
            toast(error.message ?? 'Gagal mengirim jawaban. Periksa koneksimu.');
            if (submitButton) {
                submitButton.disabled = false;
                submitButton.innerHTML = `Kumpulkan jawaban ${icon('check', 'h-4 w-4')}`;
            }
        } finally {
            state.busy = false;
        }
    }

    /* ------------------------------------------------------------------ */
    /* Rendering: results                                                  */
    /* ------------------------------------------------------------------ */

    function renderResults(data) {
        const results = data.results ?? [];
        const percent = Math.round(data.percentage ?? 0);
        const correct = results.filter((item) => item.is_correct).length;
        const ringColor = percent >= 80 ? 'stroke-emerald-500' : percent >= 60 ? 'stroke-amber-400' : 'stroke-rose-400';

        const header =
            state.mode === 'placement'
                ? renderPlacementHeader(data, percent)
                : renderModuleHeader(data, percent, correct, results.length);

        root.innerHTML = `
            <div class="space-y-5">
                <div class="card overflow-hidden animate-fade-up">
                    <div class="relative overflow-hidden bg-gradient-to-br from-slate-900 to-slate-800 px-4 py-6 text-white sm:px-6">
                        <div class="absolute -right-8 -top-10 h-40 w-40 rounded-full bg-emerald-400/20 blur-2xl"></div>
                        <div class="relative flex flex-col items-center gap-5 sm:flex-row">
                            <div class="relative h-32 w-32 shrink-0">
                                <svg class="h-32 w-32 -rotate-90" viewBox="0 0 120 120">
                                    <circle cx="60" cy="60" r="54" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="10"></circle>
                                    <circle data-ring cx="60" cy="60" r="54" fill="none" stroke-width="10" stroke-linecap="round"
                                        class="${ringColor}" stroke-dasharray="${CIRCUMFERENCE}" stroke-dashoffset="${CIRCUMFERENCE}"
                                        style="transition: stroke-dashoffset 1.1s cubic-bezier(0.22, 1, 0.36, 1)"></circle>
                                </svg>
                                <div class="absolute inset-0 flex flex-col items-center justify-center">
                                    <span class="text-3xl font-bold" data-count="${percent}">0</span>
                                    <span class="text-xs font-medium text-white/60">nilai</span>
                                </div>
                            </div>
                            <div class="flex-1 text-center sm:text-left">
                                ${header}
                            </div>
                        </div>
                    </div>
                    <div class="grid gap-3 border-t border-slate-100 px-4 py-4 sm:grid-cols-3 sm:px-6">
                        <div class="rounded-xl bg-slate-50 p-3 text-center">
                            <p class="text-2xl font-bold text-slate-900">${data.earned ?? 0}</p>
                            <p class="text-[13px] font-medium text-slate-400">Poin benar</p>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center">
                            <p class="text-2xl font-bold text-slate-900">${data.max ?? results.length}</p>
                            <p class="text-[13px] font-medium text-slate-400">Poin maksimal</p>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center">
                            <p class="text-2xl font-bold text-slate-900">${correct}/${results.length}</p>
                            <p class="text-[13px] font-medium text-slate-400">Soal benar</p>
                        </div>
                    </div>
                </div>

                ${state.mode === 'placement' ? renderLevelScores(data) : ''}

                <div class="flex flex-wrap gap-2">
                    <button type="button" class="btn-secondary" data-retry>${icon('refresh', 'h-4 w-4')} Ulangi latihan</button>
                    ${renderActionButtons(data)}
                </div>

                <div>
                    <h3 class="section-title mb-3 flex items-center gap-2">
                        ${icon('clipboard-check', 'h-5 w-5 text-emerald-600')} Pembahasan jawaban
                    </h3>
                    <div class="space-y-3">
                        ${results.map((item, index) => renderReviewItem(item, index)).join('')}
                    </div>
                </div>
            </div>`;

        animateRing(root.querySelector('[data-ring]'), percent);
        animateCount(root.querySelector('[data-count]'), percent);

        root.querySelector('[data-retry]')?.addEventListener('click', () => {
            state.answers = {};
            state.index = 0;
            state.startedAt = Date.now();
            renderQuestion();
        });

        root.querySelectorAll('[data-speak-answer]').forEach((button) => {
            button.addEventListener('click', () => speak(button.dataset.speakAnswer, { rate: 0.9 }));
        });

        root.scrollTop = 0;
        window.scrollTo({ top: root.getBoundingClientRect().top + window.scrollY - 90, behavior: 'smooth' });
    }

    function renderModuleHeader(data, percent, correct, total) {
        const status = data.status_label ?? '';
        const tone =
            percent >= 80 ? 'bg-emerald-400/15 text-emerald-300' : percent >= 60 ? 'bg-amber-400/15 text-amber-300' : 'bg-rose-400/15 text-rose-300';

        return `
            <div>
                <span class="chip ${tone} border-white/10 bg-white/10 text-white/80">${escapeHtml(status)}</span>
                <h2 class="mt-2 text-xl font-bold sm:text-2xl">
                    ${percent >= 80 ? 'Kerja bagus!' : percent >= 60 ? 'Hampir sempurna!' : 'Ayo pelajari lagi materinya'}
                </h2>
                <p class="mt-1 text-sm text-white/70">
                    ${correct} dari ${total} soal benar.
                    ${data.module_completed ? 'Modul ini sudah kamu selesaikan.' : 'Nilai minimal kelulusan modul: 60.'}
                </p>
                ${data.attempts_count ? `<p class="mt-1 text-xs text-white/50">Percobaan ke-${data.attempts_count} · nilai terbaik ${Math.round(data.best_percentage)}%</p>` : ''}
            </div>`;
    }

    function renderPlacementHeader(data, percent) {
        const recommended = data.recommended ?? {};

        return `
            <div>
                <span class="chip border-white/10 bg-white/10 text-white/80">${icon('compass', 'h-3.5 w-3.5')} Tes Penempatan</span>
                <h2 class="mt-2 text-xl font-bold sm:text-2xl">
                    ${recommended.name ? `Level yang cocok: ${escapeHtml(recommended.name)}` : 'Hasil tes penempatan'}
                </h2>
                <p class="mt-1 text-sm text-white/70">
                    ${recommended.name ? `Kami sarankan kamu mulai dari <strong>${escapeHtml(recommended.name)} (${escapeHtml(recommended.cefr ?? '')})</strong>.` : ''}
                    Nilai rata-rata ${percent}%.
                </p>
            </div>`;
    }

    function renderLevelScores(data) {
        const levels = Object.values(data.levels ?? {});
        const names = data.level_names ?? {};

        if (!levels.length) {
            return '';
        }

        return `
            <div class="card p-4 sm:p-5">
                <h3 class="section-title mb-3">Rincian per level</h3>
                <div class="space-y-3">
                    ${levels
                        .map(
                            (level) => `
                            <div>
                                <div class="mb-1 flex items-center justify-between text-sm">
                                    <span class="font-semibold text-slate-700">${escapeHtml(names[level.level_id] ?? 'Level')}</span>
                                    <span class="font-bold ${level.percent >= 70 ? 'text-emerald-600' : 'text-slate-400'}">${level.percent}%</span>
                                </div>
                                <div class="h-2.5 overflow-hidden rounded-full bg-slate-100">
                                    <div class="h-full rounded-full ${level.percent >= 70 ? 'bg-emerald-500' : 'bg-slate-300'} transition-all duration-700" style="width: ${level.percent}%"></div>
                                </div>
                            </div>`,
                        )
                        .join('')}
                </div>
            </div>`;
    }

    function renderActionButtons(data) {
        if (state.mode === 'placement') {
            const target = data.start_url ?? state.levelUrl ?? '/levels';
            return `
                <a href="${escapeAttribute(target)}" class="btn-primary">Mulai belajar di level ${escapeHtml(data.recommended?.name ?? '')} ${icon('arrow-right', 'h-4 w-4')}</a>
                <a href="/levels" class="btn-secondary">Lihat semua level</a>`;
        }

        const buttons = [];

        if (data.result_url) {
            buttons.push(`<a href="${escapeAttribute(data.result_url)}" class="btn-secondary">Lihat detail hasil</a>`);
        }

        if (data.next_module_url) {
            buttons.push(`<a href="${escapeAttribute(data.next_module_url)}" class="btn-primary">Lanjut modul berikutnya ${icon('arrow-right', 'h-4 w-4')}</a>`);
        } else if (state.levelUrl) {
            buttons.push(`<a href="${escapeAttribute(state.levelUrl)}" class="btn-primary">Kembali ke level ${icon('arrow-right', 'h-4 w-4')}</a>`);
        }

        return buttons.join('');
    }

    function renderReviewItem(item, index) {
        const correct = item.is_correct;
        const typeIcon = TYPE_ICONS[item.type] ?? 'pencil';
        const typeLabel = TYPE_LABELS[item.type] ?? item.type ?? 'Soal';

        return `
            <div class="review-item" style="animation-delay: ${Math.min(index * 60, 480)}ms">
                <div class="flex items-start gap-3">
                    <span class="mt-0.5 grid h-7 w-7 shrink-0 place-items-center rounded-lg ${
                        correct ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700'
                    }">${icon(correct ? 'check' : 'x', 'h-4 w-4')}</span>
                    <div class="min-w-0 flex-1">
                        <div class="flex flex-wrap items-center gap-2 text-xs">
                            <span class="chip">${icon(typeIcon, 'h-3.5 w-3.5')} ${escapeHtml(typeLabel)}</span>
                            <span class="chip">
                                ${icon(SKILL_ICONS[item.skill] ?? 'sparkle', 'h-3.5 w-3.5')}
                                ${escapeHtml(SKILL_LABELS[item.skill] ?? item.skill ?? '')}
                            </span>
                            <span class="answer-pill ${correct ? 'pill-correct' : 'pill-wrong'}">
                                ${correct ? `+${formatPoints(item.earned)} poin` : `${formatPoints(item.earned)} dari ${formatPoints(item.max)} poin`}
                            </span>
                        </div>

                        <div class="lesson-body mt-2 text-[15px]">${item.prompt ?? ''}</div>

                        ${item.audio_text ? renderTranscript(item) : ''}
                        ${renderAnswers(item)}

                        ${
                            item.explanation
                                ? `<div class="mt-3 rounded-xl bg-emerald-50/70 px-3 py-2.5 text-sm text-emerald-900">
                                        <span class="font-semibold">Pembahasan:</span> ${item.explanation}
                                   </div>`
                                : ''
                        }
                    </div>
                </div>
            </div>`;
    }

    function renderTranscript(item) {
        return `
            <div class="mt-2 flex flex-wrap items-center gap-2 rounded-xl bg-sky-50 px-3 py-2 text-sm text-sky-800">
                <span class="font-semibold">Transkrip audio:</span>
                <span class="italic">“${escapeHtml(item.audio_text)}”</span>
                <button type="button" class="btn bg-sky-600 px-2.5 py-1 text-xs text-white hover:bg-sky-500" data-speak-answer="${escapeAttribute(item.audio_text)}">${icon('volume', 'h-3.5 w-3.5')} Putar</button>
            </div>`;
    }

    function renderAnswers(item) {
        if (item.type === 'matching') {
            const correctPairs = new Map((item.correct_answer ?? []).map((pair) => [pair.left, pair.right]));
            const given = item.user_answer ?? {};
            const lefts = [...new Set([...correctPairs.keys(), ...Object.keys(given)])];

            return `
                <div class="mt-3 grid gap-2 sm:grid-cols-2">
                    ${lefts
                        .map((left) => {
                            const expected = correctPairs.get(left) ?? '—';
                            const answer = given[left] ?? 'Tidak dijawab';
                            const ok = answer === expected;
                            return `
                            <div class="rounded-xl border ${ok ? 'border-emerald-200 bg-emerald-50/50' : 'border-rose-200 bg-rose-50/40'} p-3 text-sm">
                                <p class="font-semibold text-slate-800">${escapeHtml(left)}</p>
                                <p class="mt-1 text-xs text-slate-500">Jawabanmu: <span class="${ok ? 'text-emerald-700' : 'text-rose-700'} font-semibold">${escapeHtml(answer)}</span></p>
                                ${ok ? '' : `<p class="text-xs text-slate-500">Kunci: <span class="font-semibold text-emerald-700">${escapeHtml(expected)}</span></p>`}
                            </div>`;
                        })
                        .join('')}
                </div>`;
        }

        const userLabel = describeAnswer(item, item.user_answer);
        const correctLabel = describeAnswer(item, item.correct_answer, true);

        if (item.type === 'speaking') {
            return `
                <div class="mt-3 space-y-2 rounded-xl border border-slate-200 p-3 text-sm">
                    <p><span class="font-semibold text-slate-600">Jawabanmu:</span> “${escapeHtml(userLabel)}”</p>
                    <p><span class="font-semibold text-slate-600">Kalimat target:</span> “${escapeHtml(correctLabel)}”</p>
                    <p class="text-xs text-slate-500">Kemiripan: <span class="font-bold ${item.earned >= 0.7 ? 'text-emerald-600' : 'text-rose-500'}">${Math.round(((item.earned ?? 0) / (item.max || 1)) * 100)}%</span></p>
                </div>`;
        }

        return `
            <div class="mt-3 flex flex-wrap items-center gap-2 text-sm">
                <span class="answer-pill ${item.is_correct ? 'pill-correct' : 'pill-wrong'}">Jawabanmu: ${escapeHtml(userLabel)}</span>
                ${item.is_correct ? '' : `<span class="answer-pill pill-correct">Kunci: ${escapeHtml(correctLabel)}</span>`}
            </div>`;
    }

    function describeAnswer(item, value, isCorrect = false) {
        if (value === null || value === undefined || value === '') {
            return 'Tidak dijawab';
        }

        switch (item.type) {
            case 'mcq':
                return `${LETTERS[Number(value)] ?? ''}. ${item.options?.[Number(value)] ?? value}`;
            case 'true_false':
                return value === true || value === 'true' ? 'Benar' : 'Salah';
            case 'speaking':
                return typeof value === 'string' ? value : JSON.stringify(value);
            case 'fill_blank':
                return String(value);
            default:
                if (isCorrect && Array.isArray(value)) {
                    return value.map((pair) => `${pair.left} → ${pair.right}`).join(', ');
                }
                return typeof value === 'object' ? JSON.stringify(value) : String(value);
        }
    }

    function formatPoints(value) {
        const number = Number(value ?? 0);
        return Number.isInteger(number) ? String(number) : number.toFixed(2);
    }

    function animateRing(circle, percent) {
        if (!circle) {
            return;
        }
        const offset = CIRCUMFERENCE - (CIRCUMFERENCE * percent) / 100;
        requestAnimationFrame(() => {
            circle.style.strokeDashoffset = String(offset);
        });
    }

    function animateCount(element, target) {
        if (!element) {
            return;
        }

        const duration = 900;
        const start = performance.now();

        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            element.textContent = String(Math.round(target * eased));
            if (progress < 1) {
                requestAnimationFrame(step);
            }
        };

        requestAnimationFrame(step);
    }

    function escapeHtml(value) {
        return String(value ?? '')
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    function escapeAttribute(value) {
        return escapeHtml(value).replace(/'/g, '&#39;');
    }

    // The listening transcript is not sent before grading; the runner keeps
    // a spoken copy through the TTS engine instead.
    if (statusHost) {
        statusHost.textContent = `${state.questions.length} soal siap dikerjakan`;
    }

    renderQuestion();
}
