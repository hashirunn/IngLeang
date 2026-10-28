<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The timezone that defines a streak day. The day rolls over at 00:00 WIB,
     * so every learner is measured against the same clock regardless of the server timezone.
     */
    public const string STREAK_TIMEZONE = 'Asia/Jakarta';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'streak_count',
        'last_active_date',
        'recommended_level_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'streak_count' => 'integer',
            'last_active_date' => 'date',
        ];
    }

    /**
     * The streak shown to the learner, based on the streak day boundary.
     *
     * A streak stays alive one full day after the last activity, so it only
     * reads zero once a whole streak day has been missed.
     */
    public function getCurrentStreakCountAttribute(): int
    {
        if ($this->last_active_date === null) {
            return 0;
        }

        $today = Carbon::now(self::STREAK_TIMEZONE)->startOfDay();
        $lastActive = Carbon::parse($this->last_active_date->toDateString(), self::STREAK_TIMEZONE);

        $isAlive = $lastActive->isSameDay($today) || $lastActive->copy()->addDay()->isSameDay($today);

        return $isAlive ? $this->streak_count : 0;
    }

    /** @return HasMany<Attempt> */
    public function attempts(): HasMany
    {
        return $this->hasMany(Attempt::class);
    }

    /** @return HasMany<Progress> */
    public function progress(): HasMany
    {
        return $this->hasMany(Progress::class);
    }

    /** @return BelongsTo<Level, User> */
    public function recommendedLevel(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'recommended_level_id');
    }
}
