@props([
    'steps' => [],
])

<div {{ $attributes->merge(['class' => 'relative']) }}>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-{{ min(count($steps), 4) }} gap-8">
        @foreach($steps as $i => $step)
            <div class="relative flex flex-col items-center text-center">
                {{-- Connector line --}}
                @if(!$loop->last)
                    <div class="hidden lg:block absolute top-5 left-1/2 w-full h-0.5 bg-primary-200" aria-hidden="true"></div>
                @endif
                {{-- Circle number --}}
                <div class="relative z-10 w-10 h-10 rounded-full bg-primary-800 text-white flex items-center justify-center text-sm font-bold mb-4">
                    {{ $step['number'] ?? $loop->iteration }}
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">{{ $step['title'] }}</h3>
                @if(!empty($step['description']))
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">{{ $step['description'] }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
