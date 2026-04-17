{{--
| Prop        | Type    | Default | Description                          |
|-------------|---------|---------|--------------------------------------|
| title       | string  | —       | Page heading (h1)                    |
| subtitle    | ?string | null    | Paragraph below title                |
| badge       | ?string | null    | Small label above the title          |
| breadcrumbs | mixed   | null    | Truthy value enables auto-breadcrumb |
| image       | ?string | null    | Image URL for the right column       |
| alt         | string  | ''      | Image alt text                       |
| width       | int     | 1920    | Image intrinsic width                |
| imageHeight | int     | 1080    | Image intrinsic height               |
--}}
@props([
    'title',
    'subtitle' => null,
    'badge' => null,
    'breadcrumbs' => null,
    'image' => null,
    'alt' => '',
    'width' => 1920,
    'imageHeight' => 1080,
])

<section {{ $attributes->merge(['class' => 'relative bg-white']) }}>
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16 lg:py-20 flex flex-col lg:flex-row items-center gap-12">
        <div class="flex-1">
            @if($breadcrumbs)
                <x-auto-breadcrumb class="mb-4" />
            @endif
            @if($badge)
                <x-badge size="md" class="mb-4">{{ $badge }}</x-badge>
            @endif
            <h1 class="text-4xl lg:text-5xl font-bold text-base-900 mb-5 leading-tight text-pretty">{{ $title }}</h1>
            @if($subtitle)
                <p class="text-xl text-base-600 mb-8 text-pretty">{{ $subtitle }}</p>
            @endif
            {{ $slot }}
        </div>
        <div class="flex-1">
            @if($image)
                <img src="{{ $image }}" alt="{{ $alt }}" class="rounded-corner-lg w-full h-auto" loading="lazy" width="{{ $width }}" height="{{ $imageHeight }}">
            @else
                <div class="bg-base-200 rounded-corner-lg aspect-[4/3] w-full" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, var(--placeholder-stripe) 8px, var(--placeholder-stripe) 9px);"></div>
            @endif
        </div>
    </div>
</section>
