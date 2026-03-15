@props([
    'stats' => [],
    'variant' => 'dark',
])

@php
    $variants = [
        'dark' => 'bg-gray-800 text-white',
        'primary' => 'bg-primary-800 text-white',
        'light' => 'bg-primary-50 text-gray-900',
    ];
    $bg = $variants[$variant] ?? $variants['dark'];
@endphp

<section {{ $attributes->merge(['class' => $bg]) }} data-stat-countup>
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-10">
        @php $colMap = [1=>'md:grid-cols-1',2=>'md:grid-cols-2',3=>'md:grid-cols-3',4=>'md:grid-cols-4',5=>'md:grid-cols-5']; @endphp
        <div class="grid grid-cols-2 {{ $colMap[min(count($stats), 5)] ?? 'md:grid-cols-4' }} gap-6 lg:gap-0 lg:divide-x {{ $variant === 'light' ? 'divide-primary-200' : 'divide-white/20' }}">
            @foreach($stats as $stat)
                <div class="text-center px-4 lg:px-8">
                    <div class="text-3xl lg:text-4xl font-bold mb-1" data-count-target="{{ $stat['value'] }}">0</div>
                    <div class="{{ $variant === 'light' ? 'text-gray-600' : 'text-gray-300' }} text-sm">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
