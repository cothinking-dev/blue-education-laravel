<x-layout title="SCSA Associate"
          description="Blue Education is appointed by SCSA — the WA Government's curriculum authority — to help international schools implement the Western Australian curriculum.">

    {{-- §1 Hero --}}
    <x-hero title="Offer an Australian-standard education at your school — backed by WA Government accreditation."
            subtitle="Blue Education is appointed by SCSA — the WA Government's curriculum authority — to help international schools implement and deliver the Western Australian curriculum, including the WACE programme."
            :image="asset('images/heroes/programs-scsa-associate.webp')"
            alt="Modern Australian school building exterior"
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
                    {{-- Credential cards with subtle WA outline accent --}}
                    <div class="relative border-2 border-purple-200 rounded-corner-lg p-5 flex flex-col items-center text-center overflow-hidden">
                        <svg class="absolute -right-4 -bottom-4 w-28 h-28 opacity-[0.06]" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M50 5 L55 20 L70 10 L65 28 L85 25 L72 38 L90 45 L72 50 L85 65 L68 58 L70 78 L55 65 L50 85 L45 65 L30 78 L32 58 L15 65 L28 50 L10 45 L28 38 L15 25 L35 28 L30 10 L45 20 Z" class="fill-purple-900" />
                        </svg>
                        <img src="{{ asset('images/credentials/scsa-logo.png') }}" alt="School Curriculum and Standards Authority — Government of Western Australia" class="relative h-16 w-auto object-contain mb-3" loading="lazy">
                        <p class="relative font-bold text-base-900 mb-1">Official SCSA Associate</p>
                        <p class="relative text-base-600 text-sm text-pretty">Blue Education is an appointed SCSA Associate for international curriculum delivery.</p>
                    </div>
                    <div class="border border-base-200 rounded-corner-lg p-5 flex flex-col items-center text-center">
                        <img src="{{ asset('images/credentials/wa-dept-education-logo.svg') }}" alt="Western Australian Department of Education" class="h-14 w-auto object-contain mb-3" loading="lazy">
                        <p class="font-bold text-base-900 mb-1">WA Department of Education</p>
                        <p class="text-base-600 text-sm text-pretty">Western Australian Department of Education</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 For International Schools — SVG icon cards --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="For International Schools" :centered="false" />
            {{-- Top row: 2 wider cards --}}
            <div class="grid sm:grid-cols-2 gap-6 mb-6" data-animate="stagger">
                {{-- Deliver WA Curriculum — globe with graduation cap --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14" cy="15" r="11" class="stroke-primary-400" stroke-width="1.5" fill="none" />
                            <ellipse cx="14" cy="15" rx="5" ry="11" class="stroke-primary-300" stroke-width="1" fill="none" />
                            <line x1="3" y1="15" x2="25" y2="15" class="stroke-primary-300" stroke-width="1" />
                            <line x1="5" y1="9" x2="23" y2="9" class="stroke-primary-200" stroke-width="0.8" />
                            <line x1="5" y1="21" x2="23" y2="21" class="stroke-primary-200" stroke-width="0.8" />
                            <polygon points="14,1 22,5 14,9 6,5" class="fill-primary-500" />
                            <line x1="22" y1="5" x2="22" y2="11" class="stroke-primary-500" stroke-width="1.2" />
                            <circle cx="22" cy="11.5" r="1" class="fill-primary-400" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Deliver the WA Curriculum</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Australian-standard education at your school — without relocating to Australia.</p>
                </div>

                {{-- Application & Onboarding — clipboard with checkmarks --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="5" y="4" width="18" height="22" rx="2" class="fill-primary-100 stroke-primary-400" stroke-width="1.5" />
                            <rect x="10" y="1" width="8" height="5" rx="1.5" class="fill-primary-500" />
                            <path d="M9 12 L11 14 L15 10" class="stroke-primary-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <line x1="17" y1="12" x2="21" y2="12" class="stroke-primary-300" stroke-width="1.2" />
                            <path d="M9 18 L11 20 L15 16" class="stroke-primary-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <line x1="17" y1="18" x2="21" y2="18" class="stroke-primary-300" stroke-width="1.2" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Application & Onboarding Support</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">We guide you through the SCSA framework, formal application, and classroom launch from start to finish.</p>
                </div>
            </div>

            {{-- Bottom row: 3 cards --}}
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                {{-- Quality Assurance — shield with star --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2 L24 6 L24 14 C24 20, 20 24, 14 26 C8 24, 4 20, 4 14 L4 6 Z" class="fill-primary-100 stroke-primary-400" stroke-width="1.5" />
                            <polygon points="14,8 15.8,12 20,12.5 17,15.3 17.8,19.5 14,17.3 10.2,19.5 11,15.3 8,12.5 12.2,12" class="fill-primary-500" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Quality Assurance</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Alignment with Australian education standards. SCSA moderation and compliance requirements handled.</p>
                </div>

                {{-- Create Student Pathways — road with arrow --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 24 C8 18, 10 14, 14 10 C18 6, 20 4, 22 3" class="stroke-primary-400" stroke-width="3" stroke-linecap="round" fill="none" />
                            <path d="M6 24 C8 18, 10 14, 14 10 C18 6, 20 4, 22 3" class="stroke-primary-200" stroke-width="1" stroke-linecap="round" stroke-dasharray="3 3" fill="none" />
                            <polygon points="22,3 24,8 19,6" class="fill-primary-600" />
                            <circle cx="6" cy="24" r="2.5" class="fill-primary-300" />
                            <circle cx="14" cy="10" r="1.5" class="fill-primary-400" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Create Student Pathways</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Give your students a recognised Australian qualification that opens doors to Australian universities.</p>
                </div>

                {{-- Ongoing Guidance — handshake --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 14 L7 10 L12 14" class="stroke-primary-400" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <path d="M26 14 L21 10 L16 14" class="stroke-primary-600" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <path d="M12 14 C12 14, 13 16, 14 16 C15 16, 16 15, 17 15 C18 15, 19 16, 20 16 L21 15" class="stroke-primary-500" stroke-width="1.8" stroke-linecap="round" fill="none" />
                            <path d="M7 10 L7 18" class="stroke-primary-400" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M21 10 L21 18" class="stroke-primary-600" stroke-width="1.5" stroke-linecap="round" />
                            <circle cx="14" cy="6" r="3" class="stroke-primary-300" stroke-width="1" fill="none" />
                            <path d="M12 5 L14 7 L16 5" class="stroke-primary-300" stroke-width="0.8" fill="none" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Ongoing Guidance</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Continued liaison with SCSA, quality assurance support, and curriculum implementation guidance after launch.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/programs-scsa-associate/classroom.webp', 'alt' => 'East Asian students in a modern international school classroom'],
        ['src' => 'images/programs-scsa-associate/curriculum-materials.webp', 'alt' => 'Western Australian curriculum materials and education resources'],
    ]" padding="pt-14 pb-0" />

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
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="For Students" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                {{-- Complete WACE Overseas --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-globe-alt class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Complete WACE Overseas</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Earn the Western Australian Certificate of Education from your home country — the same qualification Australian Year 12 students earn.</p>
                </div>
                {{-- University-Ready --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">University-Ready</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">WACE is accepted for direct entry to Western Australian universities. Students who complete the programme overseas are assessed on the same criteria as domestic Year 12 graduates.</p>
                </div>
                {{-- Seamless Transition --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-arrows-right-left class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Seamless Transition</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">If you later choose to study in Australia, your WACE preparation means you're already aligned with Australian academic standards and teaching methods.</p>
                </div>
            </div>

            {{-- Premier's Bursary — standout highlight --}}
            <div class="mt-8 relative overflow-hidden border-2 border-amber-300 rounded-corner-lg bg-gradient-to-r from-amber-50 to-white p-8 lg:flex lg:items-center lg:gap-10" data-animate="fade-up">
                {{-- Decorative SVG illustration --}}
                <div class="hidden lg:flex items-center justify-center shrink-0 w-28 h-28" aria-hidden="true">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        {{-- Graduation cap --}}
                        <polygon points="50,20 80,35 50,50 20,35" class="fill-amber-400" />
                        <polygon points="50,50 80,35 80,42 50,57" class="fill-amber-500" />
                        <polygon points="50,50 20,35 20,42 50,57" class="fill-amber-300" />
                        <line x1="80" y1="35" x2="80" y2="60" class="stroke-amber-600" stroke-width="2" />
                        <circle cx="80" cy="62" r="3" class="fill-amber-500" />
                        {{-- Dollar coin --}}
                        <circle cx="50" cy="75" r="16" class="fill-amber-200 stroke-amber-400" stroke-width="2" />
                        <circle cx="50" cy="75" r="12" class="stroke-amber-400" stroke-width="1" fill="none" />
                        <text x="50" y="80" text-anchor="middle" class="fill-amber-700" font-size="16" font-weight="700" font-family="Inter, sans-serif">$</text>
                    </svg>
                </div>
                <div class="flex-1">
                    <span class="inline-block bg-amber-200 text-amber-900 text-xs font-semibold px-3 py-1 rounded-full mb-3">Premier's WACE Bursary</span>
                    <h3 class="text-xl font-bold text-base-900 mb-2 text-pretty">AUD $20,000 towards your WA university degree</h3>
                    <p class="text-base-600 leading-relaxed mb-3 text-pretty">Students who complete the WACE programme overseas and enrol in a participating WA university may be eligible for the Premier's WACE Bursary — awarded to 50 applicants per year.</p>
                    <p class="text-base-500 text-sm text-pretty">Participating universities: UWA, Curtin, Murdoch, ECU, and Notre Dame.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break between §5 and §6 --}}
    <x-visual-break :images="[
        ['src' => 'images/programs-scsa-associate/university-campus.webp', 'alt' => 'Modern university campus building with glass facade and autumn trees'],
    ]" aspect="aspect-[5/1]" />

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
    <x-next-steps variant="featured" bg="bg-base-50" :links="[
        ['href' => route('services.education.degrees'), 'title' => 'University Degrees in WA', 'label' => 'Next Step', 'description' => 'Explore bachelor\'s and postgraduate pathways at Western Australian universities — where WACE graduates have direct entry.'],
        ['href' => route('about.partners'), 'title' => 'Our Partner Institutions', 'label' => 'Network', 'description' => 'See the universities, schools, and organisations Blue Education works with across Australia.'],
    ]" />

    {{-- §8 CTA --}}
    <x-cta-banner title="Explore SCSA accreditation."
                  subtitle="Contact us to discuss requirements, process, and timeline for delivering the WA curriculum at your school — or earning WACE as a student."
                  primaryText="Learn More About SCSA Partnership"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
