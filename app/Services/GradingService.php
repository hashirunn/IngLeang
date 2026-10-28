<?php

namespace App\Services;

use App\Enums\QuestionType;
use App\Models\Module;
use App\Models\Question;

class GradingService
{
    /**
     * Points awarded when a question is fully correct.
     */
    public const float MAX_POINTS = 1.0;

    /**
     * Minimum similarity (0-1) for a spoken answer to count as correct.
     */
    public const float SPEAKING_THRESHOLD = 0.7;

    /**
     * Grade a full set of answers for one module.
     *
     * @param  array<string, mixed>  $answers  keyed by question id
     * @return array{earned: float, max: float, percentage: float, results: list<array<string, mixed>>}
     */
    public function gradeModule(Module $module, array $answers): array
    {
        $questions = $module->questions()->get();

        return $this->gradeQuestions($questions, $answers);
    }

    /**
     * Grade a list of questions, used by both module practice and the
     * placement test.
     *
     * @param  iterable<Question>  $questions
     * @param  array<string, mixed>  $answers  keyed by question id
     * @return array{earned: float, max: float, percentage: float, results: list<array<string, mixed>>}
     */
    public function gradeQuestions(iterable $questions, array $answers): array
    {
        $earned = 0.0;
        $max = 0.0;
        $results = [];

        foreach ($questions as $question) {
            $rawAnswer = $answers[$question->id] ?? null;
            $grade = $this->gradeQuestion($question, $rawAnswer);

            $earned += $grade['earned'];
            $max += self::MAX_POINTS;

            $results[] = [
                'question_id' => $question->id,
                'type' => $question->type,
                'skill' => $question->skill,
                'prompt' => $question->prompt,
                'audio_text' => $question->audio_text,
                'options' => $question->options,
                'pairs' => $question->pairs,
                'target' => $question->target,
                'user_answer' => $this->normalizePayload($rawAnswer),
                'correct_answer' => $this->correctAnswerPayload($question),
                'earned' => round($grade['earned'], 2),
                'max' => self::MAX_POINTS,
                'is_correct' => $grade['earned'] >= self::MAX_POINTS,
                'explanation' => $question->explanation,
            ];
        }

        $percentage = $max > 0 ? round(($earned / $max) * 100, 2) : 0.0;

        return [
            'earned' => round($earned, 2),
            'max' => round($max, 2),
            'percentage' => $percentage,
            'results' => $results,
        ];
    }

    /**
     * Grade a single question and return the earned points.
     *
     * @return array{earned: float, is_correct: bool}
     */
    public function gradeQuestion(Question $question, mixed $userAnswer): array
    {
        $earned = match (QuestionType::from($question->type)) {
            QuestionType::MultipleChoice => $this->gradeMultipleChoice($question, $userAnswer),
            QuestionType::FillBlank => $this->gradeFillBlank($question, $userAnswer),
            QuestionType::TrueFalse => $this->gradeTrueFalse($question, $userAnswer),
            QuestionType::Matching => $this->gradeMatching($question, $userAnswer),
            QuestionType::Speaking => $this->gradeSpeaking($question, $userAnswer),
        };

        $earned = min(self::MAX_POINTS, max(0.0, (float) $earned));

        return [
            'earned' => round($earned, 2),
            'is_correct' => $earned >= self::MAX_POINTS,
        ];
    }

    private function gradeMultipleChoice(Question $question, mixed $userAnswer): float
    {
        if ($userAnswer === null || $userAnswer === '') {
            return 0.0;
        }

        return (int) $userAnswer === (int) $question->nativeAnswer() ? self::MAX_POINTS : 0.0;
    }

    private function gradeFillBlank(Question $question, mixed $userAnswer): float
    {
        if (! is_string($userAnswer) || trim($userAnswer) === '') {
            return 0.0;
        }

        $given = $this->normalizeText($userAnswer);
        $accepted = array_map(
            fn ($value) => $this->normalizeText((string) $value),
            array_merge([$question->nativeAnswer() ?? ''], $question->accepted ?? []),
        );

        return in_array($given, $accepted, true) ? self::MAX_POINTS : 0.0;
    }

    private function gradeTrueFalse(Question $question, mixed $userAnswer): float
    {
        if ($userAnswer === null || $userAnswer === '') {
            return 0.0;
        }

        $given = filter_var($userAnswer, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        $expected = filter_var($question->nativeAnswer(), FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        if ($given === null || $expected === null) {
            return 0.0;
        }

        return $given === $expected ? self::MAX_POINTS : 0.0;
    }

    private function gradeMatching(Question $question, mixed $userAnswer): float
    {
        $pairs = $question->pairs ?? [];

        if ($pairs === [] || ! is_array($userAnswer)) {
            return 0.0;
        }

        $correct = 0;

        foreach ($pairs as $pair) {
            $left = $this->normalizeText((string) $pair['left']);
            $chosen = $userAnswer[$pair['left']] ?? $userAnswer[$left] ?? null;

            if ($chosen !== null && $this->normalizeText((string) $chosen) === $this->normalizeText((string) $pair['right'])) {
                $correct++;
            }
        }

        return $correct / count($pairs) * self::MAX_POINTS;
    }

    private function gradeSpeaking(Question $question, mixed $userAnswer): float
    {
        if (! is_string($userAnswer) || trim($userAnswer) === '') {
            return 0.0;
        }

        return $this->similarity($question->target ?? '', $userAnswer) * self::MAX_POINTS;
    }

    /**
     * Similarity between a target sentence and what the learner said.
     * Combines word overlap (Dice coefficient) with character similarity
     * (Levenshtein ratio) so small misrecognitions stay forgiving.
     */
    public function similarity(string $expected, string $given): float
    {
        $expected = $this->normalizeText($expected);
        $given = $this->normalizeText($given);

        if ($expected === '' || $given === '') {
            return 0.0;
        }

        if ($expected === $given) {
            return 1.0;
        }

        $expectedWords = explode(' ', $expected);
        $givenWords = explode(' ', $given);

        $expectedCounts = array_count_values($expectedWords);
        $givenCounts = array_count_values($givenWords);

        $overlap = 0;

        foreach ($expectedCounts as $word => $count) {
            $overlap += min($count, $givenCounts[$word] ?? 0);
        }

        $dice = (2 * $overlap) / (count($expectedWords) + count($givenWords));
        $characterRatio = 1 - (levenshtein($expected, $given) / max(strlen($expected), strlen($given)));

        return round(max(0.0, min(1.0, ($dice + $characterRatio) / 2)), 4);
    }

    /**
     * Human friendly representation of the correct answer.
     *
     * @return array<string, mixed>|string|bool|null
     */
    public function correctAnswerPayload(Question $question): array|string|bool|null
    {
        return match (QuestionType::from($question->type)) {
            QuestionType::MultipleChoice => (string) ($question->options[(int) $question->nativeAnswer()] ?? ''),
            QuestionType::FillBlank => (string) $question->nativeAnswer(),
            QuestionType::TrueFalse => (bool) $question->nativeAnswer(),
            QuestionType::Matching => array_map(
                fn ($pair) => ['left' => $pair['left'], 'right' => $pair['right']],
                $question->pairs ?? [],
            ),
            QuestionType::Speaking => (string) $question->target,
        };
    }

    /**
     * Lowercase, trim, strip punctuation and collapse whitespace.
     */
    public function normalizeText(string $text): string
    {
        $text = mb_strtolower(trim($text), 'UTF-8');
        $text = preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $text) ?? $text;
        $text = preg_replace('/\s+/u', ' ', $text) ?? $text;

        return trim($text);
    }

    /**
     * Keep only the answers that belong to known questions before storing.
     *
     * @param  array<string, mixed>  $answers
     * @param  iterable<Question>  $questions
     * @return array<string, mixed>
     */
    public function filterAnswers(array $answers, iterable $questions): array
    {
        $allowed = [];

        foreach ($questions as $question) {
            $allowed[(string) $question->id] = true;
        }

        return array_filter(
            $answers,
            fn ($key) => isset($allowed[(string) $key]),
            ARRAY_FILTER_USE_KEY,
        );
    }

    /**
     * @return array<string, mixed>|bool|string|null
     */
    private function normalizePayload(mixed $value): array|string|bool|null
    {
        if (is_array($value)) {
            return $value;
        }

        if (is_bool($value)) {
            return $value;
        }

        if ($value === null) {
            return null;
        }

        $asBool = filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        if ($asBool !== null && ! is_numeric($value)) {
            return $asBool;
        }

        if (is_numeric($value)) {
            return (int) $value === (float) $value ? (int) $value : (float) $value;
        }

        return (string) $value;
    }
}
