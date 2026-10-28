<?php

namespace App\Models;

use App\Enums\ProgressStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Progress extends Model
{
    /** @use HasFactory<Progress> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'module_id',
        'attempts_count',
        'best_percentage',
        'status',
        'completed_at',
        'last_attempted_at',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'attempts_count' => 'integer',
            'best_percentage' => 'float',
            'status' => ProgressStatus::class,
            'completed_at' => 'datetime',
            'last_attempted_at' => 'datetime',
        ];
    }

    /** @return BelongsTo<User, Progress> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return BelongsTo<Module, Progress> */
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function isCompleted(): bool
    {
        return $this->status === ProgressStatus::Completed;
    }
}
