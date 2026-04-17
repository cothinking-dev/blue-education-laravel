<x-layout title="Study Tours"
          description="Experience Australian education and culture firsthand — from one-week intensives to multi-month programmes, designed for groups or individuals."
          ogImage="{{ asset('images/heroes/programs-study-tours.webp') }}">

    {{-- §1 Hero --}}
    <x-hero title="Short-term study tours in Australia."
            subtitle="Experience Australian education and culture firsthand — from one-week intensives to multi-month programmes, designed for groups or individuals."
            :image="asset('images/heroes/programs-study-tours.webp')"
            alt="East Asian women friends exploring a city together"
            variant="centered"
            :breadcrumbs="true">
        <div class="mt-8 flex flex-col items-center gap-3">
            <x-btn href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to enquire about study tours') }}" variant="white" size="lg" target="_blank" rel="noopener noreferrer">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Enquire About Study Tours
            </x-btn>
            <a href="{{ route('contact') }}" class="text-white/80 hover:text-white text-sm font-medium transition-colors">Or send an enquiry &rarr;</a>
        </div>
    </x-hero>

    {{-- §2 Featured — Culinary Study Tour --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1 lg:max-w-[45%]">
                    <img src="{{ asset('images/programs-study-tours/culinary-tour.webp') }}" alt="East Asian culinary students learning knife skills from a professional chef in a commercial kitchen" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
                <div class="flex-1">
                    <x-badge variant="semantic" color="green" :uppercase="false" class="mb-3">Fremantle, Western Australia</x-badge>
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Cook. Explore. Experience Western Australia.</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Hands-on culinary training and cultural immersion in Fremantle — one of Western Australia's most vibrant coastal cities. Australian cooking techniques, local food markets, and Perth's food culture firsthand.</p>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">For culinary students, food professionals, and anyone who wants to experience Australia through its food.</p>
                    <x-btn href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to enquire about the Culinary Tour') }}" variant="primary" size="lg" target="_blank" rel="noopener noreferrer">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Enquire About the Culinary Tour
                    </x-btn>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Programme Overview --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What Are Study Tours?</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Organised educational and cultural immersion programmes in Western Australia — from one week to several months. Blue Education designs each tour around your group's goals, schedule, and interests.</p>
                    <p class="text-base-600 leading-relaxed text-pretty">Every programme combines structured learning with real cultural experiences. Participants leave with a certificate of participation and a genuine understanding of Australian education and life.</p>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="Programme Overview"
                                   :rows="[
                                       ['key' => 'Duration', 'value' => '1 week to several months'],
                                       ['key' => 'Group size', 'value' => 'Individuals, small groups, or institutional delegations'],
                                       ['key' => 'Location', 'value' => 'Perth and Western Australia'],
                                       ['key' => 'Includes', 'value' => 'Accommodation, transport, educational programme, supervision'],
                                       ['key' => 'Certificate', 'value' => 'Certificate of participation'],
                                       ['key' => 'Managed by', 'value' => 'Blue Education, Perth'],
                                   ]" />
                </div>
            </div>
        </div>
    </section>

    {{-- §4 Short-Term Immersion Programmes --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Short-Term Immersion Programmes" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-animate="stagger">
                <x-card title="Flexible Duration"
                        description="From one week to several months. Choose the length that fits your schedule and goals."
                        :image="asset('images/programs-study-tours/flexible-duration.webp')"
                        alt="Two East Asian friends checking flight details on a phone at the airport" />

                <x-card title="Academic & Cultural"
                        description="Every programme combines educational content with cultural experiences — classroom learning meets real-world Australia."
                        :image="asset('images/programs-study-tours/academic-cultural.webp')"
                        alt="Diverse group of students collaborating on a hands-on workshop activity" />

                <x-card title="No Long-Term Commitment"
                        description="Explore Australian education without committing to a full degree or enrolment."
                        :image="asset('images/programs-study-tours/no-commitment.webp')"
                        alt="East Asian student with a backpack smiling on a sunny campus path" />

                <x-card title="Certificate of Participation"
                        description="All participants receive a certificate of participation — useful for CVs and scholarship documentation."
                        :image="asset('images/programs-study-tours/certificate.webp')"
                        alt="Young East Asian woman in professional attire holding a certificate" />
            </div>
        </div>
    </section>

    {{-- §5 How It Works --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How It Works" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Tell Us What You Need', 'description' => 'Describe your group size, interests, and preferred dates. Individual enquiries are welcome — we build tours for groups of two to two hundred.'],
                ['title' => 'We Design the Programme', 'description' => 'Blue Education builds a tailored itinerary combining educational content, cultural experiences, and logistics — accommodation, transport, and supervision included.'],
                ['title' => 'Confirm and Prepare', 'description' => 'Once the programme is agreed, we handle pre-arrival coordination: visa guidance, orientation materials, and host institution briefings.'],
                ['title' => 'Arrive and Experience', 'description' => 'Your group arrives in Western Australia with everything organised. Blue Education provides on-the-ground support throughout, and every participant receives a certificate of completion.'],
            ]" />
        </div>
    </section>

    {{-- §6 Why Choose a Study Tour --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why Choose a Study Tour" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @php
                    $reasons = [
                        ['title' => 'Test before you commit', 'desc' => 'Experience Australian education firsthand, without a long-term enrolment or degree commitment.'],
                        ['title' => 'Tailored to your group', 'desc' => 'Every programme is built around your goals, timeline, and group size — not pulled from a catalogue.'],
                        ['title' => 'Cultural immersion, not just sightseeing', 'desc' => 'Participants learn through real experiences: local markets, classrooms, workplaces, and communities in Western Australia.'],
                        ['title' => 'Strengthen academic records', 'desc' => 'A certificate of participation supports CVs, scholarship submissions, and future university applications.'],
                        ['title' => 'Perth-based support', 'desc' => 'Blue Education coordinates logistics, accommodation, and supervision from our Perth office — one point of contact throughout.'],
                        ['title' => 'Flexible duration', 'desc' => 'From one week to several months. The programme fits your schedule, not the other way around.'],
                    ];
                @endphp
                @foreach($reasons as $i => $reason)
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-bold shrink-0">{{ $i + 1 }}</div>
                        <div>
                            <h3 class="font-bold text-base-900 mb-1 text-pretty">{{ $reason['title'] }}</h3>
                            <p class="text-base-600 text-sm leading-relaxed text-pretty">{{ $reason['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §7 Custom Group Tours --}}
    <section class="bg-primary-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Custom Group Tours</h2>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">We design bespoke study tours for schools, universities, and organisations. Tell us your group size, interests, and timeline — we build the programme.</p>
                    <x-btn href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to enquire about a custom group tour') }}" variant="primary" size="lg" target="_blank" rel="noopener noreferrer">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Enquire About a Custom Tour
                    </x-btn>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/programs-study-tours/custom-group-tours.webp') }}" alt="East Asian students examining nature outdoors during an educational field activity" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §8 Also Relevant --}}
    <x-next-steps variant="featured" bg="bg-white" :links="[
        ['href' => route('programs.buddy-programme'), 'title' => 'Buddy Programme', 'label' => 'Related Programme', 'description' => 'A 14-day school immersion in Western Australia — homestay families, Anglican Schools partnership, and structured field trips.'],
        ['href' => route('services.education.index'), 'title' => 'Education Services', 'label' => 'Full Enrolment', 'description' => 'Ready for a longer commitment? Explore degree, diploma, and English language pathways in Perth.'],
    ]" />

    {{-- §9 CTA --}}
    <x-cta-banner title="Get tour details."
                  subtitle="Contact us for available dates, pricing, and custom programme options."
                  primaryText="Enquire About Study Tours"
                  :primaryHref="route('contact')" />

</x-layout>
