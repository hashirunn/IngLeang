<?php

namespace App\Models;

use App\Enums\ProgressStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    /** @use HasMany<Question> */
    use HasFactory;

    protected $fillable = [
        'level_id',
        'module_order',
        'slug',
        'title',
        'subtitle',
        'summary',
        'objectives',
        'sections',
        'vocabulary',
        'icon',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'module_order' => 'integer',
            'objectives' => 'array',
            'sections' => 'array',
            'vocabulary' => 'array',
        ];
    }

    /** @return BelongsTo<Level, Module> */
    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    /** @return HasMany<Question> */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class)->orderBy('question_order');
    }

    public function progressFor(User $user): ?Progress
    {
        return $this->progress()->where('user_id', $user->id)->first();
    }

    /** @return HasMany<Progress> */
    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class);
    }

    public function isCompletedBy(User $user): bool
    {
        return $this->progress()
            ->where('user_id', $user->id)
            ->where('status', ProgressStatus::Completed->value)
            ->exists();
    }

    /**
     * Exercise count grouped by question skill.
     *
     * @return array<string, int>
     */
    public function skillCounts(): array
    {
        return $this->questions()
            ->selectRaw('skill, COUNT(*) as total')
            ->groupBy('skill')
            ->pluck('total', 'skill')
            ->all();
    }
}
