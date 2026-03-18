@props([
    'quote',
    'name',
    'credential' => null,
    'initials' => null,
    'photo' => null,
])

<div {{ $attributes->merge(['class' => 'bg-white border border-base-200 rounded-corner-lg p-6']) }}>
    <svg class="w-8 h-8 text-primary-200 mb-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10H14.017zM0 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151C7.546 6.068 5.983 8.789 5.983 11H10v10H0z"/>
    </svg>
    <blockquote class="text-base-700 leading-relaxed mb-6 text-pretty">{{ $quote }}</blockquote>
    <div class="flex items-center gap-3">
        @if($photo)
            <img src="{{ asset($photo) }}" alt="{{ $name }}" class="w-10 h-10 rounded-full object-cover shrink-0">
        @else
            <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-semibold shrink-0">
                {{ $initials ?? strtoupper(substr($name, 0, 1)) }}
            </div>
        @endif
        <div>
            <div class="font-semibold text-base-900 text-sm">{{ $name }}</div>
            @if($credential)
                <div class="text-base-500 text-xs">{{ $credential }}</div>
            @endif
        </div>
    </div>
</div>
