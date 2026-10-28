<?php

namespace App\Enums;

enum QuestionType: string
{
    case MultipleChoice = 'mcq';
    case FillBlank = 'fill_blank';
    case TrueFalse = 'true_false';
    case Matching = 'matching';
    case Speaking = 'speaking';

    /**
     * Human readable label for the question type.
     */
    public function label(): string
    {
        return match ($this) {
            self::MultipleChoice => 'Pilihan Ganda',
            self::FillBlank => 'Isi Bagian Kosong',
            self::TrueFalse => 'Benar / Salah',
            self::Matching => 'Mencocokkan',
            self::Speaking => 'Berbicara',
        };
    }
}
