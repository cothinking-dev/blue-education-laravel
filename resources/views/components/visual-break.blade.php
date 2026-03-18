@props([
    'images' => [],
    'bg' => 'bg-white',
    'aspect' => null,
    'position' => 'center',
    'padding' => 'py-14',
    'inline' => false,
])

@php
    $count = count($images);
    $defaultAspect = $count === 1 ? 'aspect-[4/1]' : 'aspect-[3/2]';
    $aspectClass = $aspect ?? $defaultAspect;
    $positionStyle = "object-position: {$position}";
    $gridClass = match(true) {
        $count >= 3 => 'grid sm:grid-cols-3 gap-6',
        $count === 2 => 'grid sm:grid-cols-2 gap-6',
        default => '',
    };
@endphp

@if($count === 0)
    <div {{ $attributes->merge(['class' => $bg]) }}>
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-6">
            <div class="h-px bg-gradient-to-r from-transparent via-base-200 to-transparent"></div>
        </div>
    </div>
@elseif($inline)
    @if($count === 1)
        <img src="{{ asset($images[0]['src']) }}"
             alt="{{ $images[0]['alt'] }}"
             class="rounded-corner-lg w-full h-auto object-cover shadow-lg {{ $aspectClass }}"
             style="{{ $positionStyle }}"
             loading="lazy">
    @else
        <div class="{{ $gridClass }}">
            @foreach($images as $image)
                <img src="{{ asset($image['src']) }}"
                     alt="{{ $image['alt'] }}"
                     class="rounded-corner-lg w-full h-auto object-cover shadow-lg {{ $aspectClass }}"
                     style="{{ $positionStyle }}"
                     loading="lazy">
            @endforeach
        </div>
    @endif
@else
    <section class="{{ $bg }}">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 {{ $padding }}">
            @if($count === 1)
                <img src="{{ asset($images[0]['src']) }}"
                     alt="{{ $images[0]['alt'] }}"
                     class="rounded-corner-lg w-full h-auto object-cover shadow-lg {{ $aspectClass }}"
                     style="{{ $positionStyle }}"
                     loading="lazy">
            @else
                <div class="{{ $gridClass }}">
                    @foreach($images as $image)
                        <img src="{{ asset($image['src']) }}"
                             alt="{{ $image['alt'] }}"
                             class="rounded-corner-lg w-full h-auto object-cover shadow-lg {{ $aspectClass }}"
                             style="{{ $positionStyle }}"
                             loading="lazy">
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endif
