@props([
    'title' => 'Ready to Start Your Australian Journey?',
    'subtitle' => 'Book a free consultation with our experienced team. We\'ll help you find the right path.',
    'primaryText' => 'Book a Consultation',
    'primaryHref' => '#',
    'secondaryText' => null,
    'secondaryHref' => '#',
    'phone' => '+61 8 6381 0030',
])

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
            <div class="flex flex-col items-center lg:items-start gap-4 shrink-0">
                <x-btn href="{{ $primaryHref }}" variant="success" size="lg">{{ $primaryText }}</x-btn>
                @if($secondaryText)
                    <a href="{{ $secondaryHref }}" class="inline-flex text-white font-medium hover:text-primary-200 transition-colors text-sm">{{ $secondaryText }}</a>
                @endif
                @if($phone)
                    <p class="text-primary-300 text-sm">Or call: <a href="tel:{{ preg_replace('/[^+0-9]/', '', $phone) }}" class="text-white hover:text-primary-200 font-medium">{{ $phone }}</a></p>
                @endif
            </div>
        </div>
    </div>
</section>
