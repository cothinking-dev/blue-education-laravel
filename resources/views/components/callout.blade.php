{{--
| Prop    | Type    | Default   | Values                          |
|---------|---------|-----------|----------------------------------|
| title   | string  | —         | Callout heading                  |
| variant | string  | 'primary' | primary, info, success, warning  |
| icon    | ?slot   | null      | Optional icon slot               |
--}}
@props([
    'title',
    'variant' => 'primary',
    'icon' => null,
])

@php
    $variants = [
        'primary' => 'bg-primary-50 border-primary-200 text-primary-900',
        'info' => 'bg-blue-50 border-blue-200 text-blue-900',
        'success' => 'bg-green-50 border-green-200 text-green-900',
        'warning' => 'bg-amber-50 border-amber-200 text-amber-900',
    ];
    $style = $variants[$variant] ?? $variants['primary'];
@endphp

<div {{ $attributes->merge(['class' => "border rounded-corner-lg p-6 {$style}"]) }}>
    <div class="flex items-center gap-3 mb-3">
        @if($icon)
            <div class="shrink-0">{!! $icon !!}</div>
        @endif
        <h3 class="font-semibold">{{ $title }}</h3>
    </div>
    <div class="text-sm leading-relaxed text-pretty">
        {{ $slot }}
    </div>
</div>
