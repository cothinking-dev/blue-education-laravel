@props([
    'title' => 'Explore More',
    'subtitle' => null,
    'variant' => 'cards',
    'bg' => 'bg-base-50',
    'links' => [],
])

@php
    $count = count($links);
    $gridCols = $count >= 3 ? 'sm:grid-cols-3' : 'sm:grid-cols-2';
@endphp

<section {{ $attributes->merge(['class' => $bg]) }}>
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">

        @if($variant === 'links')
            <h2 class="text-lg font-bold text-base-900 mb-4">{{ $title }}</h2>
            <div class="flex flex-col sm:flex-row gap-4">
                @foreach($links as $link)
                    <a href="{{ $link['href'] }}" class="text-primary-800 font-semibold hover:text-primary-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600 rounded-sm transition-colors">{{ $link['title'] }} &rarr;</a>
                @endforeach
            </div>

        @elseif($variant === 'featured')
            <x-section-heading :title="$title" :centered="false" />
            @if($subtitle)
                <p class="text-base-600 mb-8 text-pretty">{{ $subtitle }}</p>
            @endif
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                {{-- Dark panel (first link) --}}
                @if(isset($links[0]))
                    <a href="{{ $links[0]['href'] }}" class="group relative overflow-hidden rounded-corner-lg bg-primary-800 p-7 text-white hover:bg-primary-900 transition-colors">
                        <div class="relative z-10">
                            @if(!empty($links[0]['label']))
                                <p class="text-primary-200 text-xs font-semibold uppercase tracking-wider mb-2">{{ $links[0]['label'] }}</p>
                            @endif
                            <h3 class="text-lg font-bold mb-2">{{ $links[0]['title'] }}</h3>
                            @if(!empty($links[0]['description']))
                                <p class="text-primary-200 text-sm leading-relaxed text-pretty">{{ $links[0]['description'] }}</p>
                            @endif
                        </div>
                        <x-heroicon-o-arrow-right class="absolute bottom-6 right-6 w-6 h-6 text-primary-300 group-hover:translate-x-1 transition-transform" />
                    </a>
                @endif
                {{-- Light panel (second link) --}}
                @if(isset($links[1]))
                    <a href="{{ $links[1]['href'] }}" class="group relative overflow-hidden rounded-corner-lg bg-primary-50 border border-primary-100 p-7 hover:bg-primary-100 transition-colors">
                        <div class="relative z-10">
                            @if(!empty($links[1]['label']))
                                <p class="text-primary-600 text-xs font-semibold uppercase tracking-wider mb-2">{{ $links[1]['label'] }}</p>
                            @endif
                            <h3 class="text-lg font-bold text-base-900 mb-2">{{ $links[1]['title'] }}</h3>
                            @if(!empty($links[1]['description']))
                                <p class="text-base-600 text-sm leading-relaxed text-pretty">{{ $links[1]['description'] }}</p>
                            @endif
                        </div>
                        <x-heroicon-o-arrow-right class="absolute bottom-6 right-6 w-6 h-6 text-primary-400 group-hover:translate-x-1 transition-transform" />
                    </a>
                @endif
            </div>

        @else {{-- cards (default) --}}
            <x-section-heading :title="$title" :centered="false" />
            @if($subtitle)
                <p class="text-base-600 mb-8 text-pretty">{{ $subtitle }}</p>
            @endif
            <div class="grid {{ $gridCols }} gap-6" data-animate="stagger">
                @foreach($links as $link)
                    <a href="{{ $link['href'] }}" class="bg-white rounded-corner-lg border border-base-200 p-6 hover:border-primary-300 hover:shadow-md transition-all group flex flex-col">
                        @if(!empty($link['icon']))
                            <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4 group-hover:bg-primary-100 transition-colors">
                                <x-dynamic-component :component="$link['icon']" class="w-5 h-5" />
                            </div>
                        @endif
                        <h3 class="font-bold text-base-900 mb-2 group-hover:text-primary-800 transition-colors">{{ $link['title'] }} &rarr;</h3>
                        @if(!empty($link['description']))
                            <p class="text-base-600 text-sm text-pretty">{{ $link['description'] }}</p>
                        @endif
                    </a>
                @endforeach
            </div>
        @endif

    </div>
</section>
