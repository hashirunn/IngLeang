/**
 * Thin wrappers around the Web Speech API (text-to-speech + speech recognition)
 * used for listening and speaking exercises.
 */

export const ttsSupported = () => typeof window.speechSynthesis !== 'undefined';

export const recognitionSupported = () =>
    typeof (window.SpeechRecognition || window.webkitSpeechRecognition) !== 'undefined';

let currentUtterance = null;

/**
 * Speak English text aloud. Resolves when playback finishes.
 */
export function speak(text, { rate = 0.95, pitch = 1, lang = 'en-US' } = {}) {
    return new Promise((resolve) => {
        if (!ttsSupported() || !text) {
            resolve(false);
            return;
        }

        window.speechSynthesis.cancel();

        const utterance = new SpeechSynthesisUtterance(text);
        utterance.lang = lang;
        utterance.rate = rate;
        utterance.pitch = pitch;

        const englishVoice =
            window.speechSynthesis
                .getVoices()
                .find((voice) => /^en(-|_)(US|GB)/i.test(voice.lang)) ??
            window.speechSynthesis.getVoices().find((voice) => voice.lang.startsWith('en'));

        if (englishVoice) {
            utterance.voice = englishVoice;
        }

        utterance.onend = () => resolve(true);
        utterance.onerror = () => resolve(false);

        currentUtterance = utterance;
        window.speechSynthesis.speak(utterance);
    });
}

export function stopSpeaking() {
    if (ttsSupported()) {
        window.speechSynthesis.cancel();
    }
    currentUtterance = null;
}

/**
 * Listen once with the microphone and resolve the recognised transcript.
 *
 * @return {Promise<{ transcript: string, supported: boolean }>}
 */
export function listenOnce({ lang = 'en-US', timeout = 8000 } = {}) {
    return new Promise((resolve, reject) => {
        if (!recognitionSupported()) {
            resolve({ transcript: '', supported: false });
            return;
        }

        const Recognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new Recognition();

        recognition.lang = lang;
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;
        recognition.continuous = false;

        let settled = false;

        const timer = setTimeout(() => {
            if (settled) {
                return;
            }
            settled = true;
            try {
                recognition.stop();
            } catch (error) {
                // recognition already stopped
            }
            resolve({ transcript: '', supported: true, timedOut: true });
        }, timeout);

        recognition.onresult = (event) => {
            if (settled) {
                return;
            }
            settled = true;
            clearTimeout(timer);
            resolve({
                transcript: event.results[0][0].transcript,
                supported: true,
                confidence: event.results[0][0].confidence ?? 0,
            });
        };

        recognition.onerror = (event) => {
            if (settled) {
                return;
            }
            settled = true;
            clearTimeout(timer);

            if (event.error === 'no-speech' || event.error === 'aborted') {
                resolve({ transcript: '', supported: true, timedOut: true });
                return;
            }

            reject(new Error(event.error));
        };

        recognition.onend = () => {
            if (settled) {
                return;
            }
            settled = true;
            clearTimeout(timer);
            resolve({ transcript: '', supported: true, timedOut: true });
        };

        try {
            recognition.start();
        } catch (error) {
            clearTimeout(timer);
            reject(error);
        }
    });
}
