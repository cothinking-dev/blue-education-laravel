<x-layout title="TAFE & Other VET Qualifications"
          description="TAFE and VET qualifications in Australia. Practical, industry-focused training across trades, technical fields, and specialist roles.">

    {{-- §1 Hero --}}
    <x-hero title="TAFE & Other VET Qualifications"
            subtitle="Practical training across trades, technical fields, and specialist roles — with many qualifications aligning directly to Australia's skilled migration pathways."
            :image="asset('images/heroes/services-education-vet-tafe.webp')"
            alt="East Asian students in a vocational training workshop"
            variant="left"
            position="bottom"
            :breadcrumbs="true" />

    {{-- §2 What is VET/TAFE? --}}
    <x-content-split title="What is a VET Course?" :image="asset('images/services-education-vet-tafe/vet-training.webp')" alt="East Asian student in hands-on vocational training in a workshop">
        <p>Vocational Education and Training (VET) in Australia provides industry-focused qualifications that prepare students for direct entry into the workforce or further study. VET courses are delivered through government-owned TAFE Institutions and privately owned Registered Training Organisations (RTOs) across all Australian states and territories.</p>
        <p>VET qualifications emphasise practical, hands-on learning rather than purely theoretical study. Students develop job-ready skills in real or simulated workplace environments such as workshops, labs, clinics, kitchens, studios and industry placements.</p>
        <p>Because VET programmes are designed in consultation with employers and industry bodies, graduates gain nationally recognised qualifications that are highly valued by Australian and international employers.</p>
    </x-content-split>

    {{-- §3 Is VET Right for You? --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Is VET right for you?" :centered="false" />
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="You want to work in a trade or specialist role"
                        description="Not every career requires a degree. VET qualifications are built around the skills employers actually hire for — and most can be completed in under two years.">
                    <x-slot:icon>
                        <x-heroicon-o-wrench-screwdriver class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="You're changing careers"
                        description="VET is well-suited for career changers because it provides industry-recognised qualifications and practical skills for a new profession, without the time and cost of repeating years of traditional academic study."
                        :href="route('services.career')"
                        linkText="Career services">
                    <x-slot:icon>
                        <x-heroicon-o-arrows-right-left class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="You have migration goals"
                        description="Many career outcomes from completing a VET course do appear on Australia's Skilled Occupation List, so gaining the right VET qualification can be a direct and practical step towards a skilled migration pathway.">
                    <x-slot:icon>
                        <x-heroicon-o-globe-alt class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §4 What You Can Study --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="mb-8">
                <x-visual-break :images="[
                    ['src' => 'images/services-education-vet-tafe/tafe-campus.webp', 'alt' => 'Modern TAFE campus building'],
                ]" :inline="true" />
            </div>
            <x-section-heading title="What You Can Study" :centered="true" />
            <p class="text-base-600 mb-8 text-pretty text-center">Industries available through TAFE and registered training providers across Australia:</p>
            <div class="grid sm:grid-cols-2 gap-x-6 gap-y-0 max-w-2xl mx-auto">
                <x-icon-list class="mt-0">
                    <x-icon-list.item>Construction & Trades</x-icon-list.item>
                    <x-icon-list.item>Business & Administration</x-icon-list.item>
                    <x-icon-list.item>Information Technology</x-icon-list.item>
                    <x-icon-list.item>Hospitality & Tourism</x-icon-list.item>
                </x-icon-list>
                <x-icon-list class="mt-0">
                    <x-icon-list.item>Childcare & Community Services</x-icon-list.item>
                    <x-icon-list.item>Healthcare Support</x-icon-list.item>
                    <x-icon-list.item>Automotive</x-icon-list.item>
                    <x-icon-list.item>Creative Industries</x-icon-list.item>
                </x-icon-list>
            </div>
        </div>
    </section>

    {{-- Mid-page CTA --}}
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pb-14 text-center">
            <p class="text-base-600 mb-3">Not sure which industry or qualification is right for you?</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 bg-primary-800 text-white font-semibold px-5 py-2.5 rounded-corner text-sm hover:bg-primary-700 transition-colors">
                Talk to an adviser
                <x-heroicon-m-arrow-right class="w-4 h-4" />
            </a>
        </div>
    </div>

    {{-- §5 Why VET? --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why VET?" :centered="false" />
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Practical, job-focused training"
                        description="VET courses concentrate on real workplace skills instead of mainly theory. You learn how to do the tasks employers actually need, using industry-standard tools, equipment and procedures.">
                    <x-slot:icon><x-heroicon-o-wrench-screwdriver class="w-5 h-5" /></x-slot:icon>
                </x-card>

                <x-card title="Faster pathway into the workforce"
                        description="Many VET qualifications are shorter than traditional academic programmes, so you can enter the workforce or change careers more quickly, often within 6–24 months depending on the level of study."
                        :href="route('services.career')"
                        linkText="Career services">
                    <x-slot:icon><x-heroicon-o-rocket-launch class="w-5 h-5" /></x-slot:icon>
                </x-card>

                <x-card title="Flexible study options"
                        description="VET is usually offered with flexible timetables, including evening, weekend or blended/online options, making it easier to balance training with work, family or other commitments.">
                    <x-slot:icon><x-heroicon-o-clock class="w-5 h-5" /></x-slot:icon>
                </x-card>

                <x-card title="Industry-recognised qualifications"
                        description="VET qualifications are nationally recognised and developed in consultation with industry, meaning employers across Australia understand what your certificate or diploma represents in terms of skills.">
                    <x-slot:icon><x-heroicon-o-check-badge class="w-5 h-5" /></x-slot:icon>
                </x-card>

                <x-card title="Clear career and study pathways"
                        description="Many VET courses are linked to specific occupations and can also provide credit pathways into higher-level qualifications, so you can build your skills step by step as your goals grow."
                        :href="route('services.education.degrees')"
                        linkText="University degrees">
                    <x-slot:icon><x-heroicon-o-arrow-trending-up class="w-5 h-5" /></x-slot:icon>
                </x-card>

                <x-card title="Suitable for upskilling and career change"
                        description="Because VET focuses on targeted, hands-on learning, it is ideal for people who want to move into a new field or upgrade their skills without repeating years of general academic study."
                        :href="route('services.career')"
                        linkText="Career services">
                    <x-slot:icon><x-heroicon-o-arrows-right-left class="w-5 h-5" /></x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §7 Training Partners --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Training Partners" :centered="false" subtitle="Blue Education works directly with registered training organisations across Australia." />

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-8" data-animate="stagger">
                @php
                    $partners = [
                        ['src' => 'images/partners/AcademiesAustralasiaLogo.png', 'name' => 'Academies Australasia'],
                        ['src' => 'images/partners/ACAP.png', 'name' => 'ACAP'],
                        ['src' => 'images/partners/CIHELogo.png', 'name' => 'CIHE'],
                        ['src' => 'images/partners/sae-logo.jpg', 'name' => 'SAE'],
                        ['src' => 'images/partners/sheridan-logo.jpg', 'name' => 'Sheridan'],
                        ['src' => 'images/partners/StanleyCollegeLogo.png', 'name' => 'Stanley College'],
                        ['src' => 'images/partners/StottsCollegeLogo.png', 'name' => 'Stotts College'],
                        ['src' => 'images/partners/TheHotelSchoolLogo.png', 'name' => 'The Hotel School'],
                        ['src' => 'images/partners/AIWT.png', 'name' => 'AIWT'],
                        ['src' => 'images/partners/ATCWA.png', 'name' => 'ATCWA'],
                        ['src' => 'images/partners/GCA.jpg', 'name' => 'GCA'],
                        ['src' => 'images/partners/greenwich-college.jpg', 'name' => 'Greenwich College'],
                        ['src' => 'images/partners/Laurus.jpg', 'name' => 'Laurus'],
                        ['src' => 'images/partners/McIver.png', 'name' => 'McIver'],
                        ['src' => 'images/partners/nit-logo.jpg', 'name' => 'NIT'],
                        ['src' => 'images/partners/Pioneer.png', 'name' => 'Pioneer'],
                        ['src' => 'images/partners/sai-logo.jpg', 'name' => 'SAI'],
                        ['src' => 'images/partners/SIA.jpg', 'name' => 'SIA'],
                        ['src' => 'images/partners/WAIFS.png', 'name' => 'WAIFS'],
                    ];
                @endphp
                @foreach($partners as $partner)
                    <div class="bg-white border border-base-200 rounded-corner-lg p-6 flex items-center justify-center" style="min-height:90px;">
                        <img src="{{ asset($partner['src']) }}" alt="{{ $partner['name'] }} logo" class="h-10 w-auto object-contain" loading="lazy">
                    </div>
                @endforeach
            </div>

            <p class="text-base-500 text-sm">
                …and more nationally. <a href="{{ route('about.partners') }}" class="text-primary-800 font-medium hover:underline">View all partners &rarr;</a>
            </p>
        </div>
    </section>

    {{-- §8 CTA --}}
    <x-cta-banner title="Find the right VET qualification."
                  subtitle="Talk to one of our advisers. We'll match your career goal to the right programme."
                  primaryText="Explore VET Options"
                  :primaryHref="route('contact')"
                  secondaryText="View Admission Requirements"
                  :secondaryHref="route('admission-requirements')" />

</x-layout>
