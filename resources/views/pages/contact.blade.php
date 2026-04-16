@php
    $org = config('seo.organization');
    $phone = $org['phone'];
    $phoneMobile = $org['phone_mobile'];
    $phoneNational = $org['phone_national'];
    $email = $org['email'];
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
    <x-hero title="Let's Talk About Your Future"
            subtitle="Whether you need education, migration, or career guidance — we respond to all enquiries within three business days."
            :image="asset('images/contact/consultation-room.webp')"
            alt="Professional consultation at Blue Education office"
            variant="left"
            height="440px"
            :breadcrumbs="true">
        <div class="flex flex-wrap gap-4 mt-8">
            <x-btn href="#enquiry-form" variant="white" size="lg">Send an Enquiry</x-btn>
            <x-btn href="tel:{{ preg_replace('/\s/', '', $phone) }}" variant="outline-white" size="lg">Call {{ $phone }}</x-btn>
        </div>
    </x-hero>

    {{-- §2 Trust Stats --}}
    <x-stat-block variant="primary" :stats="[
        ['value' => '25+', 'label' => 'Years Experience'],
        ['value' => '145+', 'label' => 'Countries Served'],
        ['value' => '3', 'label' => 'Business Day Response'],
        ['value' => '6', 'label' => 'Languages Spoken'],
    ]" />

    {{-- §3 Contact Methods --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Get in Touch" subtitle="Choose your preferred way to reach us." :centered="false" />
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <x-contact-card title="Phone">
                    <x-slot:icon>
                        <x-heroicon-o-phone class="w-6 h-6" />
                    </x-slot:icon>
                    <div class="space-y-2">
                        <div>
                            <a href="tel:{{ preg_replace('/\s/', '', $phone) }}" class="font-semibold text-primary-800 hover:underline">{{ $phone }}</a>
                            <p class="text-base-400 text-xs">Office</p>
                        </div>
                        <div>
                            <a href="tel:{{ preg_replace('/\s/', '', $phoneMobile) }}" class="font-semibold text-primary-800 hover:underline">{{ $phoneMobile }}</a>
                            <p class="text-base-400 text-xs">Mobile / WhatsApp</p>
                        </div>
                        <div>
                            <a href="tel:{{ preg_replace('/\s/', '', $phoneNational) }}" class="font-semibold text-primary-800 hover:underline">{{ $phoneNational }}</a>
                            <p class="text-base-400 text-xs">Australia-wide</p>
                        </div>
                    </div>
                </x-contact-card>

                <x-contact-card title="Email">
                    <x-slot:icon>
                        <x-heroicon-o-envelope class="w-6 h-6" />
                    </x-slot:icon>
                    <a href="mailto:{{ $email }}" class="font-semibold text-primary-800 hover:underline">{{ $email }}</a>
                    <p class="text-base-400 text-xs mt-1">We respond within three business days.</p>
                </x-contact-card>

                <x-contact-card title="Visit Our Office">
                    <x-slot:icon>
                        <x-heroicon-o-map-pin class="w-6 h-6" />
                    </x-slot:icon>
                    <address class="not-italic leading-relaxed">
                        33 Barrack St, GF Unit 2<br>
                        Perth, Western Australia 6000
                    </address>
                    <p class="text-base-400 text-xs mt-1">Mon–Fri, 9:00 AM – 5:00 PM</p>
                </x-contact-card>
            </div>
        </div>
    </section>

    {{-- §4 Contact Form + Map --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Send an Enquiry" id="enquiry-form" :centered="false" />
            <div class="flex flex-col lg:flex-row gap-10">
                {{-- Form — 60% --}}
                <div class="lg:w-3/5">
                    <x-contact-form />
                </div>

                {{-- Right sidebar — 40%: map + office info --}}
                <div class="lg:w-2/5 space-y-5">
                    <div class="rounded-corner-lg overflow-hidden" style="height:260px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.3!2d115.8596!3d-31.9535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad5c78bae8d%3A0x5e3b0e1c76e5e9a8!2s33%20Barrack%20St%2C%20Perth%20WA%206000!5e0!3m2!1sen!2sau!4v1709000000000"
                                width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                title="Blue Education office location"></iframe>
                    </div>
                    <div class="bg-white border border-base-200 rounded-corner-lg p-5 text-sm text-base-600">
                        <p class="font-semibold text-base-800 mb-2">Blue Education</p>
                        <address class="not-italic leading-relaxed">33 Barrack St, GF Unit 2<br>Perth WA 6000</address>
                        <div class="mt-3 pt-3 border-t border-base-100 space-y-1">
                            <p><a href="tel:{{ preg_replace('/\s/', '', $phone) }}" class="text-primary-800 hover:underline">{{ $phone }}</a></p>
                            <p><a href="mailto:{{ $email }}" class="text-primary-800 hover:underline">{{ $email }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 International Representatives --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Representatives" subtitle="For local support in your region, contact our international team." :centered="false" />
            <x-data-table :headers="['Region', 'Representative']"
                          :rows="[
                              ['Japan', 'Minami Sakamoto'],
                              ['New Zealand', 'Sherene'],
                              ['Zambia / Africa', 'Elijah'],
                              ['Indonesia', 'Hana'],
                              ['Malaysia', 'Elaine Ho & Monica Low'],
                          ]" />
            <p class="text-base-500 text-sm mt-4">Or email <a href="mailto:{{ $email }}" class="text-primary-800 hover:underline">{{ $email }}</a> for general enquiries.</p>
        </div>
    </section>

    {{-- §7 CTA --}}
    <x-cta-banner title="Ready to Get Started?"
                  subtitle="Book a free consultation — in person, by phone, or video. We speak English, Bahasa, Cantonese, Japanese, and more."
                  primary-text="Book a Consultation"
                  :primary-href="route('contact') . '#enquiry-form'"
                  secondary-text="Call Us Now"
                  secondary-href="tel:{{ preg_replace('/\s/', '', $phone) }}" />

</x-layout>
