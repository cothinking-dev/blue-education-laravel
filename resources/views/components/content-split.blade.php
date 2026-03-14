@props([
    'title',
    'reverse' => false,
    'image' => null,
    'alt' => '',
])

<section {{ $attributes->merge(['class' => 'bg-white']) }}>
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
        <div class="flex flex-col {{ $reverse ? 'lg:flex-row-reverse' : 'lg:flex-row' }} items-center gap-12">
            <div class="flex-1 lg:max-w-[55%]">
                <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty">{{ $title }}</h2>
                <div class="text-gray-600 leading-relaxed space-y-4 text-pretty">
                    {{ $slot }}
                </div>
            </div>
            <div class="flex-1 lg:max-w-[40%]">
                @if($image)
                    <img src="{{ $image }}" alt="{{ $alt }}" class="rounded-corner-lg w-full h-auto">
                @else
                    <div class="bg-gray-200 rounded-corner-lg aspect-[4/3] w-full" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, rgba(0,0,0,0.04) 8px, rgba(0,0,0,0.04) 9px);"></div>
                @endif
            </div>
        </div>
    </div>
</section>
