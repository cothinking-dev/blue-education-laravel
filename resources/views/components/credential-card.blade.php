@props([
    'name',
    'logo' => null,
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-corner-lg border border-base-200 p-6 flex flex-col items-center text-center']) }}>
    @if($logo)
        <img src="{{ asset($logo) }}" alt="{{ $name }}" class="h-20 w-auto object-contain mb-4" loading="lazy">
    @else
        <div class="h-16 w-16 rounded-full bg-primary-50 flex items-center justify-center mb-4">
            <x-heroicon-o-shield-check class="h-8 w-8 text-primary-600" />
        </div>
    @endif

    <h3 class="text-sm font-bold text-base-900 mb-1">{{ $name }}</h3>

    @if($description)
        <p class="text-xs text-base-500 leading-relaxed text-pretty">{{ $description }}</p>
    @endif
</div>
