import { initExerciseRunner } from './exercise-runner.js';
import { speak, stopSpeaking } from './speech.js';

document.addEventListener('DOMContentLoaded', () => {
    initTabs();
    initSpeechButtons();
    initProgressBars();
    initCountUps();
    initFlash();
    initExercise();
    initConfirmActions();
});

/**
 * Tab panels (Materi / Latihan / Riwayat) driven by [data-tab] buttons.
 */
function initTabs() {
    const navigators = Array.from(document.querySelectorAll('[data-tab]'));
    const triggers = Array.from(document.querySelectorAll('[data-tab][role="tab"]'));

    if (!navigators.length) {
        return;
    }

    const activate = (name, updateHash = true) => {
        triggers.forEach((trigger) => {
            const active = trigger.dataset.tab === name;
            trigger.classList.toggle('bg-white', active);
            trigger.classList.toggle('text-slate-900', active);
            trigger.classList.toggle('shadow-sm', active);
            trigger.classList.toggle('text-slate-500', !active);
            trigger.setAttribute('aria-selected', active ? 'true' : 'false');
        });

        document.querySelectorAll('[data-panel]').forEach((panel) => {
            panel.classList.toggle('hidden', panel.dataset.panel !== name);
        });

        if (name !== 'latihan') {
            stopSpeaking();
        }

        if (updateHash && window.history.replaceState) {
            window.history.replaceState(null, '', `#${name}`);
        }

        document.dispatchEvent(new CustomEvent('inglearn:tab', { detail: name }));
    };

    navigators.forEach((trigger) => {
        trigger.addEventListener('click', () => activate(trigger.dataset.tab));
    });

    const requested = window.location.hash.replace('#', '');
    const exists = triggers.some((trigger) => trigger.dataset.tab === requested);

    activate(exists ? requested : (triggers[0]?.dataset.tab ?? navigators[0].dataset.tab), false);
}

/**
 * Any element with [data-speak] reads its own text (or given value) aloud.
 */
function initSpeechButtons() {
    document.querySelectorAll('[data-speak]').forEach((element) => {
        element.addEventListener('click', (event) => {
            event.preventDefault();
            event.stopPropagation();
            speak(element.dataset.speak || element.textContent.trim(), { rate: 0.9 });
        });
    });
}

/**
 * Animate progress bars that declare data-bar="value".
 */
function initProgressBars() {
    requestAnimationFrame(() => {
        document.querySelectorAll('[data-bar]').forEach((bar) => {
            const value = Math.max(0, Math.min(100, Number(bar.dataset.bar) || 0));
            bar.style.width = `${value}%`;
        });
    });
}

/**
 * Count up numbers that declare data-count-up="value".
 */
function initCountUps() {
    document.querySelectorAll('[data-count-up]').forEach((element) => {
        const target = Number(element.dataset.countUp) || 0;
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

        element.textContent = '0';
        requestAnimationFrame(step);
    });
}

/**
 * Auto dismiss session flash messages.
 */
function initFlash() {
    document.querySelectorAll('[data-flash]').forEach((flash) => {
        setTimeout(() => {
            flash.style.transition = 'opacity .4s ease, transform .4s ease';
            flash.style.opacity = '0';
            flash.style.transform = 'translateY(-8px)';
            setTimeout(() => flash.remove(), 420);
        }, 6500);
    });
}

function initExercise() {
    const root = document.getElementById('exercise-root');
    const data = document.getElementById('exercise-data');

    if (!root || !data) {
        return;
    }

    let started = false;

    const boot = () => {
        if (started) {
            return;
        }
        started = true;
        initExerciseRunner(root, data);
    };

    const activeTab = document.querySelector('[data-tab][aria-selected="true"]')?.dataset.tab;

    if (!activeTab || activeTab === 'latihan') {
        boot();
    }

    document.addEventListener('inglearn:tab', (event) => {
        if (event.detail === 'latihan') {
            boot();
        }
    });
}

/**
 * Confirm dialogs for destructive actions ([data-confirm]).
 */
function initConfirmActions() {
    document.querySelectorAll('[data-confirm]').forEach((element) => {
        element.addEventListener('click', (event) => {
            if (!window.confirm(element.dataset.confirm)) {
                event.preventDefault();
            }
        });
    });
}
