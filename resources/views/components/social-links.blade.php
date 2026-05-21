@props([
    'size' => 'md',          // 'sm' (w-4 h-4) or 'md' (w-5 h-5)
    'tone' => 'muted',       // 'muted' (footer) or 'accent' (contact card)
])

@php
    $social = config('seo.social', []);
    $links = array_filter([
        'Facebook' => $social['facebook'] ?? null,
        'Instagram' => $social['instagram'] ?? null,
        'LinkedIn' => $social['linkedin'] ?? null,
    ]);

    $iconClasses = $size === 'sm' ? 'w-4 h-4' : 'w-5 h-5';
    $toneClasses = $tone === 'accent'
        ? 'text-primary-700 hover:text-primary-900'
        : 'text-base-500 hover:text-primary-700';
@endphp

@if (! empty($links))
    <ul {{ $attributes->merge(['class' => 'flex items-center gap-4']) }}>
        @foreach ($links as $label => $url)
            <li>
                <a href="{{ $url }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Blue Education on {{ $label }}"
                   class="inline-flex transition-colors {{ $toneClasses }}">
                    @switch($label)
                        @case('Facebook')
                            <svg class="{{ $iconClasses }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M22 12.06C22 6.51 17.52 2 12 2S2 6.51 2 12.06C2 17.07 5.66 21.22 10.44 22V14.95H7.9v-2.89h2.54V9.86c0-2.51 1.49-3.9 3.77-3.9 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.89h-2.33V22C18.34 21.22 22 17.07 22 12.06z"/>
                            </svg>
                            @break
                        @case('Instagram')
                            <svg class="{{ $iconClasses }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41-.56-.22-.96-.48-1.38-.9-.42-.42-.68-.82-.9-1.38-.16-.42-.36-1.06-.41-2.23-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41 1.27-.06 1.65-.07 4.85-.07M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63c-.79.31-1.46.72-2.13 1.38C1.34 2.68.93 3.35.62 4.14.32 4.9.12 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.72 1.46 1.38 2.13.67.67 1.34 1.08 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56.79-.31 1.46-.72 2.13-1.38.67-.67 1.08-1.34 1.38-2.13.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91-.31-.79-.72-1.46-1.38-2.13C21.32 1.34 20.65.93 19.86.63 19.1.33 18.22.13 16.95.07 15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.41-11.85a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/>
                            </svg>
                            @break
                        @case('LinkedIn')
                            <svg class="{{ $iconClasses }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M19 0h-14C2.24 0 0 2.24 0 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5V5c0-2.76-2.24-5-5-5zM8 19H5V8h3v11zM6.5 6.73a1.74 1.74 0 1 1 0-3.49 1.74 1.74 0 0 1 0 3.49zM20 19h-3v-5.6c0-1.34-.03-3.06-1.87-3.06-1.87 0-2.16 1.46-2.16 2.96V19h-3V8h2.88v1.5h.04c.4-.76 1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.6V19z"/>
                            </svg>
                            @break
                    @endswitch
                    <span class="sr-only">{{ $label }}</span>
                </a>
            </li>
        @endforeach
    </ul>
@endif
