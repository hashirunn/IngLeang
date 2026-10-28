@props(['name', 'label' => null])

@php
    $paths = \App\Support\Icons::PATHS[$name] ?? '';
@endphp

<svg {{ $attributes->merge(['class' => 'h-5 w-5']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor"
    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" @if ($label) role="img" @else aria-hidden="true" @endif>
    @if ($label)
        <title>{{ $label }}</title>
    @endif
    {!! $paths !!}
</svg>
