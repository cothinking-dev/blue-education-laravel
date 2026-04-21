@props([
    'steps' => [],
])

<div {{ $attributes->merge(['class' => 'relative']) }}>
    @php $colMap = [1=>'lg:grid-cols-1',2=>'lg:grid-cols-2',3=>'lg:grid-cols-3',4=>'lg:grid-cols-4',5=>'lg:grid-cols-5']; @endphp
    <ol class="grid grid-cols-1 md:grid-cols-2 {{ $colMap[min(count($steps), 5)] ?? 'lg:grid-cols-5' }} gap-8 list-none p-0 m-0">
        @foreach($steps as $i => $step)
            <li class="relative flex flex-col items-center">
                {{-- Connector line --}}
                @if(!$loop->last)
                    <div class="hidden lg:block absolute top-7 left-1/2 w-full h-0.5 bg-primary-200" aria-hidden="true"></div>
                @endif

                {{-- Icon or number circle --}}
                @if(!empty($step['icon']))
                    <div class="relative z-10 w-14 h-14 rounded-full bg-primary-50 border-2 border-primary-200 text-primary-800 flex items-center justify-center mb-2">
                        <x-dynamic-component :component="'heroicon-o-' . $step['icon']" class="w-7 h-7" />
                    </div>
                    <span class="text-xs font-bold text-primary-600 mb-2">Step {{ $step['number'] ?? $loop->iteration }}</span>
                @else
                    <div class="relative z-10 w-10 h-10 rounded-full bg-primary-800 text-white flex items-center justify-center text-sm font-bold mb-4">
                        {{ $step['number'] ?? $loop->iteration }}
                    </div>
                @endif

                <h3 class="font-semibold text-base-900 mb-2 text-center min-h-[2lh] grid place-items-center">{{ $step['title'] }}</h3>
                @if(!empty($step['summary']))
                    <p class="text-base-800 text-sm font-medium leading-relaxed text-pretty self-start mb-1.5">{{ $step['summary'] }}</p>
                @endif
                @if(!empty($step['description']))
                    <p class="text-base-500 text-sm leading-relaxed text-pretty self-start">{{ $step['description'] }}</p>
                @endif
            </li>
        @endforeach
    </ol>
</div>
