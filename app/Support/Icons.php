<?php

namespace App\Support;

/**
 * Stroke (line) icon paths used across the interface.
 *
 * Each entry is the inner markup of a 24x24 SVG drawn with `fill="none"`
 * and `stroke="currentColor"`, so an icon always inherits its text colour.
 * Icons are rendered through the <x-icon> component.
 */
class Icons
{
    /**
     * Map of icon name to inner SVG markup.
     *
     * @var array<string, string>
     */
    public const PATHS = [
        'home' => '<path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/>',
        'layers' => '<path d="m12 3 9 4.5-9 4.5-9-4.5z"/><path d="m3 12.5 9 4.5 9-4.5"/><path d="m3 17 9 4.5 9-4.5"/>',
        'compass' => '<circle cx="12" cy="12" r="9"/><path d="m15.5 8.5-2.1 5-5 2.1 2.1-5z"/>',
        'flame' => '<path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.4-.5-2-1-3-1.1-2.1-.2-4 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.2.4-2.3 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>',
        'check-badge' => '<circle cx="12" cy="12" r="9"/><path d="m8.3 12.4 2.6 2.6 4.8-5.4"/>',
        'check' => '<path d="m5 12.5 4.5 4.5L19 7"/>',
        'x' => '<path d="m6 6 12 12"/><path d="M18 6 6 18"/>',
        'target' => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.4" fill="currentColor" stroke="none"/>',
        'star' => '<path d="m12 3.5 2.6 5.5 6 .8-4.4 4.1 1.1 6-5.3-2.9-5.3 2.9 1.1-6L3.4 9.8l6-.8z"/>',
        'book' => '<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>',
        'lock' => '<rect x="5" y="10.5" width="14" height="9.5" rx="2"/><path d="M8 10.5V7.5a4 4 0 0 1 8 0v3"/>',
        'book-open' => '<path d="M12 7.5v13"/><path d="M12 7.5C10.5 6 8 5.2 4 5.2v13c4 0 6.5.8 8 2.3 1.5-1.5 4-2.3 8-2.3v-13c-4 0-6.5.8-8 2.3Z"/>',
        'puzzle' => '<path d="M10 3.5a2 2 0 1 1 4 0V5h3.5a1 1 0 0 1 1 1V9.5H16.5a2 2 0 1 0 0 4H18.5V17a1 1 0 0 1-1 1H14v-1.5a2 2 0 1 0-4 0V18H6a1 1 0 0 1-1-1v-3.5h1.5a2 2 0 1 0 0-4H5V6a1 1 0 0 1 1-1h4z"/>',
        'scale' => '<path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/>',
        'headphones' => '<path d="M4 14v-2a8 8 0 0 1 16 0v2"/><path d="M4 14h2.5a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1z"/><path d="M20 14h-2.5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1H19a1 1 0 0 0 1-1z"/>',
        'mic' => '<rect x="9" y="3" width="6" height="11" rx="3"/><path d="M6 11.5a6 6 0 0 0 12 0"/><path d="M12 17.5V21"/><path d="M9 21h6"/>',
        'pencil' => '<path d="M4 20.5h4L18.5 10a2.65 2.65 0 0 0-4-4L4 16.5z"/><path d="m13.5 7.5 3 3"/>',
        'volume' => '<path d="M11 5 6.5 9H3v6h3.5L11 19z"/><path d="M15.5 9.2a4 4 0 0 1 0 5.6"/><path d="M18 6.5a8 8 0 0 1 0 11"/>',
        'play' => '<path d="M7 4.8v14.4L19 12z"/>',
        'trophy' => '<path d="M7 4h10v4.5a5 5 0 0 1-10 0z"/><path d="M17 5.2h2.4a2.4 2.4 0 0 1-2.4 4.3"/><path d="M7 5.2H4.6A2.4 2.4 0 0 0 7 9.5"/><path d="M12 13.5V17"/><path d="M9 20.5h6"/><path d="M12 17c-1.6 0-3 .6-3 2h6c0-1.4-1.4-2-3-2Z"/>',
        'sprout' => '<path d="M12 21v-7"/><path d="M12 14a4 4 0 0 0-4-4H4.5c0 3.3 2.4 6 5.5 6z"/><path d="M12 12.5a4 4 0 0 1 4-4h3.5c0 3.3-2.4 6-5.5 6z"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7.5V12l3 1.8"/>',
        'user' => '<circle cx="12" cy="8" r="4"/><path d="M5.5 21a6.5 6.5 0 0 1 13 0"/>',
        'logout' => '<path d="M15 4h3a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-3"/><path d="m9.5 8-4 4 4 4"/><path d="M5.5 12H15"/>',
        'clipboard-check' => '<rect x="5" y="4.5" width="14" height="16.5" rx="2"/><path d="M9 4.5a2 2 0 0 1 6 0"/><path d="m9.2 13.5 2 2 3.6-4"/>',
        'trending' => '<path d="m3.5 17 5.5-5.5 3.5 3.5L20.5 8"/><path d="M15.5 8h5v5"/>',
        'gauge' => '<path d="M4.5 17a8 8 0 1 1 15 0"/><path d="m12 13 3.5-3.5"/><circle cx="12" cy="13.5" r="1.3" fill="currentColor" stroke="none"/>',
        'calendar' => '<rect x="4" y="5" width="16" height="16.5" rx="2"/><path d="M8 3v4"/><path d="M16 3v4"/><path d="M4 10h16"/>',
        'arrow-right' => '<path d="M4.5 12h15"/><path d="m13.5 6 6 6-6 6"/>',
        'arrow-left' => '<path d="M19.5 12h-15"/><path d="m10.5 6-6 6 6 6"/>',
        'chevron-right' => '<path d="m9.5 6 6 6-6 6"/>',
        'chevron-left' => '<path d="m14.5 6-6 6 6 6"/>',
        'refresh' => '<path d="M20 12a8 8 0 1 1-2.6-5.9"/><path d="M20 4v4.5h-4.5"/>',
        'alert' => '<circle cx="12" cy="12" r="9"/><path d="M12 7.5V13"/><path d="M12 16.2h.01"/>',
        'info' => '<circle cx="12" cy="12" r="9"/><path d="M12 11v5"/><path d="M12 8h.01"/>',
        'sparkle' => '<path d="M12 3.5 13.6 9l5.4 1.6-5.4 1.6L12 17.6 10.4 12.2 5 10.6 10.4 9z"/><path d="M18.5 4v3"/><path d="M17 5.5h3"/>',
    ];

    /**
     * Line-icon name for a question skill (used by <x-icon>).
     */
    public static function forSkill(string $skill): string
    {
        return match ($skill) {
            'vocabulary' => 'book',
            'grammar' => 'puzzle',
            'reading' => 'book-open',
            'listening' => 'headphones',
            'speaking' => 'mic',
            'writing' => 'pencil',
            default => 'sparkle',
        };
    }
}
