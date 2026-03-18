@props([
    'title',
    'description' => null,
    'image' => null,
    'alt' => '',
    'badge' => null,
    'href' => null,
    'linkText' => 'Learn more',
    'variant' => 'default',
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
                <span class="inline-block bg-primary-50 text-primary-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3 uppercase tracking-wider">{{ $badge }}</span>
            @endif
            <h3 class="text-lg font-semibold text-base-900 mb-2">{{ $title }}</h3>
            @if($description)
                <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">{{ $description }}</p>
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
        <div class="aspect-[16/10] bg-base-200" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, var(--placeholder-stripe) 8px, var(--placeholder-stripe) 9px);">
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-full object-cover" loading="lazy">
        </div>
    @endif
    <div class="p-6">
        @isset($icon)
            <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                {{ $icon }}
            </div>
        @endisset
        @if($badge)
            <span class="inline-block bg-primary-50 text-primary-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3 uppercase tracking-wider">{{ $badge }}</span>
        @endif
        <h3 class="text-lg font-semibold text-base-900 mb-2">{{ $title }}</h3>
        @if($description)
            <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">{{ $description }}</p>
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
