<x-layout title="Study Tours"
          description="Educational and cultural immersion programs in Australia. One week to several months. Groups and individuals. No long-term enrolment required.">

    {{-- §1 Hero --}}
    <x-hero title="Short-term study tours in Australia."
            subtitle="Educational and cultural immersion programs. One week to several months. Groups and individuals. No long-term enrolment required."
            :image="asset('images/heroes/programs-study-tours.webp')"
            alt="East Asian women friends exploring a city together"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 Featured — Culinary Study Tour --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1 lg:max-w-[45%]">
                    <img src="{{ asset('images/programs-study-tours/culinary-tour.webp') }}" alt="East Asian students learning to cook in a hands-on culinary class" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
                <div class="flex-1">
                    <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Fremantle, Western Australia</span>
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty">Cook. Explore. Experience Western Australia.</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Hands-on culinary training and cultural immersion in Fremantle — one of Western Australia's most vibrant coastal cities. Australian cooking techniques, local food markets, and Perth's food culture firsthand.</p>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">For culinary students, food professionals, and anyone who wants to experience Australia through its food.</p>
                    <a href="{{ route('contact') }}" class="inline-flex bg-primary-800 text-white font-semibold px-6 py-3 rounded-corner hover:bg-primary-700 transition-colors">Enquire About the Culinary Tour</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Short-Term Immersion Programs --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Short-Term Immersion Programs" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Flexible Duration"
                        description="From one week to several months. Choose the length that fits your schedule and goals.">
                    <x-slot:icon>
                        <x-heroicon-o-calendar class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Academic & Cultural"
                        description="Every program combines educational content with cultural experiences — classroom learning meets real-world Australia.">
                    <x-slot:icon>
                        <x-heroicon-o-book-open class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="No Long-Term Commitment"
                        description="Explore Australian education without committing to a full degree or enrolment.">
                    <x-slot:icon>
                        <x-heroicon-o-check-circle class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Certificate of Participation"
                        description="All participants receive a certificate of participation — useful for CVs and scholarship documentation.">
                    <x-slot:icon>
                        <x-heroicon-o-trophy class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §4 Custom Group Tours --}}
    <section class="bg-primary-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Custom Group Tours</h2>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">We design bespoke study tours for schools, universities, and organisations. Tell us your group size, interests, and timeline — we build the program.</p>
                    <a href="{{ route('contact') }}" class="inline-flex bg-primary-800 text-white font-semibold px-6 py-3 rounded-corner hover:bg-primary-700 transition-colors">Enquire About a Custom Tour</a>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/programs-study-tours/custom-group-tours.webp') }}" alt="East Asian students on a guided walking tour through a city" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §5 Also Relevant --}}
    <x-next-steps variant="links" bg="bg-white" :links="[
        ['href' => route('programs.buddy-programme'), 'title' => 'Buddy Programme'],
        ['href' => route('contact'), 'title' => 'Enquire about a custom tour'],
    ]" />

    {{-- §6 CTA --}}
    <x-cta-banner title="Get tour details."
                  subtitle="Contact us for available dates, pricing, and custom program options."
                  primaryText="Enquire About Study Tours"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
