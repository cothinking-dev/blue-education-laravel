{{--
| Prop    | Type   | Default | Description                                              |
|---------|--------|---------|----------------------------------------------------------|
| icon    | string | 'check' | Icon variant: check, arrow, shield, star, badge          |
--}}
@props([
    'icon' => 'check',
])

@php
    $icons = [
        'check'  => 'heroicon-s-check-circle',
        'arrow'  => 'heroicon-s-arrow-right-circle',
        'shield' => 'heroicon-s-shield-check',
        'star'   => 'heroicon-s-star',
        'badge'  => 'heroicon-s-check-badge',
    ];

    $component = $icons[$icon] ?? $icons['check'];
@endphp

<li class="flex items-start gap-2.5">
    <x-dynamic-component :component="$component" class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
    <span class="text-base-600 text-sm leading-relaxed">{{ $slot }}</span>
</li>
