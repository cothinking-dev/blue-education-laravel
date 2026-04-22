<x-layout title="Undergraduate & Postgraduate Qualifications"
          description="Undergraduate and postgraduate qualifications at Australian universities. Globally recognised degrees with post-study work rights.">

    {{-- §1 Hero --}}
    <x-hero title="A degree worth pursuing, from a state worth living in."
            subtitle="Australian degrees are respected globally, but choosing a university in Western Australia offers even more. You can gain a world-class qualification, enjoy extended post-study work rights, and build your career in a state powered by mining, construction and healthcare, with excellent access to opportunities across the Asia–Pacific region."
            :image="asset('images/heroes/services-education-degrees.webp')"
            alt="East Asian graduates celebrating and clapping at graduation ceremony"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Programmes --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Programmes" :centered="false" />
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-book-open class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-semibold text-base-900 mb-1">Bachelor and Bachelor with Honours</h3>
                    <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-50 text-primary-800 mb-3">AQF Level 7 – 8</span>
                    <ul class="space-y-1.5 text-sm text-base-600 list-disc list-inside marker:text-primary-400">
                        <li>Main first university qualification</li>
                        <li>Optional Honours year with a research project</li>
                        <li>Honours often leads to research pathways</li>
                    </ul>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-semibold text-base-900 mb-1">Graduate Certificate</h3>
                    <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-50 text-primary-800 mb-3">AQF Level 8</span>
                    <ul class="space-y-1.5 text-sm text-base-600 list-disc list-inside marker:text-primary-400">
                        <li>Around 6 months full-time</li>
                        <li>Builds specialised knowledge after a bachelor degree or equivalent experience</li>
                        <li>Common for professionals wanting to upskill or test a new field</li>
                    </ul>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-clipboard-document-check class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-semibold text-base-900 mb-1">Graduate Diploma</h3>
                    <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-50 text-primary-800 mb-3">AQF Level 8</span>
                    <ul class="space-y-1.5 text-sm text-base-600 list-disc list-inside marker:text-primary-400">
                        <li>One-year postgraduate qualification</li>
                        <li>Extends or broadens knowledge beyond the bachelor level</li>
                        <li>Often used as a standalone qualification or stepping stone into a master degree</li>
                    </ul>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-semibold text-base-900 mb-1">Master's Degrees</h3>
                    <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-50 text-primary-800 mb-3">AQF Level 9</span>
                    <ul class="space-y-1.5 text-sm text-base-600 list-disc list-inside marker:text-primary-400">
                        <li>Advanced expertise in a discipline</li>
                        <li>Coursework, research, or a mix of both</li>
                        <li>Research masters involve a substantial thesis, often leading toward PhD study</li>
                    </ul>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-light-bulb class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-semibold text-base-900 mb-1">Doctoral Degrees (PhD and Professional Doctorate)</h3>
                    <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-50 text-primary-800 mb-3">AQF Level 10</span>
                    <ul class="space-y-1.5 text-sm text-base-600 list-disc list-inside marker:text-primary-400">
                        <li>Highest academic qualifications in Australia</li>
                        <li>Original research (PhD) or advanced professional practice (professional doctorate)</li>
                        <li>Requires a significant thesis contributing new knowledge</li>
                    </ul>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-arrow-trending-up class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-semibold text-base-900 mb-1">Associate Degree / Advanced Diploma</h3>
                    <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-50 text-primary-800 mb-3">AQF Level 6</span>
                    <ul class="space-y-1.5 text-sm text-base-600 list-disc list-inside marker:text-primary-400">
                        <li>Sits between VET and university</li>
                        <li>Shorter higher-education option with pathways into bachelor degrees</li>
                        <li>Often used as entry or pathway programmes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Our Partners --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Partners, taking you to places...." :centered="false" />
            <p class="text-base-600 mb-8 text-pretty">Blue Education connects you with leading global education providers in Western Australia and across Australia, helping you choose the right pathway for your goals, background and field of interest.</p>

            <h3 class="font-semibold text-base-700 mb-4 text-sm">Universities & University Colleges</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-8" data-animate="stagger">
                @php
                    $uniPartners = [
                        ['src' => 'images/partners/uwa-college-logo.png', 'name' => 'UWA College'],
                        ['src' => 'images/partners/uwa-logo.svg', 'name' => 'UWA'],
                        ['src' => 'images/partners/curtin-college-logo.png', 'name' => 'Curtin College'],
                        ['src' => 'images/partners/curtin-logo.webp', 'name' => 'Curtin University'],
                        ['src' => 'images/partners/murdoch-college-logo.jpg', 'name' => 'Murdoch College'],
                        ['src' => 'images/partners/murdoch-logo.svg', 'name' => 'Murdoch University'],
                        ['src' => 'images/partners/ecc-logo.png', 'name' => 'Edith Cowan College'],
                        ['src' => 'images/partners/ecu-logo.png', 'name' => 'ECU'],
                        ['src' => 'images/partners/notre-dame-logo.webp', 'name' => 'Notre Dame University'],
                        ['src' => 'images/partners/scu-logo.png', 'name' => 'Southern Cross University'],
                        ['src' => 'images/partners/kaplan-logo.png', 'name' => 'Kaplan Business School'],
                    ];
                @endphp
                @foreach($uniPartners as $partner)
                    <div class="bg-white border border-base-200 rounded-corner-lg p-6 flex items-center justify-center" style="min-height:90px;">
                        <img src="{{ asset($partner['src']) }}" alt="{{ $partner['name'] }} logo" class="h-10 w-auto object-contain" loading="lazy">
                    </div>
                @endforeach
            </div>

            <h3 class="font-semibold text-base-700 mb-4 text-sm">Other Institutions</h3>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-8" data-animate="stagger">
                @php
                    $otherPartners = [
                        ['src' => 'images/partners/TheHotelSchoolLogo.png', 'name' => 'The Hotel School'],
                        ['src' => 'images/partners/le-cordon-bleu-logo.png', 'name' => 'Le Cordon Bleu Australia'],
                        ['src' => 'images/partners/sheridan-logo.jpg', 'name' => 'Sheridan Institute'],
                        ['src' => 'images/partners/StanleyCollegeLogo.png', 'name' => 'Stanley College'],
                        ['src' => 'images/partners/StottsCollegeLogo.png', 'name' => 'Stotts College'],
                        ['src' => 'images/partners/AcademiesAustralasiaLogo.png', 'name' => 'Academies Australasia'],
                        ['src' => 'images/partners/CIHELogo.png', 'name' => 'Crown Institute of Higher Education'],
                    ];
                @endphp
                @foreach($otherPartners as $partner)
                    <div class="bg-white border border-base-200 rounded-corner-lg p-6 flex items-center justify-center" style="min-height:90px;">
                        <img src="{{ asset($partner['src']) }}" alt="{{ $partner['name'] }} logo" class="h-10 w-auto object-contain" loading="lazy">
                    </div>
                @endforeach
            </div>

            <a href="{{ route('about.partners') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors inline-block">View all partner institutions &rarr;</a>
        </div>
    </section>

    {{-- §4 Why Study in Australia? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why study in Australia?" :centered="false" class="mb-10" />
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Globally recognised qualifications"
                        description="Australian degrees and diplomas are widely accepted by employers and institutions around the world.">
                    <x-slot:icon><x-heroicon-o-globe-alt class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="High-quality education system"
                        description="Strong academic standards, quality assurance frameworks and modern facilities support serious, career-focused study.">
                    <x-slot:icon><x-heroicon-o-shield-check class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="Practical, career-ready learning"
                        description="Many courses include internships, projects or industry placements so you graduate with real workplace skills.">
                    <x-slot:icon><x-heroicon-o-briefcase class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="Post-study work opportunities"
                        description="Graduates may be eligible for post-study work visas, allowing time to gain professional experience in Australia."
                        :href="route('services.migration.graduate-work')"
                        linkText="Graduate work visas">
                    <x-slot:icon><x-heroicon-o-clock class="w-5 h-5" /></x-slot:icon>
                    <a href="{{ route('services.migration.permanent-residence') }}" class="relative z-20 text-primary-800 font-medium text-xs hover:underline mt-1 inline-block">Permanent residence &rarr;</a>
                </x-card>
                <x-card title="Safe, multicultural lifestyle"
                        description="Diverse campuses, low crime rates and welcoming communities help international students feel supported.">
                    <x-slot:icon><x-heroicon-o-heart class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="English-speaking environment"
                        description="Studying in an English-speaking country strengthens your language skills for global careers.">
                    <x-slot:icon><x-heroicon-o-chat-bubble-left-right class="w-5 h-5" /></x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §4b Why Western Australia? --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Of course, studying in Western Australia does have its advantages" :centered="false" class="mb-10" />
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" data-animate="stagger">
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Strong, diverse economy</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">WA's economy is driven by mining, energy, construction, healthcare and emerging industries, creating demand for skilled graduates.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Excellent universities and colleges</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Western Australia offers reputable universities and pathway institutions with modern campuses and student support.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Generous post-study work options</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Many international graduates in WA can access extended post-study work rights (2–4 years), giving more time to build experience.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Liveable, relaxed lifestyle</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Perth combines a clean, safe city environment with beaches, parks and a laid-back outdoor culture.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Gateway to Asia</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">WA's time zone and geographic location make it well placed for links with major Asian markets and regional career opportunities.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Supportive international student community</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Western Australia has active student networks, cultural events and services designed to help international students settle in.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 How to Apply --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How to Apply" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Assess your eligibility', 'summary' => 'Your adviser reviews your academic and work history, English proficiency and career goal.'],
                ['title' => 'Review your options', 'summary' => 'We provide options for your course and respective institutions that deliver the course.'],
                ['title' => 'Enrol in your course', 'summary' => 'Once you have made your decision, we will facilitate the enrolment of the course with the chosen institution.'],
                ['title' => 'Receive offer & lodge the visa', 'summary' => 'We will obtain your offer letter and your Confirmation of Enrolment for the student visa application.'],
                ['title' => 'Await visa grant, arrive and start', 'summary' => 'Our Counsellor remains available throughout the process to your visa grant.'],
            ]" />
            <div class="mt-6 space-y-1.5 text-xs text-base-500">
                <p>If the student is onshore in Australia, once the student visa application is submitted, the student can begin the course whilst awaiting the visa outcome.</p>
                <p>Student visa processing times vary. See the <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-processing-times/global-visa-processing-times" target="_blank" rel="noopener noreferrer" class="text-primary-800 font-medium hover:underline">Department of Home Affairs visa processing times</a> for current estimates.</p>
            </div>
        </div>
    </section>

    {{-- §6 Admission Disclaimer --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-callout title="Admission requirements and tuition fees" variant="info">
                <x-slot:icon><x-heroicon-o-information-circle class="w-6 h-6" /></x-slot:icon>
                <p class="text-sm text-base-600 mb-3">Admission requirements and tuition fees for study in Australia vary between institutions and individual courses, even though all recognised qualifications are part of the Australian Qualifications Framework (AQF). When considering a programme, students should always confirm the correct CRICOS course code and carefully review the latest entry requirements and fee information published by the institution offering that course.</p>
                <p class="text-xs text-base-500"><strong>Disclaimer:</strong> Information about admission requirements, CRICOS course codes, tuition fees and entry pathways is provided as a general guide only and may change without notice. While Blue Education takes care to offer accurate and up-to-date advice, final decisions on eligibility, admission and fees are made by each education provider and relevant authorities. Students must always refer to the official website and current admissions information for each institution and programme, and should not rely solely on this website when making enrolment or visa decisions.</p>
            </x-callout>
            <div class="mt-6 flex flex-col sm:flex-row gap-4">
                <a href="{{ route('admission-requirements') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors">View admission requirements &rarr;</a>
                <a href="{{ route('services.education.english') }}" class="text-primary-800 font-medium text-sm hover:underline">English & Foundation programmes &rarr;</a>
                <a href="{{ route('services.education.vet-tafe') }}" class="text-primary-800 font-medium text-sm hover:underline">VET pathway &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §8 CTA --}}
    <x-cta-banner title="Not sure which university is the right fit?"
                  subtitle="Book a free education consultation. We'll assess your background and goals, then recommend the institution and programme that suits your situation."
                  primaryText="Get University Recommendations"
                  :primaryHref="route('contact')" />

</x-layout>
