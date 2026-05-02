{{--
| Prop   | Type    | Default   | Description                                        |
|--------|---------|-----------|----------------------------------------------------|
| name   | string  | —         | Full name (used for alt text and initials fallback) |
| photo  | ?string | null      | Photo path (resolved via asset())                  |
| size   | string  | 'md'      | sm (40px circle), md (120x160), lg (160x208), full (100%x224) |
| shape  | string  | 'rounded' | rounded (rounded-xl), circle (rounded-full)        |
| webp   | bool    | true      | Use <picture> with webp source                     |
--}}
@props([
    'name',
    'photo' => null,
    'size' => 'md',
    'shape' => 'rounded',
    'webp' => true,
])

@php
    $initials = collect(explode(' ', $name))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->join('');
    $webpPhoto = $photo ? preg_replace('/\.(png|jpe?g)$/i', '.webp', $photo) : null;

    $sizes = [
        'sm'   => ['container' => 'w-10 h-10', 'text' => 'text-sm', 'width' => 40, 'height' => 40],
        'md'   => ['container' => 'w-30 h-40', 'text' => 'text-3xl', 'width' => 120, 'height' => 160],
        'lg'   => ['container' => 'w-40 h-52', 'text' => 'text-3xl', 'width' => 160, 'height' => 208],
        'full' => ['container' => 'w-full aspect-[4/3]', 'text' => 'text-3xl', 'width' => 320, 'height' => 240],
    ];
    $s = $sizes[$size] ?? $sizes['md'];
    $radius = $shape === 'circle' ? 'rounded-full' : 'rounded-xl';
    $objectFit = $size === 'full' ? 'object-cover object-top' : 'object-cover';
@endphp

@if($photo)
    @if($webp)
        <picture {{ $attributes->merge(['class' => $size === 'full' ? 'block' : 'shrink-0']) }}>
            <source srcset="{{ asset($webpPhoto) }}" type="image/webp">
            <img src="{{ asset($photo) }}" alt="{{ $name }}" class="{{ $s['container'] }} {{ $radius }} {{ $objectFit }}" loading="lazy" width="{{ $s['width'] }}" height="{{ $s['height'] }}">
        </picture>
    @else
        <img {{ $attributes->merge(['class' => "{$s['container']} {$radius} {$objectFit} shrink-0"]) }} src="{{ asset($photo) }}" alt="{{ $name }}" loading="lazy" width="{{ $s['width'] }}" height="{{ $s['height'] }}">
    @endif
@else
    <div {{ $attributes->merge(['class' => "{$s['container']} {$radius} bg-primary-100 flex items-center justify-center " . ($size !== 'full' ? 'shrink-0' : '')]) }}>
        <span class="{{ $s['text'] }} font-bold text-primary-600">{{ $initials }}</span>
    </div>
@endif
