<?php

/**
 * Definisi tiga level pembelajaran IngLearn (mengacu pada task.md).
 *
 * 'theme' dipetakan ke kelas Tailwind di dalam view (string literal supaya
 * selalu ter-generate oleh Tailwind).
 */
return [
    [
        'slug' => 'beginner',
        'name' => 'Beginner',
        'level_order' => 1,
        'cefr' => 'A1 - A2',
        'tagline' => 'Fondasi bahasa Inggris sehari-hari',
        'description' => 'Kosakata dasar, grammar dasar, kalimat sederhana, dan percakapan sehari-hari.',
        'theme' => 'beginner',
        'unlock_threshold' => 60,
    ],
    [
        'slug' => 'intermediate',
        'name' => 'Intermediate',
        'level_order' => 2,
        'cefr' => 'B1 - B2',
        'tagline' => 'Bercerita, memahami teks, dan menyampaikan pendapat',
        'description' => 'Grammar lanjutan, percakapan lebih panjang, pemahaman teks, dan menyampaikan pendapat dengan alasan.',
        'theme' => 'intermediate',
        'unlock_threshold' => 60,
    ],
    [
        'slug' => 'advanced',
        'name' => 'Advanced',
        'level_order' => 3,
        'cefr' => 'C1 - C2',
        'tagline' => 'Nuansa, argumen kompleks, dan komunikasi profesional',
        'description' => 'Nuansa makna, argumen kompleks, idiom dan kolokasi, komunikasi profesional, serta penulisan akademik.',
        'theme' => 'advanced',
        'unlock_threshold' => 60,
    ],
];
