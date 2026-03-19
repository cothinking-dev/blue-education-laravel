@php
    $org = config('seo.organization');
    $localBusinessSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => $org['name'],
        'url' => $org['url'],
        'logo' => url($org['logo']),
        'image' => url('/images/contact/office-reception.webp'),
        'telephone' => $org['phone'],
        'email' => $org['email'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $org['address']['street'],
            'addressLocality' => $org['address']['city'],
            'addressRegion' => $org['address']['state'],
            'postalCode' => $org['address']['postal_code'],
            'addressCountry' => $org['address']['country'],
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => -31.9535,
            'longitude' => 115.8596,
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '17:00',
            ],
        ],
        'priceRange' => '$$',
    ];
@endphp

<x-layout title="Contact Blue Education"
          description="Get in touch with Blue Education. Education, migration, and career advice from Perth, Western Australia."
          :json-ld="$localBusinessSchema">

    {{-- §1 Hero --}}
    <x-hero title="Contact Blue Education"
            subtitle="We respond to all enquiries within one business day."
            variant="light"
            :breadcrumbs="true" />

    {{-- §2 Contact Methods --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <x-contact-card title="Phone">
                    <x-slot:icon>
                        <x-heroicon-o-phone class="w-6 h-6" />
                    </x-slot:icon>
                    <div class="space-y-2">
                        <div>
                            <a href="tel:+61863810030" class="font-semibold text-primary-800 hover:underline">+61 8 6381 0030</a>
                            <p class="text-base-400 text-xs">Office</p>
                        </div>
                        <div>
                            <a href="tel:+61411708899" class="font-semibold text-primary-800 hover:underline">+61 411 708 899</a>
                            <p class="text-base-400 text-xs">Mobile / WhatsApp</p>
                        </div>
                        <div>
                            <a href="tel:1300040696" class="font-semibold text-primary-800 hover:underline">1300 040 696</a>
                            <p class="text-base-400 text-xs">Australia-wide</p>
                        </div>
                    </div>
                </x-contact-card>

                <x-contact-card title="Email">
                    <x-slot:icon>
                        <x-heroicon-o-envelope class="w-6 h-6" />
                    </x-slot:icon>
                    <a href="mailto:info@blueeducation.com.au" class="font-semibold text-primary-800 hover:underline">info@blueeducation.com.au</a>
                    <p class="text-base-400 text-xs mt-1">We respond within one business day.</p>
                </x-contact-card>

                <x-contact-card title="Office">
                    <x-slot:icon>
                        <x-heroicon-o-map-pin class="w-6 h-6" />
                    </x-slot:icon>
                    <address class="not-italic leading-relaxed">
                        33 Barrack St, GF Unit 2<br>
                        Perth, Western Australia 6000
                    </address>
                </x-contact-card>
            </div>
        </div>
    </section>

    {{-- §3 Contact Form --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 id="enquiry-form" class="text-3xl font-bold text-base-900 mb-10 text-pretty" data-animate="fade-up">Send an Enquiry</h2>
            <div class="flex flex-col lg:flex-row gap-10">
                {{-- Form — 60% --}}
                <div class="lg:w-3/5">
                    <x-contact-form />
                </div>

                {{-- Right sidebar — 40%: map + office photo --}}
                <div class="lg:w-2/5 space-y-5">
                    <div class="rounded-corner-lg overflow-hidden" style="height:260px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.3!2d115.8596!3d-31.9535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad5c78bae8d%3A0x5e3b0e1c76e5e9a8!2s33%20Barrack%20St%2C%20Perth%20WA%206000!5e0!3m2!1sen!2sau!4v1709000000000"
                                width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                title="Blue Education office location"></iframe>
                    </div>
                    <div class="bg-white border border-base-200 rounded-corner-lg p-4 text-sm text-base-600">
                        <p class="font-semibold text-base-800 mb-1">Blue Education</p>
                        <address class="not-italic leading-relaxed">33 Barrack St, GF Unit 2<br>Perth WA 6000</address>
                        <p class="mt-2"><a href="tel:+61863810030" class="text-primary-800 hover:underline">+61 8 6381 0030</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual context --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid sm:grid-cols-3 gap-6">
                <img src="{{ asset('images/contact/office-reception.webp') }}" alt="Blue Education office reception area" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/contact/consultation-room.webp') }}" alt="Professional consultation room" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/contact/perth-cbd.webp') }}" alt="Perth CBD street view" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §4 Book a Consultation --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="rounded-corner-lg border-2 border-primary-100 bg-primary-50 p-8 lg:p-12 max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Book a Consultation</h2>
                <ul class="text-base-600 mb-8 space-y-2 text-left inline-block">
                    <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">✓</span> Education, migration, or career guidance</li>
                    <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">✓</span> English, Bahasa, Cantonese, Japanese, and more</li>
                    <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">✓</span> In-person (Perth), phone, or video</li>
                </ul>
                <div>
                    <x-btn href="{{ route('contact') }}#enquiry-form" variant="primary" size="lg">Book a Consultation</x-btn>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 International Representatives --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">International Representatives</h2>
            <p class="text-base-600 mb-8">For local support in your region, contact our international team or email <a href="mailto:info@blueeducation.com.au" class="text-primary-800 hover:underline">info@blueeducation.com.au</a>.</p>
            <x-data-table :headers="['Region', 'Representative']"
                          :rows="[
                              ['Japan', 'Minami Sakamoto'],
                              ['New Zealand', 'Sherene'],
                              ['Zambia / Africa', 'Elijah'],
                              ['Indonesia', 'Hana'],
                              ['Malaysia', 'Elaine Ho & Monica Low'],
                          ]" />
        </div>
    </section>

</x-layout>
