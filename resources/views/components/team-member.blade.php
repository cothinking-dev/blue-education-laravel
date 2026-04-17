{{--
| Prop        | Type    | Default | Values                                 |
|-------------|---------|---------|----------------------------------------|
| name        | string  | —       | Team member's full name                |
| role        | string  | —       | Job title (used as default badge text) |
| photo       | ?string | null    | Photo path (relative to public/)       |
| bio         | ?string | null    | Short biography                        |
| credentials | ?string | null    | Professional qualifications            |
| languages   | ?string | null    | Languages spoken                       |
| variant     | string  | 'card'  | card, featured, legal                  |
| badge       | ?string | null    | Override badge text (defaults to role) |
| leadership  | bool    | false   | Styled as leadership role badge        |
--}}
@props([
    'name',
    'role',
    'photo' => null,
    'bio' => null,
    'credentials' => null,
    'languages' => null,
    'variant' => 'card',
    'badge' => null,
    'leadership' => false,
])

@php
    $badgeLabel = $badge ?? $role;
    $badgeClasses = $leadership
        ? 'bg-primary-50 border-primary-200 text-primary-700'
        : 'bg-base-50 border-base-200 text-base-600';
@endphp

@if($variant === 'featured')
    {{-- Full-width featured card (e.g. Executive Director) --}}
    <article {{ $attributes->merge(['class' => 'bg-white rounded-corner-lg border border-base-200 p-8 flex items-start gap-8 shadow-md']) }}>
        <x-avatar :name="$name" :photo="$photo" size="lg" />
        <div class="flex-1">
            <div class="inline-block {{ $badgeClasses }} border text-xs font-bold px-2 py-0.5 rounded mb-3">{{ $badgeLabel }}</div>
            <h3 class="text-xl font-bold text-base-900">{{ $name }}</h3>
            @if($credentials)
                <p class="text-sm text-primary-600 font-medium mt-1">{{ $credentials }}</p>
            @endif
            @if($languages)
                <p class="text-xs text-base-500 mt-2">{{ $languages }}</p>
            @endif
            @if($bio)
                <p class="text-sm text-base-600 mt-4 leading-relaxed">{{ $bio }}</p>
            @endif
        </div>
    </article>

@elseif($variant === 'legal')
    {{-- Migration & legal specialist card with dark header bar --}}
    <article {{ $attributes->merge(['class' => 'border-2 border-primary-800 rounded-corner-lg overflow-hidden shadow-md']) }}>
        <div class="px-5 py-2 bg-primary-900">
            <span class="text-white text-xs font-bold uppercase tracking-widest">{{ $badgeLabel }}</span>
        </div>
        <div class="p-7 flex items-start gap-6">
            <x-avatar :name="$name" :photo="$photo" size="md" />
            <div>
                <h3 class="text-xl font-bold text-base-900">{{ $name }}</h3>
                @if($credentials)
                    <p class="text-sm text-primary-600 font-medium mt-1">{{ $credentials }}</p>
                @endif
                @if($languages)
                    <p class="text-xs text-base-500 mt-3">{{ $languages }}</p>
                @endif
                @if($bio)
                    <p class="text-sm text-base-600 mt-4 leading-relaxed">{{ $bio }}</p>
                @endif
            </div>
        </div>
    </article>

@else
    {{-- Default card variant: photo on top, bordered card --}}
    <article {{ $attributes->merge(['class' => 'border border-base-200 rounded-corner-lg overflow-hidden shadow-md']) }}>
        <x-avatar :name="$name" :photo="$photo" size="full" />
        <div class="p-5">
            <div class="inline-block {{ $badgeClasses }} border text-xs font-bold px-2 py-0.5 rounded mb-3">{{ $badgeLabel }}</div>
            <h3 class="font-bold text-base-900 text-base">{{ $name }}</h3>
            @if($languages)
                <p class="text-xs text-base-500 mt-1.5">{{ $languages }}</p>
            @endif
            @if($bio)
                <p class="text-sm text-base-600 mt-3 leading-relaxed">{{ $bio }}</p>
            @endif
        </div>
    </article>
@endif
