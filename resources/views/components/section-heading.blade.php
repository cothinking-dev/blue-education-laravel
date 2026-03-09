@props([
    'title',
    'subtitle' => null,
    'centered' => true,
])

<div {{ $attributes->merge(['class' => $centered ? 'text-center max-w-3xl mx-auto' : '']) }}>
    <h2 class="text-3xl font-bold text-gray-900 mb-3 text-pretty">{{ $title }}</h2>
    @if($subtitle)
        <p class="text-gray-600 text-lg text-pretty">{{ $subtitle }}</p>
    @endif
</div>
