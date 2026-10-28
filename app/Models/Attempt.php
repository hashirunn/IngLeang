<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attempt extends Model
{
    /** @use HasFactory<Attempt> */
    use HasFactory;

    public const string TYPE_MODULE = 'module';

    public const string TYPE_PLACEMENT = 'placement';

    protected $fillable = [
        'user_id',
        'module_id',
        'type',
        'earned',
        'max_points',
        'percentage',
        'breakdown',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'earned' => 'float',
            'max_points' => 'float',
            'percentage' => 'float',
            'breakdown' => 'array',
        ];
    }

    /** @return BelongsTo<User, Attempt> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return BelongsTo<Module, Attempt> */
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    /** @return Builder<Attempt> */
    public function scopeForModule(Builder $query, int $moduleId): Builder
    {
        return $query->where('module_id', $moduleId)->where('type', self::TYPE_MODULE);
    }

    /**
     * Status label following the scoring table from the curriculum.
     */
    public function statusLabel(): string
    {
        return match (true) {
            $this->percentage >= 90 => 'Sangat baik',
            $this->percentage >= 80 => 'Siap lanjut',
            $this->percentage >= 60 => 'Perlu penguatan',
            default => 'Perlu belajar ulang',
        };
    }
}
