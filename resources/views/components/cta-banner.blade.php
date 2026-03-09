@props([
    'title' => 'Ready to Start Your Australian Journey?',
    'subtitle' => 'Book a free consultation with our experienced team. We\'ll help you find the right path.',
    'primaryText' => 'Book a Consultation',
    'primaryHref' => '#',
    'secondaryText' => null,
    'secondaryHref' => '#',
    'phone' => '+61 8 6381 0030',
])

<section {{ $attributes->merge(['class' => 'bg-primary-800']) }}>
    <div class="max-w-4xl mx-auto px-8 py-16 text-center">
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4 text-pretty">{{ $title }}</h2>
        <p class="text-lg text-primary-200 mb-8 text-pretty">{{ $subtitle }}</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ $primaryHref }}" class="inline-flex bg-white text-primary-800 font-semibold px-8 py-3 rounded-corner hover:bg-primary-50 transition-colors">{{ $primaryText }}</a>
            @if($secondaryText)
                <a href="{{ $secondaryHref }}" class="inline-flex text-white font-medium hover:text-primary-200 transition-colors">{{ $secondaryText }}</a>
            @endif
        </div>
        @if($phone)
            <p class="mt-6 text-primary-300 text-sm">Or call us: <a href="tel:{{ preg_replace('/[^+0-9]/', '', $phone) }}" class="text-white hover:text-primary-200 font-medium">{{ $phone }}</a></p>
        @endif
    </div>
</section>
