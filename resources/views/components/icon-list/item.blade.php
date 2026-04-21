{{--
| Prop    | Type    | Default | Description                                              |
|---------|---------|---------|----------------------------------------------------------|
| icon    | ?string | null    | Override icon variant: check, arrow, shield, star, badge |
|         |         |         | Falls back to parent <x-icon-list> variant if not set    |
--}}
@aware(['variant' => 'check'])

@props([
    'icon' => null,
])

@php
    $icons = [
        'check'  => 'heroicon-s-check-circle',
        'arrow'  => 'heroicon-s-arrow-right-circle',
        'shield' => 'heroicon-s-shield-check',
        'star'   => 'heroicon-s-star',
        'badge'  => 'heroicon-s-check-badge',
    ];

    $resolved = $icon ?? $variant;
    $component = $icons[$resolved] ?? $icons['check'];
@endphp

<li class="flex items-start gap-2.5">
    <x-dynamic-component :component="$component" class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
    <span class="text-base-600 text-sm leading-relaxed">{{ $slot }}</span>
</li>
