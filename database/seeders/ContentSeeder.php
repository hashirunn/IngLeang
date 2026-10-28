<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Module;
use Illuminate\Database\Seeder;
use RuntimeException;

class ContentSeeder extends Seeder
{
    /**
     * Columns accepted on a question payload.
     *
     * @var list<string>
     */
    private const array QUESTION_COLUMNS = [
        'type',
        'skill',
        'prompt',
        'audio_text',
        'options',
        'answer',
        'accepted',
        'pairs',
        'target',
        'hint',
        'explanation',
        'is_placement',
    ];

    /**
     * Seed levels, modules and questions from database/content.
     */
    public function run(): void
    {
        $levelsFile = database_path('content/levels.php');

        if (! file_exists($levelsFile)) {
            throw new RuntimeException('Missing content definition: '.$levelsFile);
        }

        foreach (require $levelsFile as $definition) {
            $level = Level::updateOrCreate(
                ['slug' => $definition['slug']],
                $definition,
            );

            $this->seedModules($level);
        }
    }

    private function seedModules(Level $level): void
    {
        $pattern = database_path('content/level-'.$level->level_order.'/module-*.php');
        $files = glob($pattern) ?: [];

        sort($files);

        if ($files === []) {
            throw new RuntimeException('No content files found for pattern: '.$pattern);
        }

        foreach ($files as $index => $file) {
            $content = require $file;

            $this->validateContent($file, $content);

            $module = Module::updateOrCreate(
                [
                    'level_id' => $level->id,
                    'module_order' => $index + 1,
                ],
                [
                    'slug' => $content['slug'],
                    'title' => $content['title'],
                    'subtitle' => $content['subtitle'] ?? null,
                    'summary' => $content['summary'],
                    'icon' => $content['icon'] ?? null,
                    'objectives' => $content['objectives'],
                    'sections' => $content['sections'],
                    'vocabulary' => $content['vocabulary'],
                ],
            );

            $this->seedQuestions($module, $content['questions'], $file);
        }
    }

    private function seedQuestions(Module $module, array $questions, string $file): void
    {
        $module->questions()->delete();

        foreach ($questions as $position => $question) {
            $payload = array_intersect_key($question, array_flip(self::QUESTION_COLUMNS));

            $payload += [
                'module_id' => $module->id,
                'question_order' => $position + 1,
                'prompt' => null,
                'audio_text' => null,
                'options' => null,
                'answer' => null,
                'accepted' => null,
                'pairs' => null,
                'target' => null,
                'hint' => null,
                'explanation' => null,
                'is_placement' => false,
            ];

            $module->questions()->create($payload);
        }
    }

    /**
     * Fail fast when a content file does not follow the expected shape.
     *
     * @param  array<string, mixed>  $content
     */
    private function validateContent(string $file, array $content): void
    {
        $required = ['title', 'slug', 'summary', 'objectives', 'sections', 'vocabulary', 'questions'];

        foreach ($required as $key) {
            if (! array_key_exists($key, $content)) {
                throw new RuntimeException(sprintf('Content file %s is missing key "%s".', $file, $key));
            }
        }

        if ($content['questions'] === []) {
            throw new RuntimeException(sprintf('Content file %s has no questions.', $file));
        }
    }
}
