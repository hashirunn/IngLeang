<?php

namespace App\Models;

use App\Enums\QuestionSkill;
use App\Enums\QuestionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    /** @use HasFactory<Question> */
    use HasFactory;

    protected $fillable = [
        'module_id',
        'question_order',
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
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'question_order' => 'integer',
            'options' => 'array',
            'answer' => 'array',
            'accepted' => 'array',
            'pairs' => 'array',
            'is_placement' => 'boolean',
        ];
    }

    /** @return BelongsTo<Module, Question> */
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function typeEnum(): QuestionType
    {
        return QuestionType::from($this->type);
    }

    public function skillEnum(): QuestionSkill
    {
        return QuestionSkill::from($this->skill);
    }

    public function hasAudio(): bool
    {
        return $this->audio_text !== null && $this->audio_text !== '';
    }

    /**
     * Normalize stored answer payloads into their native PHP type.
     */
    public function nativeAnswer(): mixed
    {
        if ($this->answer === null) {
            return null;
        }

        return is_array($this->answer) && array_is_list($this->answer)
            ? $this->answer[0]
            : ($this->answer['value'] ?? $this->answer);
    }
}
