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
            <x-btn href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to get in touch') }}" variant="white" size="lg" target="_blank" rel="noopener noreferrer">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Chat on WhatsApp
            </x-btn>
            <x-btn href="#enquiry-form" variant="outline-white" size="lg">Send an Enquiry</x-btn>
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
                            <a href="https://wa.me/{{ config('seo.organization.whatsapp') }}" target="_blank" rel="noopener noreferrer" class="font-semibold text-primary-800 hover:underline">{{ $phoneMobile }}</a>
                            <p class="text-base-400 text-xs">WhatsApp</p>
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
                  :primary-href="route('contact') . '#enquiry-form'" />

</x-layout>
