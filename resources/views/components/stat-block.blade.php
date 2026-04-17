{{--
| Prop    | Type   | Default | Values                                       |
|---------|--------|---------|----------------------------------------------|
| stats   | array  | []      | Array of ['value' => '...', 'label' => '...'] |
| variant | string | 'dark'  | dark, primary, light                          |
| slant   | bool   | false   | SVG slant divider above the block             |
--}}
@props([
    'stats' => [],
    'variant' => 'dark',
    'slant' => false,
])

@php
    $variants = [
        'dark' => 'bg-base-800 text-white',
        'primary' => 'bg-primary-800 text-white',
        'light' => 'bg-base-50 text-base-900',
    ];
    $bg = $variants[$variant] ?? $variants['dark'];
@endphp

<section {{ $attributes->merge(['class' => 'relative ' . $bg]) }} data-stat-countup>
    @if($slant)
        <div class="absolute bottom-full left-0 right-0">
            <svg viewBox="0 0 1440 80" preserveAspectRatio="none" class="block w-full h-8 md:h-12" aria-hidden="true">
                <polygon points="0,80 1440,0 1440,80" class="{{ $variant === 'light' ? 'fill-primary-50' : ($variant === 'primary' ? 'fill-primary-800' : 'fill-base-800') }}" />
            </svg>
        </div>
    @endif
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-12">
        @php $colMap = [1=>'md:grid-cols-1',2=>'md:grid-cols-2',3=>'md:grid-cols-3',4=>'md:grid-cols-4',5=>'md:grid-cols-5']; @endphp
        <div class="grid grid-cols-2 {{ $colMap[min(count($stats), 5)] ?? 'md:grid-cols-4' }} gap-6 lg:gap-0 lg:divide-x {{ $variant === 'light' ? 'divide-primary-200' : 'divide-white/20' }}">
            @foreach($stats as $stat)
                <div class="text-center px-4 lg:px-8">
                    <div class="text-3xl lg:text-4xl font-bold mb-1" data-count-target="{{ $stat['value'] }}">0</div>
                    <div class="{{ $variant === 'light' ? 'text-base-600' : 'text-base-300' }} text-sm">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
