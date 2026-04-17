@props([
    'title' => 'Ready to Start Your Australian Journey?',
    'subtitle' => 'Book a free consultation with our experienced team. We\'ll help you find the right path.',
    'primaryText' => 'Book a Consultation',
    'primaryHref' => '#',
    'secondaryText' => null,
    'secondaryHref' => null,
    'message' => 'Hi, I\'d like to book a consultation',
])

@php
    $waUrl = 'https://wa.me/' . config('seo.organization.whatsapp') . '?text=' . rawurlencode($message);
    $contactHref = $secondaryHref ?? $primaryHref;
@endphp

<section {{ $attributes->merge(['class' => 'bg-primary-800 relative overflow-hidden']) }}>
    {{-- Topographic texture overlay --}}
    <div class="absolute inset-0 opacity-[0.07]" aria-hidden="true">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <defs>
                <pattern id="cta-topo" x="0" y="0" width="200" height="200" patternUnits="userSpaceOnUse">
                    <path d="M100 0c0 55.23-44.77 100-100 100" fill="none" stroke="white" stroke-width="1"/>
                    <path d="M200 0c0 55.23-44.77 100-100 100" fill="none" stroke="white" stroke-width="1"/>
                    <path d="M100 200c0-55.23-44.77-100-100-100" fill="none" stroke="white" stroke-width="1"/>
                    <path d="M200 200c0-55.23-44.77-100-100-100" fill="none" stroke="white" stroke-width="1"/>
                    <circle cx="100" cy="100" r="60" fill="none" stroke="white" stroke-width="0.75"/>
                    <circle cx="100" cy="100" r="30" fill="none" stroke="white" stroke-width="0.5"/>
                    <path d="M0 100c55.23 0 100-44.77 100-100" fill="none" stroke="white" stroke-width="0.75"/>
                    <path d="M200 100c-55.23 0-100-44.77-100-100" fill="none" stroke="white" stroke-width="0.75"/>
                    <path d="M0 100c55.23 0 100 44.77 100 100" fill="none" stroke="white" stroke-width="0.75"/>
                    <path d="M200 100c-55.23 0-100 44.77-100 100" fill="none" stroke="white" stroke-width="0.75"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#cta-topo)"/>
        </svg>
    </div>
    {{-- Gradient overlay for depth --}}
    <div class="absolute inset-0 bg-gradient-to-br from-primary-900/40 via-transparent to-primary-700/30" aria-hidden="true"></div>
    <div class="relative max-w-7xl mx-auto px-8 lg:px-16 py-16 lg:py-20">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 lg:gap-16">
            {{-- Copy --}}
            <div class="lg:max-w-2xl text-center lg:text-left">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3 text-pretty">{{ $title }}</h2>
                <p class="text-lg text-primary-200 text-pretty">{{ $subtitle }}</p>
            </div>
            {{-- Action --}}
            <div class="flex flex-col items-center lg:items-start gap-3 shrink-0">
                <x-btn href="{{ $waUrl }}" variant="success" size="lg" target="_blank" rel="noopener noreferrer">
                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    {{ $primaryText }}
                </x-btn>
                <a href="{{ $contactHref }}" class="inline-flex text-white font-medium hover:text-primary-200 transition-colors text-sm">{{ $secondaryText ?? 'Book a Consultation' }} &rarr;</a>
            </div>
        </div>
    </div>
</section>
