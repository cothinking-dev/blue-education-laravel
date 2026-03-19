@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'type' => 'button',
])

@php
    $variants = [
        'primary' => 'bg-primary-500 text-white hover:bg-primary-600 focus:ring-primary-300',
        'secondary' => 'bg-white text-primary-800 border border-primary-800 hover:bg-primary-50 focus:ring-primary-300',
        'outline' => 'bg-transparent text-base-700 border border-base-300 hover:border-base-400 hover:text-base-900 focus:ring-base-300',
        'ghost' => 'bg-transparent text-primary-800 hover:bg-primary-50 focus:ring-primary-300',
        'outline-white' => 'bg-transparent text-white border border-white hover:bg-white hover:text-primary-900 focus:ring-white/40',
        'white' => 'bg-white text-primary-800 hover:bg-primary-50 focus:ring-white/40',
        'success' => 'bg-success-500 text-white hover:bg-success-600 focus:ring-success-500/40',
    ];
    $sizes = [
        'sm' => 'px-4 py-2 text-sm',
        'md' => 'px-6 py-2.5 text-sm',
        'lg' => 'px-8 py-3 text-base',
    ];
    $classes = ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md'])
        . ' inline-flex items-center justify-center font-semibold rounded-corner transition-colors focus:outline-none focus:ring-2';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
