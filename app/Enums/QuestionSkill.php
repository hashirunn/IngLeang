<?php

namespace App\Enums;

use App\Support\Icons;

enum QuestionSkill: string
{
    case Vocabulary = 'vocabulary';
    case Grammar = 'grammar';
    case Reading = 'reading';
    case Listening = 'listening';
    case Speaking = 'speaking';
    case Writing = 'writing';

    /**
     * Human readable label for the skill.
     */
    public function label(): string
    {
        return match ($this) {
            self::Vocabulary => 'Kosakata',
            self::Grammar => 'Tata Bahasa',
            self::Reading => 'Membaca',
            self::Listening => 'Menyimak',
            self::Speaking => 'Berbicara',
            self::Writing => 'Menulis',
        };
    }

    /**
     * Icon used across the learning interface.
     */
    public function icon(): string
    {
        return match ($this) {
            self::Vocabulary => '📚',
            self::Grammar => '🧩',
            self::Reading => '📖',
            self::Listening => '🎧',
            self::Speaking => '🗣️',
            self::Writing => '✍️',
        };
    }

    /**
     * Line-icon name (see \App\Support\Icons) for the modern, stroke-based UI.
     */
    public function lineIcon(): string
    {
        return Icons::forSkill($this->value);
    }
}
