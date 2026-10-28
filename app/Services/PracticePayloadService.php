<?php

namespace App\Services;

use App\Models\Question;

class PracticePayloadService
{
    /**
     * Build the exercise payload sent to the browser.
     *
     * Answers, explanations and listening transcripts are stripped so the
     * client cannot peek before submitting. Matching rights are shuffled
     * server side.
     *
     * @param  iterable<Question>  $questions
     * @return list<array<string, mixed>>
     */
    public function forQuestions(iterable $questions): array
    {
        $payload = [];

        foreach ($questions as $question) {
            $pairs = $question->pairs ?? [];
            $rights = array_map(fn ($pair) => (string) $pair['right'], $pairs);
            shuffle($rights);

            $payload[] = [
                'id' => $question->id,
                'order' => $question->question_order,
                'type' => $question->type,
                'type_label' => $question->typeEnum()->label(),
                'skill' => $question->skill,
                'skill_label' => $question->skillEnum()->label(),
                'skill_icon' => $question->skillEnum()->icon(),
                'prompt' => $question->prompt,
                'options' => $question->options,
                'lefts' => array_map(fn ($pair) => (string) $pair['left'], $pairs),
                'rights' => $rights,
                'target' => $question->type === 'speaking' ? $question->target : null,
                'hint' => $question->hint,
                'has_audio' => $question->audio_text !== null && $question->audio_text !== '',
                'audio' => $question->audio_text !== null && $question->audio_text !== ''
                    ? base64_encode($question->audio_text)
                    : null,
                'points' => 1,
            ];
        }

        return $payload;
    }
}
