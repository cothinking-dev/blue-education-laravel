{{--
| Prop       | Type    | Default | Description                            |
|------------|---------|---------|----------------------------------------|
| name       | string  | —       | Team member's full name                |
| photo      | ?string | null    | Photo path (relative to public/)       |
| bio        | ?string | null    | Short biography (paragraphs split on \n\n) |
| languages  | ?string | null    | Languages spoken                       |
| badge      | ?string | null    | Badge text shown above the name        |
| leadership | bool    | false   | Use leadership-styled badge colour     |
--}}
@props([
    'name',
    'photo' => null,
    'bio' => null,
    'languages' => null,
    'badge' => null,
    'leadership' => false,
])

@php
    $badgeClasses = $leadership
        ? 'bg-primary-50 border-primary-200 text-primary-700'
        : 'bg-base-50 border-base-200 text-base-600';
    $paragraphs = $bio ? preg_split('/\n\s*\n/', trim($bio)) : [];
@endphp

<article {{ $attributes->merge(['class' => 'flex flex-col border border-base-200 rounded-corner-lg overflow-hidden shadow-md bg-white']) }}>
    <x-avatar :name="$name" :photo="$photo" size="full" />
    <div class="p-5 flex flex-col flex-1">
        @if($badge)
            <div class="inline-block self-start {{ $badgeClasses }} border text-xs font-bold px-2 py-0.5 rounded mb-3">{{ $badge }}</div>
        @endif
        <h3 class="font-bold text-base-900 text-base">{{ $name }}</h3>
        @if($languages)
            <p class="text-xs text-base-500 mt-1.5">{{ $languages }}</p>
        @endif
        @foreach($paragraphs as $paragraph)
            <p class="text-sm text-base-600 mt-3 leading-relaxed text-pretty">{{ $paragraph }}</p>
        @endforeach
    </div>
</article>
