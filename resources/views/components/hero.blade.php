{{--
| Prop         | Type    | Default    | Description                                    |
|--------------|---------|------------|------------------------------------------------|
| title        | string  | —          | Page heading (h1)                              |
| subtitle     | ?string | null       | Paragraph below title                          |
| image        | ?string | null       | Background image URL                           |
| alt          | string  | ''         | Image alt text                                 |
| overlay      | bool    | true       | Brand-blue gradient overlay on image           |
| breadcrumbs  | mixed   | null       | Truthy value enables auto-breadcrumb           |
| badge        | ?string | null       | Small label above the title                    |
| variant      | string  | 'centered' | centered, left                                 |
| height       | string  | '80dvh'    | CSS min-height value                           |
| position     | string  | 'center'   | CSS object-position for the background image   |
| width        | int     | 1920       | Image intrinsic width                          |
| imageHeight  | int     | 1080       | Image intrinsic height                         |
| preloadImage | bool    | false      | Add <link rel="preload"> for the hero image    |
--}}
@props([
    'title',
    'subtitle' => null,
    'image' => null,
    'alt' => '',
    'overlay' => true,
    'breadcrumbs' => null,
    'badge' => null,
    'variant' => 'centered',
    'height' => '80dvh',
    'position' => 'center',
    'width' => 1920,
    'imageHeight' => 1080,
    'preloadImage' => false,
])

@php
    $alignment = $variant === 'left'
        ? 'items-start justify-center text-left'
        : 'items-center justify-center text-center';
@endphp

@if($preloadImage && $image)
    @push('head')
        <link rel="preload" as="image" href="{{ $image }}">
    @endpush
@endif

<section {{ $attributes->merge(['class' => 'relative flex flex-col overflow-hidden [clip-path:inset(0)] ' . $alignment]) }} style="min-height:{{ $height }}; background-color: var(--color-base-100);">
    @if($image)
        <img data-hero-parallax src="{{ $image }}" alt="{{ $alt }}" class="fixed inset-0 w-full h-full object-cover" style="object-position: {{ $position }};" fetchpriority="high" width="{{ $width }}" height="{{ $imageHeight }}">
    @endif
    @if($overlay && $variant === 'centered')
        {{-- Centered: top-to-bottom white gradient --}}
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgb(255 255 255 / 1), rgb(255 255 255 / 0.55));"></div>
    @elseif($overlay && $variant === 'left')
        {{-- Left: left-to-right white gradient --}}
        <div class="absolute inset-0" style="background: linear-gradient(to right, rgb(255 255 255 / 1), rgb(255 255 255 / 0.9), rgb(255 255 255 / 0.7));"></div>
    @endif
    <div class="relative z-10 px-8 py-10 my-auto {{ $variant === 'centered' ? 'max-w-3xl mx-auto bg-white/10 backdrop-blur-md rounded-corner-lg shadow-lg' : 'max-w-7xl w-full mx-auto lg:px-16' }}">
        @if($breadcrumbs)
            <x-auto-breadcrumb class="mb-10" />
        @endif
        @if($badge)
            <x-badge variant="primary" size="md" class="mb-5">{{ $badge }}</x-badge>
        @endif
        <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-6 leading-tight text-pretty max-w-4xl">{{ $title }}</h1>
        @if($subtitle)
            <p class="text-xl text-base-600 text-pretty max-w-3xl">{{ $subtitle }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
