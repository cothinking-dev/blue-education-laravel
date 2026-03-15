@props([
    'logos' => [],
    'title' => null,
    'grayscale' => true,
    'marquee' => false,
])

<section {{ $attributes->merge(['class' => 'bg-gray-50']) }}>
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-12">
        @if($title)
            <p class="text-center text-gray-500 text-sm font-medium uppercase tracking-wider mb-8">{{ $title }}</p>
        @endif

        @if($marquee)
            <div class="overflow-hidden">
                <div class="flex items-center gap-12" data-marquee="30">
                    @foreach($logos as $logo)
                        <div class="{{ $grayscale ? 'opacity-60 grayscale hover:opacity-100 hover:grayscale-0' : '' }} transition-all shrink-0">
                            @if(!empty($logo['src']))
                                <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] ?? '' }}" class="h-10 w-auto" loading="lazy">
                            @else
                                <div class="h-10 w-24 bg-gray-300 rounded flex items-center justify-center text-xs text-gray-500 font-mono">{{ $logo['alt'] ?? 'Logo' }}</div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12">
                @foreach($logos as $logo)
                    <div class="{{ $grayscale ? 'opacity-60 grayscale hover:opacity-100 hover:grayscale-0' : '' }} transition-all">
                        @if(!empty($logo['src']))
                            <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] ?? '' }}" class="h-10 w-auto" loading="lazy">
                        @else
                            <div class="h-10 w-24 bg-gray-300 rounded flex items-center justify-center text-xs text-gray-500 font-mono">{{ $logo['alt'] ?? 'Logo' }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
