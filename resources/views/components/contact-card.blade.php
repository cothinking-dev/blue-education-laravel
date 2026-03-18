@props([
    'title',
    'icon' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-corner-lg border border-base-200 p-6 text-center']) }}>
    @if($icon)
        <div class="flex justify-center mb-4 text-primary-600">
            {!! $icon !!}
        </div>
    @endif

    <h3 class="text-lg font-bold text-base-900 mb-3">{{ $title }}</h3>

    <div class="text-sm text-base-600 space-y-1">
        {{ $slot }}
    </div>
</div>
