@props([
    'tabs' => [],
    'active' => null,
])

<div {{ $attributes->merge(['class' => 'flex flex-wrap gap-2']) }}>
    @foreach($tabs as $tab)
        @php
            $isActive = ($active === ($tab['value'] ?? $tab['label']));
        @endphp
        <button
            type="button"
            class="{{ $isActive
                ? 'bg-primary-800 text-white'
                : 'bg-white text-base-700 border border-base-200 hover:border-primary-300 hover:text-primary-800'
            }} px-4 py-2 rounded-full text-sm font-medium transition-colors"
            {{ $isActive ? 'aria-current=true' : '' }}
        >
            {{ $tab['label'] }}
        </button>
    @endforeach
</div>
