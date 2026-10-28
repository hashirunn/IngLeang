<?php

namespace Tests\Feature;

use App\Models\Level;
use App\Models\Module;
use App\Models\Question;
use App\Services\GradingService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GradingServiceTest extends TestCase
{
    use RefreshDatabase;

    private GradingService $grading;

    protected function setUp(): void
    {
        parent::setUp();

        $this->grading = app(GradingService::class);
    }

    public function test_multiple_choice_is_graded_by_option_index(): void
    {
        $question = $this->makeQuestion([
            'type' => 'mcq',
            'options' => ['am', 'is', 'are', 'be'],
            'answer' => 1,
        ]);

        $this->assertSame(1.0, $this->grading->gradeQuestion($question, 1)['earned']);
        $this->assertSame(0.0, $this->grading->gradeQuestion($question, 2)['earned']);
        $this->assertSame(0.0, $this->grading->gradeQuestion($question, null)['earned']);
    }

    public function test_fill_blank_ignores_case_spacing_and_punctuation(): void
    {
        $question = $this->makeQuestion([
            'type' => 'fill_blank',
            'answer' => 'in',
            'accepted' => ['in'],
        ]);

        $this->assertSame(1.0, $this->grading->gradeQuestion($question, '  IN! ')['earned']);
        $this->assertSame(0.0, $this->grading->gradeQuestion($question, 'on')['earned']);
    }

    public function test_fill_blank_accepts_alternatives(): void
    {
        $question = $this->makeQuestion([
            'type' => 'fill_blank',
            'answer' => 'nurse',
            'accepted' => ['a nurse', 'the nurse'],
        ]);

        $this->assertSame(1.0, $this->grading->gradeQuestion($question, 'A Nurse')['earned']);
        $this->assertSame(1.0, $this->grading->gradeQuestion($question, 'nurse')['earned']);
    }

    public function test_true_false_is_graded_as_boolean(): void
    {
        $question = $this->makeQuestion([
            'type' => 'true_false',
            'answer' => false,
        ]);

        $this->assertSame(1.0, $this->grading->gradeQuestion($question, false)['earned']);
        $this->assertSame(1.0, $this->grading->gradeQuestion($question, 'false')['earned']);
        $this->assertSame(0.0, $this->grading->gradeQuestion($question, true)['earned']);
    }

    public function test_matching_awards_partial_credit_per_pair(): void
    {
        $question = $this->makeQuestion([
            'type' => 'matching',
            'pairs' => [
                ['left' => 'Monday', 'right' => 'Senin'],
                ['left' => 'Friday', 'right' => 'Jumat'],
                ['left' => 'Sunday', 'right' => 'Minggu'],
                ['left' => 'Saturday', 'right' => 'Sabtu'],
            ],
        ]);

        $perfect = $this->grading->gradeQuestion($question, [
            'Monday' => 'Senin',
            'Friday' => 'Jumat',
            'Sunday' => 'Minggu',
            'Saturday' => 'Sabtu',
        ]);

        $half = $this->grading->gradeQuestion($question, [
            'Monday' => 'Senin',
            'Friday' => 'Sabtu',
            'Sunday' => 'Minggu',
            'Saturday' => 'Jumat',
        ]);

        $this->assertSame(1.0, $perfect['earned']);
        $this->assertEqualsWithDelta(0.5, $half['earned'], 0.01);
    }

    public function test_speaking_is_graded_with_sentence_similarity(): void
    {
        $question = $this->makeQuestion([
            'type' => 'speaking',
            'target' => 'Good morning, how are you today?',
        ]);

        $identical = $this->grading->gradeQuestion($question, 'Good morning, how are you today?');
        $close = $this->grading->gradeQuestion($question, 'Good morning how are you today');
        $unrelated = $this->grading->gradeQuestion($question, 'My name is Budi and I live in Jakarta');

        $this->assertSame(1.0, $identical['earned']);
        $this->assertGreaterThanOrEqual(GradingService::SPEAKING_THRESHOLD, $close['earned']);
        // Unrelated answers still get a small proportional score, but stay well below the pass threshold.
        $this->assertLessThan(GradingService::SPEAKING_THRESHOLD, $unrelated['earned']);
        $this->assertSame(0.0, $this->grading->gradeQuestion($question, '')['earned']);
    }

    public function test_full_module_grading_returns_percentage_and_results(): void
    {
        $module = $this->makeModule();

        $module->questions()->createMany([
            [
                'question_order' => 1,
                'type' => 'mcq',
                'skill' => 'grammar',
                'prompt' => 'She ___ a student.',
                'options' => ['am', 'is', 'are', 'be'],
                'answer' => 1,
                'explanation' => 'She menggunakan is.',
            ],
            [
                'question_order' => 2,
                'type' => 'fill_blank',
                'skill' => 'grammar',
                'prompt' => 'My birthday is ___ July.',
                'answer' => 'in',
                'explanation' => 'Gunakan in untuk bulan.',
            ],
            [
                'question_order' => 3,
                'type' => 'true_false',
                'skill' => 'vocabulary',
                'prompt' => 'Sunday adalah hari pertama.',
                'answer' => true,
                'explanation' => 'Benar.',
            ],
        ]);

        $questions = $module->questions()->get();

        $result = $this->grading->gradeQuestions($questions, [
            $questions[0]->id => 1,
            $questions[1]->id => 'on',
            $questions[2]->id => true,
        ]);

        $this->assertSame(2.0, $result['earned']);
        $this->assertSame(3.0, $result['max']);
        $this->assertEqualsWithDelta(66.67, $result['percentage'], 0.01);
        $this->assertCount(3, $result['results']);
        $this->assertFalse($result['results'][1]['is_correct']);
        $this->assertNotEmpty($result['results'][1]['explanation']);
    }

    public function test_answers_for_unknown_questions_are_filtered_out(): void
    {
        $module = $this->makeModule();

        $question = $module->questions()->create([
            'question_order' => 1,
            'type' => 'mcq',
            'skill' => 'grammar',
            'prompt' => 'Prompt',
            'options' => ['a', 'b', 'c', 'd'],
            'answer' => 0,
        ]);

        $filtered = $this->grading->filterAnswers([
            $question->id => 0,
            '999999' => 1,
        ], $module->questions()->get());

        $this->assertSame([$question->id => 0], $filtered);
    }

    /**
     * @param  array<string, mixed>  $attributes
     */
    private function makeQuestion(array $attributes): Question
    {
        $module = $this->makeModule();

        return $module->questions()->create(
            $attributes + [
                'question_order' => 1,
                'skill' => 'grammar',
                'prompt' => 'Prompt',
                'explanation' => 'Karena aturannya begitu.',
            ],
        );
    }

    private function makeModule(): Module
    {
        $level = Level::create([
            'slug' => 'beginner',
            'name' => 'Beginner',
            'level_order' => 1,
            'cefr' => 'A1 - A2',
            'tagline' => 'Dasar',
            'description' => 'Deskripsi',
            'theme' => 'beginner',
            'unlock_threshold' => 60,
        ]);

        return Module::create([
            'level_id' => $level->id,
            'module_order' => 1,
            'slug' => 'basic-vocabulary',
            'title' => 'Basic Vocabulary',
            'summary' => 'Ringkasan',
            'objectives' => ['Tujuan satu'],
            'sections' => [
                ['heading' => 'Bagian', 'body' => '<p>Isi</p>', 'examples' => [['en' => 'Hi', 'id' => 'Halo']]],
            ],
            'vocabulary' => [
                ['word' => 'hello', 'phonetic' => '/həˈləʊ/', 'meaning' => 'halo', 'example' => 'Hello there.'],
            ],
        ]);
    }
}
