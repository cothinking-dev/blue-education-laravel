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
])

@php
    $variants = [
        'centered' => 'items-center justify-center text-center',
        'left' => 'items-start justify-center text-left',
        'light' => 'items-center justify-center text-center',
        'split' => '',
    ];
    $alignment = $variants[$variant] ?? $variants['centered'];
@endphp

@if($variant === 'light')
<section {{ $attributes->merge(['class' => 'relative']) }} style="min-height:{{ $height }}; background: linear-gradient(180deg, var(--color-primary-50) 0%, white 100%);">
    <div class="relative z-10 px-8 py-20 max-w-3xl mx-auto text-center">
        @if($breadcrumbs)
            <x-auto-breadcrumb class="mb-6 justify-center" />
        @endif
        @if($badge)
            <span class="inline-block bg-primary-100 text-primary-800 text-xs font-semibold px-3 py-1 rounded-full mb-4 uppercase tracking-wider">{{ $badge }}</span>
        @endif
        <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-5 leading-tight text-pretty">{{ $title }}</h1>
        @if($subtitle)
            <p class="text-xl text-base-600 mb-8 text-pretty">{{ $subtitle }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
@elseif($variant === 'split')
<section {{ $attributes->merge(['class' => 'relative bg-white']) }}>
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16 lg:py-20 flex flex-col lg:flex-row items-center gap-12">
        <div class="flex-1">
            @if($breadcrumbs)
                <x-auto-breadcrumb class="mb-4" />
            @endif
            @if($badge)
                <span class="inline-block bg-primary-50 text-primary-800 text-xs font-semibold px-3 py-1 rounded-full mb-4 uppercase tracking-wider">{{ $badge }}</span>
            @endif
            <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-5 leading-tight text-pretty">{{ $title }}</h1>
            @if($subtitle)
                <p class="text-xl text-base-600 mb-8 text-pretty">{{ $subtitle }}</p>
            @endif
            {{ $slot }}
        </div>
        <div class="flex-1">
            @if($image)
                <img src="{{ $image }}" alt="{{ $alt }}" class="rounded-corner-lg w-full h-auto">
            @else
                <div class="bg-base-200 rounded-corner-lg aspect-[4/3] w-full" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, var(--placeholder-stripe) 8px, var(--placeholder-stripe) 9px);"></div>
            @endif
        </div>
    </div>
</section>
@else
<section {{ $attributes->merge(['class' => 'relative flex flex-col overflow-hidden [clip-path:inset(0)] ' . $alignment]) }} style="min-height:{{ $height }}; background-color: var(--color-base-700);">
    @if($image)
        <img data-hero-parallax src="{{ $image }}" alt="{{ $alt }}" class="fixed inset-0 w-full h-full object-cover" style="object-position: {{ $position }};">
    @endif
    @if($overlay)
        {{-- Layer 1: Brand blue gradient with multiply blend --}}
        <div class="absolute inset-0" style="background: linear-gradient(135deg, var(--hero-overlay-start), var(--hero-overlay-end)); mix-blend-mode: multiply;"></div>
        {{-- Layer 2: Vignette — darkens edges, clear center --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse 80% 80% at 50% 50%, transparent 30%, var(--hero-vignette) 100%);"></div>
    @endif
    <div class="relative z-10 px-8 py-10 my-auto {{ $variant === 'centered' ? 'max-w-3xl mx-auto' : 'max-w-7xl w-full mx-auto lg:px-16' }}">
        @if($breadcrumbs)
            <x-auto-breadcrumb class="mb-10" dark />
        @endif
        @if($badge)
            <span class="inline-block bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full mb-5 uppercase tracking-wider backdrop-blur-sm">{{ $badge }}</span>
        @endif
        <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight text-pretty max-w-4xl">{{ $title }}</h1>
        @if($subtitle)
            <p class="text-xl text-base-200 text-pretty max-w-3xl">{{ $subtitle }}</p>
        @endif
        {{ $slot }}
    </div>
</section>
@endif
