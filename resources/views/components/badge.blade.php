{{--
| Prop      | Type   | Default   | Values                                         |
|-----------|--------|-----------|------------------------------------------------|
| variant   | string | 'primary' | primary, primary-light, dark, outline, semantic, none |
| size      | string | 'sm'      | sm, md, lg                                     |
| color     | ?string| null      | Tailwind color name for semantic (amber, green) |
| uppercase | bool   | true      | Whether to apply uppercase + tracking           |
--}}
@props([
    'variant' => 'primary',
    'size' => 'sm',
    'color' => null,
    'uppercase' => true,
])

@php
    $variants = [
        'primary' => 'bg-primary-50 text-primary-800',
        'primary-light' => 'bg-primary-100 text-primary-800',
        'dark' => 'bg-white/20 text-white backdrop-blur-sm',
        'outline' => 'bg-white border border-base-200 text-base-700',
        'semantic' => match($color) {
            'amber' => 'bg-amber-200 text-amber-900',
            'green' => 'bg-green-100 text-green-900',
            default => 'bg-primary-50 text-primary-800',
        },
        'none' => '',
    ];
    $sizes = [
        'sm' => 'px-2.5 py-0.5 text-xs',
        'md' => 'px-3 py-1 text-xs',
        'lg' => 'px-4 py-2 text-sm',
    ];
    $classes = 'inline-block rounded-full font-semibold'
        . ' ' . ($variants[$variant] ?? $variants['primary'])
        . ' ' . ($sizes[$size] ?? $sizes['sm'])
        . ($uppercase ? ' uppercase tracking-wider' : '');
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
