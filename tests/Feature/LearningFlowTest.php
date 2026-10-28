<?php

namespace Tests\Feature;

use App\Models\Attempt;
use App\Models\Level;
use App\Models\Module;
use App\Models\Progress;
use App\Models\Question;
use App\Models\User;
use App\Services\ProgressService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LearningFlowTest extends TestCase
{
    use RefreshDatabase;

    private Level $beginner;

    private Level $intermediate;

    protected function setUp(): void
    {
        parent::setUp();

        $this->beginner = $this->makeLevel('beginner', 'Beginner', 1);
        $this->intermediate = $this->makeLevel('intermediate', 'Intermediate', 2);
    }

    public function test_module_page_shows_material_and_hides_answers(): void
    {
        $module = $this->makeModule($this->beginner, 1, 'basic-vocabulary');
        $this->addQuestions($module);

        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('modules.show', $module));

        $response->assertOk();
        $response->assertSee('Basic Vocabulary');
        $response->assertSee('exercise-data');
        // Explanations and correct answers must not leak before submission.
        $response->assertDontSee('She menggunakan is.', false);
        $response->assertDontSee('Hari pertama adalah Monday.', false);
        $response->assertDontSee('Urutannya sapaan lalu nama.', false);
        // Listening transcripts are only shipped base64-encoded, not as readable text.
        $response->assertSee(base64_encode('The class starts at eight.'), false);
    }

    public function test_submitting_answers_returns_the_score_immediately(): void
    {
        $module = $this->makeModule($this->beginner, 1, 'basic-vocabulary');
        $questions = $this->addQuestions($module);

        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson(route('attempts.store', $module), [
            'answers' => [
                $questions['mcq']->id => 1,
                $questions['fill']->id => 'in',
                $questions['tf']->id => false,
                $questions['matching']->id => [
                    'Monday' => 'Senin',
                    'Friday' => 'Jumat',
                    'Sunday' => 'Minggu',
                    'Saturday' => 'Sabtu',
                ],
                $questions['listening']->id => 0,
                $questions['speaking']->id => 'Good morning. My name is Rina.',
            ],
        ]);

        $response->assertOk()
            ->assertJsonPath('max', 6)
            ->assertJsonPath('earned', 6)
            ->assertJsonPath('module_completed', true)
            ->assertJsonPath('status_label', 'Sangat baik');

        $this->assertDatabaseHas('attempts', [
            'user_id' => $user->id,
            'module_id' => $module->id,
            'type' => Attempt::TYPE_MODULE,
        ]);

        $progress = Progress::where('user_id', $user->id)->where('module_id', $module->id)->first();

        $this->assertNotNull($progress);
        $this->assertTrue($progress->isCompleted());
        $this->assertSame(1, $progress->attempts_count);
        $this->assertEqualsWithDelta(100.0, $progress->best_percentage, 0.01);
    }

    public function test_first_level_unlocks_second_level_after_completion_threshold(): void
    {
        $user = User::factory()->create();

        $this->assertFalse(
            $this->app->make(ProgressService::class)->isLevelUnlocked($user, $this->intermediate),
        );

        // Two of three beginner modules completed => 66% >= 60% threshold.
        foreach ([1, 2] as $order) {
            $module = $this->makeModule($this->beginner, $order, 'module-'.$order);
            $questions = $this->addQuestions($module);

            $this->actingAs($user)->postJson(route('attempts.store', $module), [
                'answers' => [
                    $questions['mcq']->id => 1,
                    $questions['fill']->id => 'in',
                    $questions['tf']->id => false,
                    $questions['matching']->id => [
                        'Monday' => 'Senin',
                        'Friday' => 'Jumat',
                        'Sunday' => 'Minggu',
                        'Saturday' => 'Sabtu',
                    ],
                ],
            ])->assertOk();
        }

        $this->assertTrue(
            $this->app->make(ProgressService::class)->isLevelUnlocked($user, $this->intermediate),
        );
    }

    public function test_locked_level_module_cannot_be_opened(): void
    {
        $module = $this->makeModule($this->intermediate, 1, 'tense-review');
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('modules.show', $module))
            ->assertRedirect(route('levels.index'));
    }

    public function test_users_cannot_review_other_users_attempts(): void
    {
        $module = $this->makeModule($this->beginner, 1, 'basic-vocabulary');
        $owner = User::factory()->create();
        $stranger = User::factory()->create();

        $attempt = Attempt::create([
            'user_id' => $owner->id,
            'module_id' => $module->id,
            'type' => Attempt::TYPE_MODULE,
            'earned' => 1,
            'max_points' => 1,
            'percentage' => 100,
            'breakdown' => [],
        ]);

        $this->actingAs($stranger)
            ->get(route('attempts.show', $attempt))
            ->assertForbidden();

        $this->actingAs($owner)
            ->get(route('attempts.show', $attempt))
            ->assertOk();
    }

    public function test_placement_test_recommends_a_level_and_unlocks_it(): void
    {
        $intermediateModule = $this->makeModule($this->intermediate, 1, 'tense-review');
        $beginnerModule = $this->makeModule($this->beginner, 1, 'basic-vocabulary');

        $advancedQuestions = [];
        foreach (range(1, 4) as $index) {
            $advancedQuestions[] = $intermediateModule->questions()->create([
                'question_order' => $index,
                'type' => 'mcq',
                'skill' => 'grammar',
                'prompt' => 'Soal menengah '.$index,
                'options' => ['a', 'b', 'c', 'd'],
                'answer' => 0,
                'is_placement' => true,
                'explanation' => 'Karena aturannya begitu.',
            ]);
        }

        $beginnerQuestions = [];
        foreach (range(1, 4) as $index) {
            $beginnerQuestions[] = $beginnerModule->questions()->create([
                'question_order' => $index,
                'type' => 'mcq',
                'skill' => 'vocabulary',
                'prompt' => 'Soal dasar '.$index,
                'options' => ['a', 'b', 'c', 'd'],
                'answer' => 1,
                'is_placement' => true,
                'explanation' => 'Karena aturannya begitu.',
            ]);
        }

        $user = User::factory()->create();

        $showResponse = $this->actingAs($user)->get(route('placement.show'));
        $showResponse->assertOk();

        $ids = array_map(fn (Question $question) => $question->id, $advancedQuestions);

        $response = $this->actingAs($user)->postJson(route('placement.store'), [
            'question_ids' => $ids,
            'answers' => collect($ids)
                ->mapWithKeys(fn ($id) => [$id => 0])
                ->all(),
        ]);

        $response->assertOk()
            ->assertJsonPath('recommended.slug', 'intermediate');

        $this->assertEqualsWithDelta(100.0, (float) $response->json('percentage'), 0.01);
        $this->assertNotEmpty($response->json('levels'));

        $user->refresh();

        $this->assertSame($this->intermediate->id, $user->recommended_level_id);

        $fresh = User::find($user->id);

        $this->assertTrue(
            $this->app->make(ProgressService::class)->isLevelUnlocked($fresh, $this->intermediate),
        );
    }

    public function test_dashboard_and_level_pages_render_for_learners(): void
    {
        $module = $this->makeModule($this->beginner, 1, 'basic-vocabulary');
        $this->addQuestions($module);

        $user = User::factory()->create();

        $this->actingAs($user)->get(route('dashboard'))->assertOk()->assertSee('Dashboard', false);
        $this->actingAs($user)->get(route('levels.index'))->assertOk()->assertSee('Beginner');
        $this->actingAs($user)->get(route('levels.show', $this->beginner))->assertOk()->assertSee('Basic Vocabulary');
        $this->actingAs($user)->get(route('placement.show'))->assertOk();
    }

    private function makeLevel(string $slug, string $name, int $order): Level
    {
        return Level::create([
            'slug' => $slug,
            'name' => $name,
            'level_order' => $order,
            'cefr' => $order === 1 ? 'A1 - A2' : 'B1 - B2',
            'tagline' => 'Tagline',
            'description' => 'Deskripsi level',
            'theme' => $order === 1 ? 'beginner' : 'intermediate',
            'unlock_threshold' => 60,
        ]);
    }

    private function makeModule(Level $level, int $order, string $slug): Module
    {
        return Module::create([
            'level_id' => $level->id,
            'module_order' => $order,
            'slug' => $slug,
            'title' => 'Basic Vocabulary',
            'subtitle' => 'Greetings and more',
            'summary' => 'Ringkasan modul.',
            'objectives' => ['Tujuan satu', 'Tujuan dua'],
            'sections' => [
                [
                    'heading' => 'Bagian Pertama',
                    'body' => '<p>Materi pembelajaran.</p>',
                    'examples' => [['en' => 'Good morning.', 'id' => 'Selamat pagi.']],
                ],
            ],
            'vocabulary' => [
                ['word' => 'hello', 'phonetic' => '/həˈləʊ/', 'meaning' => 'halo', 'example' => 'Hello there.'],
            ],
        ]);
    }

    /**
     * @return array<string, Question>
     */
    private function addQuestions(Module $module): array
    {
        return [
            'mcq' => $module->questions()->create([
                'question_order' => 1,
                'type' => 'mcq',
                'skill' => 'grammar',
                'prompt' => 'She ___ a student.',
                'options' => ['am', 'is', 'are', 'be'],
                'answer' => 1,
                'explanation' => 'She menggunakan is.',
            ]),
            'fill' => $module->questions()->create([
                'question_order' => 2,
                'type' => 'fill_blank',
                'skill' => 'grammar',
                'prompt' => 'My birthday is ___ July.',
                'answer' => 'in',
                'accepted' => ['in'],
                'explanation' => 'Gunakan in untuk bulan.',
            ]),
            'tf' => $module->questions()->create([
                'question_order' => 3,
                'type' => 'true_false',
                'skill' => 'vocabulary',
                'prompt' => 'Sunday adalah hari pertama dalam minggu.',
                'answer' => false,
                'explanation' => 'Hari pertama adalah Monday.',
            ]),
            'matching' => $module->questions()->create([
                'question_order' => 4,
                'type' => 'matching',
                'skill' => 'vocabulary',
                'prompt' => 'Cocokkan hari.',
                'pairs' => [
                    ['left' => 'Monday', 'right' => 'Senin'],
                    ['left' => 'Friday', 'right' => 'Jumat'],
                    ['left' => 'Sunday', 'right' => 'Minggu'],
                    ['left' => 'Saturday', 'right' => 'Sabtu'],
                ],
                'explanation' => 'Hari Senin adalah Monday.',
            ]),
            'listening' => $module->questions()->create([
                'question_order' => 5,
                'type' => 'mcq',
                'skill' => 'listening',
                'prompt' => 'Dengarkan audio.',
                'audio_text' => 'The class starts at eight.',
                'options' => ['The class starts at eight.', 'The class starts at nine.'],
                'answer' => 0,
                'explanation' => 'Yang terdengar adalah eight.',
            ]),
            'speaking' => $module->questions()->create([
                'question_order' => 6,
                'type' => 'speaking',
                'skill' => 'speaking',
                'prompt' => 'Ucapkan kalimat berikut.',
                'target' => 'Good morning. My name is Rina.',
                'hint' => 'Selamat pagi. Nama saya Rina.',
                'explanation' => 'Urutannya sapaan lalu nama.',
            ]),
        ];
    }
}
