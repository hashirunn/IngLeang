<?php

namespace App\Support;

class LevelTheme
{
    /**
     * Gradient background for level headers and cards.
     */
    public static function gradient(?string $theme): string
    {
        return match ($theme) {
            'intermediate' => 'from-sky-500 via-indigo-500 to-indigo-700',
            'advanced' => 'from-amber-500 via-orange-500 to-rose-600',
            default => 'from-emerald-500 via-teal-500 to-cyan-700',
        };
    }

    /**
     * Solid accent color used for progress bars and badges.
     */
    public static function solid(?string $theme): string
    {
        return match ($theme) {
            'intermediate' => 'bg-indigo-500',
            'advanced' => 'bg-rose-500',
            default => 'bg-emerald-500',
        };
    }

    /**
     * Soft tint for level chips.
     */
    public static function soft(?string $theme): string
    {
        return match ($theme) {
            'intermediate' => 'bg-indigo-50 text-indigo-700 border-indigo-100',
            'advanced' => 'bg-rose-50 text-rose-700 border-rose-100',
            default => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        };
    }

    /**
     * Text color matching the level accent.
     */
    public static function text(?string $theme): string
    {
        return match ($theme) {
            'intermediate' => 'text-indigo-600',
            'advanced' => 'text-rose-600',
            default => 'text-emerald-600',
        };
    }
}
