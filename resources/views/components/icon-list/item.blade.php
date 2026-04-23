{{--
| Prop    | Type    | Default | Description                                              |
|---------|---------|---------|----------------------------------------------------------|
| icon    | ?string | null    | Override icon variant: check, arrow, shield, star, badge |
|         |         |         | Falls back to parent <x-icon-list> variant if not set    |
--}}
@aware(['variant' => 'check', 'theme' => 'light'])

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
    $iconClass = $theme === 'dark' ? 'text-primary-300' : 'text-primary-600';
    $textClass = $theme === 'dark' ? 'text-primary-100' : 'text-base-600';
@endphp

<li class="flex items-start gap-2.5">
    <x-dynamic-component :component="$component" class="w-5 h-5 {{ $iconClass }} shrink-0 mt-0.5" />
    <span class="{{ $textClass }} text-sm leading-relaxed">{{ $slot }}</span>
</li>
