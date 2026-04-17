<x-layout title="VET & TAFE"
          description="VET and TAFE qualifications open careers. Practical training across trades, technical fields, and specialist roles in Australia.">

    {{-- §1 Hero --}}
    <x-hero title="VET and TAFE qualifications open careers."
            subtitle="Practical training across trades, technical fields, and specialist roles — with many qualifications aligning directly to Australia's skilled migration pathways."
            :image="asset('images/heroes/services-education-vet-tafe.webp')"
            alt="East Asian students in a vocational training workshop"
            variant="left"
            position="bottom"
            :breadcrumbs="true" />

    {{-- §2 What is VET/TAFE? --}}
    <x-content-split title="What is VET/TAFE?" :image="asset('images/services-education-vet-tafe/vet-training.webp')" alt="East Asian student in hands-on vocational training in a workshop">
        <p>Vocational Education and Training (VET) is delivered through Technical and Further Education (TAFE) institutions and Registered Training Organisations (RTOs) across Australia.</p>
        <p>VET qualifications emphasise practical, hands-on skills. You learn in workshops, labs, and real workplace settings. Graduates enter the workforce job-ready, with qualifications employers trust.</p>
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
                        description="VET is well-suited to career changers who need industry-recognised credentials in a new field without starting from scratch academically."
                        :href="route('services.career')"
                        linkText="Career services">
                    <x-slot:icon>
                        <x-heroicon-o-arrows-right-left class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="You have migration goals"
                        description="Many VET occupations sit on Australia's skilled occupation lists. The right qualification can be the most direct route to a skilled migration pathway.">
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
            <x-section-heading title="What You Can Study" :centered="false" />
            <p class="text-base-600 mb-8 text-pretty">Industries available through TAFE and registered training providers across Australia:</p>
            <div class="flex flex-wrap gap-3">
                @foreach(['Construction & Trades', 'Business & Administration', 'Information Technology', 'Hospitality & Tourism', 'Childcare & Community Services', 'Healthcare Support', 'Automotive', 'Creative Industries'] as $industry)
                    <x-badge size="lg" :uppercase="false">{{ $industry }}</x-badge>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §5 Qualification Levels --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Qualification Levels" :centered="false" />
            <x-data-table :headers="['Qualification', 'Duration', 'Career Outcome', 'Min. IELTS']"
                          :rows="[
                              ['Certificate I–II', '6–12 months', 'Entry-level roles', '5.5'],
                              ['Certificate III–IV', '6–18 months', 'Skilled trades, technical roles', '5.5'],
                              ['Diploma', '1–2 years', 'Supervisory, specialist roles', '5.5–6.0'],
                              ['Advanced Diploma', '1.5–2 years', 'Management, university pathway', '5.5–6.0'],
                          ]" />
            <p class="text-sm text-base-500 mt-4">English requirements are a general guide. Individual institutions may set higher thresholds.</p>
        </div>
    </section>

    {{-- §6 Why VET? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why VET?" :centered="false" />
            <div class="grid md:grid-cols-3 gap-8" data-animate="stagger">
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Industry-aligned training</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Training happens in workshops, labs, and workplaces. What you learn maps directly to what employers expect on day one.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Credit towards a degree</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Diploma and Advanced Diploma holders can apply for credit recognition at Australian universities — reducing the time required to complete a bachelor degree.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Skilled migration pathways</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Many VET occupations appear on Australia's skilled occupation lists. Eligible graduates may qualify for the Graduate Work Stream visa (18 months).</p>
                    <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 font-medium text-sm hover:underline mt-2 inline-block">Learn about graduate work visas &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 Training Partners --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Training Partners" :centered="false" subtitle="Blue Education works directly with TAFEs and registered training organisations across Australia." />

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 mb-8" data-animate="stagger">
                @php
                    $partners = [
                        ['src' => 'images/partners/tafe-qld-logo.png', 'name' => 'TAFE Queensland'],
                        ['src' => 'images/partners/tafe-nsw-logo.svg', 'name' => 'TAFE NSW'],
                        ['src' => 'images/partners/tafe-sa-logo.png', 'name' => 'TAFE SA'],
                        ['src' => 'images/partners/holmesglen-logo.svg', 'name' => 'Holmesglen Institute'],
                        ['src' => 'images/partners/boxhill-logo.svg', 'name' => 'Box Hill Institute'],
                        ['src' => 'images/partners/melbourne-poly-logo.png', 'name' => 'Melbourne Polytechnic'],
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
                  subtitle="Book a free education consultation. We'll match your career goals to the right programme and confirm whether it opens a pathway to skilled migration."
                  primaryText="Explore VET Options"
                  :primaryHref="route('contact')" />
                  secondaryText="View Admission Requirements"
                  :secondaryHref="route('admission-requirements')" />

</x-layout>
