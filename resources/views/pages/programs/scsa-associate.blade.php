<x-layout title="SCSA Associate"
          description="Blue Education is appointed by SCSA — the WA Government's curriculum authority — to help international schools implement the Western Australian curriculum.">

    {{-- §1 Hero --}}
    <x-hero title="Australian curriculum. Delivered internationally. Officially recognised."
            subtitle="Blue Education is appointed by SCSA — the WA Government's curriculum authority — to help international schools implement and deliver the Western Australian curriculum, including the WACE programme."
            :image="asset('images/heroes/programs-scsa-associate.webp')"
            alt="Modern school building exterior"
            badge="Official SCSA Partnership · WA Government"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 What Is SCSA --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What Is SCSA?" :centered="false" />
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <x-facts-table :rows="[
                        ['key' => 'Full name', 'value' => 'School Curriculum and Standards Authority'],
                        ['key' => 'Jurisdiction', 'value' => 'Western Australia'],
                        ['key' => 'Scope', 'value' => 'Kindergarten to Year 12'],
                        ['key' => 'Key qualification', 'value' => 'Western Australian Certificate of Education (WACE)'],
                        ['key' => 'Oversight', 'value' => 'Curriculum, assessment, standards, reporting, moderation'],
                        ['key' => 'Recognition', 'value' => 'Internationally recognised; accepted for direct entry to Australian universities'],
                    ]" />
                </div>
                <div class="lg:w-[35%] space-y-4">
                    <div class="border-2 border-purple-200 rounded-corner-lg p-5 text-center">
                        <p class="font-bold text-gray-900 mb-1">Official SCSA Associate</p>
                        <p class="text-gray-600 text-sm text-pretty">Blue Education is an appointed SCSA Associate for international curriculum delivery.</p>
                    </div>
                    <div class="border border-gray-200 rounded-corner-lg p-5 text-center">
                        <p class="font-bold text-gray-900 mb-1">WA Department of Education</p>
                        <p class="text-gray-600 text-sm text-pretty">Western Australian Department of Education</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 For International Schools --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="For International Schools" :centered="false" />
            <div class="space-y-6">
                @php
                    $schoolSteps = [
                        ['title' => 'Deliver the WA Curriculum', 'desc' => 'Australian-standard education at your school — without relocating to Australia.'],
                        ['title' => 'Application & Onboarding Support', 'desc' => 'We guide you through the SCSA framework, formal application, and classroom launch from start to finish.'],
                        ['title' => 'Quality Assurance', 'desc' => 'Alignment with Australian education standards. SCSA moderation and compliance requirements handled.'],
                        ['title' => 'Create Student Pathways', 'desc' => 'Give your students a recognised Australian qualification that opens doors to Australian universities.'],
                        ['title' => 'Ongoing Guidance', 'desc' => 'Continued liaison with SCSA, quality assurance support, and curriculum implementation guidance after launch.'],
                    ];
                @endphp
                @foreach($schoolSteps as $i => $step)
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-bold shrink-0 mt-0.5">{{ $i + 1 }}</div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1 text-pretty">{{ $step['title'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed text-pretty">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/programs-scsa-associate/classroom.webp') }}" alt="Modern international school classroom" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/programs-scsa-associate/curriculum-materials.webp') }}" alt="Curriculum materials and education resources" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §4 How It Works --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How It Works" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Understand', 'description' => 'We explain the SCSA framework, requirements, and what accreditation involves.'],
                ['title' => 'Apply', 'description' => 'We support your formal application to deliver the WA curriculum.'],
                ['title' => 'Onboard', 'description' => 'Curriculum delivery setup, teacher preparation, and compliance.'],
                ['title' => 'Launch', 'description' => 'Your school begins delivering WACE-aligned education.'],
                ['title' => 'Maintain', 'description' => 'Continued guidance, SCSA liaison, and quality assurance.'],
            ]" />
        </div>
    </section>

    {{-- §5 For Students --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="For Students" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <h3 class="font-bold text-gray-900 mb-2 text-pretty">Complete WACE Overseas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">Earn the Western Australian Certificate of Education from your home country — the same qualification Australian Year 12 students earn.</p>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <h3 class="font-bold text-gray-900 mb-2 text-pretty">University-Ready</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">WACE is accepted for direct entry to Western Australian universities. Students who complete the programme overseas are assessed on the same criteria as domestic Year 12 graduates.</p>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <h3 class="font-bold text-gray-900 mb-2 text-pretty">Seamless Transition</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">If you later choose to study in Australia, your WACE preparation means you're already aligned with Australian academic standards and teaching methods.</p>
                </div>
                <div class="border-2 border-amber-200 rounded-corner-lg p-6 bg-amber-50/30">
                    <span class="inline-block bg-amber-100 text-amber-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Premier's Bursary</span>
                    <h3 class="font-bold text-gray-900 mb-2 text-pretty">Premier's WACE Bursary</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-3 text-pretty">Students who complete the WACE programme overseas and enrol in a participating WA university may be eligible for the Premier's WACE Bursary — <strong>AUD $20,000</strong>, awarded to 50 applicants per year.</p>
                    <p class="text-gray-500 text-xs text-pretty">Participating universities: UWA, Curtin, Murdoch, ECU, and Notre Dame.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §6 Who This Is For --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Who This Is For" :centered="false" />
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="International Schools"
                        description="Schools wanting to offer an Australian-standard curriculum. Any country.">
                    <x-slot:icon>
                        <x-heroicon-o-building-office class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Education Providers"
                        description="Organisations exploring Australian curriculum partnerships for their student base.">
                    <x-slot:icon>
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Students"
                        description="Students wanting to earn WACE from their home country for Australian university entry.">
                    <x-slot:icon>
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §7 Also Relevant --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('services.education.degrees') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">University degrees in WA &rarr;</a>
                <a href="{{ route('about.partners') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">Our partner institutions &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §8 CTA --}}
    <x-cta-banner title="Explore SCSA accreditation."
                  subtitle="Contact us to discuss requirements, process, and timeline for delivering the WA curriculum at your school — or earning WACE as a student."
                  primaryText="Learn More About SCSA Partnership"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
