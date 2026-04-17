{{--
| Prop        | Type    | Default    | Description                                      |
|-------------|---------|------------|--------------------------------------------------|
| title       | string  | —          | Card heading (h3)                                |
| description | ?string | null       | Body text below heading                          |
| image       | ?string | null       | Image URL                                        |
| alt         | string  | ''         | Image alt text                                   |
| badge       | ?string | null       | Small label above title                          |
| href        | ?string | null       | Makes the entire card clickable                  |
| linkText    | string  | 'Learn more' | Visible CTA text and aria-label for card link  |
| variant     | string  | 'default'  | default, featured                                |
| aspect      | string  | '16/10'    | CSS aspect ratio for image (e.g. '21/9', '4/3') |
| gradient    | bool    | false      | White gradient fade over bottom of image         |
--}}
@props([
    'title',
    'description' => null,
    'image' => null,
    'alt' => '',
    'badge' => null,
    'href' => null,
    'linkText' => 'Learn more',
    'variant' => 'default',
    'aspect' => '16/10',
    'gradient' => false,
])

@if($variant === 'featured')
{{-- Featured variant: horizontal layout with prominent icon panel --}}
<div {{ $attributes->merge(['class' => 'relative border border-base-200 rounded-corner-lg overflow-hidden bg-white transition-shadow' . ($href ? ' hover:shadow-lg' : '')]) }}>
    @if($href)
        <a href="{{ $href }}" class="absolute inset-0 z-10" aria-label="{{ $linkText }}"></a>
    @endif
    <div class="flex flex-col lg:flex-row">
        @isset($icon)
            <div class="flex shrink-0 lg:w-44 items-center justify-center bg-gradient-to-br from-primary-50 to-primary-100 p-8">
                <div class="w-14 h-14 rounded-2xl bg-primary-800 text-white flex items-center justify-center shadow-sm">
                    {{ $icon }}
                </div>
            </div>
        @endisset
        <div class="p-6 flex-1">
            @if($badge)
                <x-badge class="mb-3">{{ $badge }}</x-badge>
            @endif
            <h3 class="text-lg font-semibold text-base-900 mb-2">{{ $title }}</h3>
            @if($description)
                <p class="text-base-600 leading-relaxed mb-4 text-pretty">{{ $description }}</p>
            @endif
            {{ $slot }}
            @if($href)
                <span class="inline-flex items-center gap-1 text-sm font-medium text-primary-800 transition-colors">
                    {{ $linkText }}
                    <x-heroicon-m-chevron-right class="w-4 h-4" />
                </span>
            @endif
        </div>
    </div>
</div>
@else
{{-- Default variant --}}
<div {{ $attributes->merge(['class' => 'relative border border-base-200 rounded-corner-lg overflow-hidden bg-white transition-shadow' . ($href ? ' hover:shadow-lg' : '')]) }}>
    @if($href)
        <a href="{{ $href }}" class="absolute inset-0 z-10" aria-label="{{ $linkText }}"></a>
    @endif
    @if($image)
        <div class="aspect-[{{ $aspect }}] bg-base-200 {{ $gradient ? 'relative' : '' }}" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, var(--placeholder-stripe) 8px, var(--placeholder-stripe) 9px);">
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-full object-cover" loading="lazy" width="640" height="400">
            @if($gradient)
                <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-b from-transparent to-white"></div>
            @endif
        </div>
    @endif
    <div class="p-6">
        @isset($icon)
            <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                {{ $icon }}
            </div>
        @endisset
        @if($badge)
            <x-badge class="mb-3">{{ $badge }}</x-badge>
        @endif
        <h3 class="text-lg font-semibold text-base-900 mb-2">{{ $title }}</h3>
        @if($description)
            <p class="text-base-600 leading-relaxed mb-4 text-pretty">{{ $description }}</p>
        @endif
        {{ $slot }}
        @if($href)
            <span class="inline-flex items-center gap-1 text-sm font-medium text-primary-800 group-hover:text-primary-600 transition-colors">
                {{ $linkText }}
                <x-heroicon-m-chevron-right class="w-4 h-4" />
            </span>
        @endif
    </div>
</div>
@endif
