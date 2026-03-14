@props([
    'title',
    'description' => null,
    'icon' => null,
    'image' => null,
    'alt' => '',
    'badge' => null,
    'href' => null,
    'linkText' => 'Learn more',
])

<div {{ $attributes->merge(['class' => 'border border-gray-200 rounded-corner-lg overflow-hidden bg-white hover:shadow-lg transition-shadow']) }}>
    @if($image)
        <div class="aspect-[16/10] bg-gray-200" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, rgba(0,0,0,0.04) 8px, rgba(0,0,0,0.04) 9px);">
            <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-full object-cover">
        </div>
    @endif
    <div class="p-6">
        @if($icon)
            <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                {!! $icon !!}
            </div>
        @endif
        @if($badge)
            <span class="inline-block bg-primary-50 text-primary-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3 uppercase tracking-wider">{{ $badge }}</span>
        @endif
        <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $title }}</h3>
        @if($description)
            <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">{{ $description }}</p>
        @endif
        {{ $slot }}
        @if($href)
            <a href="{{ $href }}" class="inline-flex items-center gap-1 text-sm font-medium text-primary-800 hover:text-primary-600 transition-colors">
                {{ $linkText }}
                <x-heroicon-m-chevron-right class="w-4 h-4" />
            </a>
        @endif
    </div>
</div>
