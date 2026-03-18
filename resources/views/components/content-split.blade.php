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
                @if(isset($before))
                    {{ $before }}
                @endif
                <h2 class="text-2xl font-bold text-base-900 mb-6 text-pretty" data-animate="fade-up">{{ $title }}</h2>
                <div class="text-base-600 leading-relaxed space-y-4 text-pretty">
                    {{ $slot }}
                </div>
            </div>
            <div class="flex-1 lg:max-w-[40%]">
                @if($image)
                    <img src="{{ $image }}" alt="{{ $alt }}" class="rounded-corner-lg w-full h-auto shadow-lg" loading="lazy">
                @else
                    <div class="bg-base-200 rounded-corner-lg aspect-[4/3] w-full" style="background-image: repeating-linear-gradient(-55deg, transparent, transparent 8px, var(--placeholder-stripe) 8px, var(--placeholder-stripe) 9px);"></div>
                @endif
            </div>
        </div>
    </div>
</section>
