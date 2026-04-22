<x-layout title="Education Services"
          description="Australia has 1,100+ institutions and 20,000+ programmes. Blue Education helps you find the right one — from school to PhD.">

    {{-- §1 Hero --}}
    <x-hero title="Finding the right one takes more than a Google search."
            subtitle="Blue Education has engaged with thousands of students from more than 145 countries. Let us show you how we can help you navigate your way to Australia and New Zealand."
            badge="1,100+ institutions · 20,000+ programmes"
            :image="asset('images/heroes/services-education.webp')"
            alt="Education advisor guiding an East Asian student through university options"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 How We Help --}}
    <x-content-split title="How We Help" :image="asset('images/services-education/education-guidance.webp')" alt="Education advisor guiding an East Asian student through programme options">
        <p>Your career outcome is our <strong>primary focus</strong>. We first identify programmes that genuinely support your intended <strong>career goal</strong>.</p>
        <p>Where possible, we then consider <strong>visa options</strong> and highlight pathways that align with your study plan — treating migration outcomes as an additional advantage.</p>
    </x-content-split>

    {{-- §3 Education Pathways --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Which describes your situation?"
                               :centered="false" class="mb-10" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="I'm enrolling a child in school"
                        description="We place school-age children — from age 5 — into Australian public and private schools, and support older students applying on their own student visa."
                        :image="asset('images/services-education/pathway-school.webp')"
                        alt="East Asian student smiling in a modern classroom with classmates"
                        :href="route('services.education.school')"
                        linkText="Learn more">
                    <x-icon-list>
                        <x-icon-list.item>Families on temporary visas: school placement from primary through to Year 12</x-icon-list.item>
                        <x-icon-list.item>Independent students: admission management and suitable school matching</x-icon-list.item>
                        <x-icon-list.item>Welfare support: homestay, guardianship, or parent Guardian Visa arrangements</x-icon-list.item>
                    </x-icon-list>
                </x-card>

                <x-card title="I need to enhance my English language ability to pursue further studies"
                        description="Most international students must meet minimum English proficiency requirements before starting their main course of study."
                        :image="asset('images/services-education/pathway-english.webp')"
                        alt="East Asian student laughing with classmates in a language school classroom"
                        :href="route('services.education.english')"
                        linkText="Learn more">
                    <x-icon-list>
                        <x-icon-list.item>Below the required score? Enrol in a pathway English programme designed to bridge the gap</x-icon-list.item>
                        <x-icon-list.item>Want broader fluency? Longer-term programmes build overall English ability and confidence</x-icon-list.item>
                    </x-icon-list>
                </x-card>

                <x-card title="I want a practical, skill-based qualification"
                        description="Practical, industry-recognised qualifications from Certificate to Advanced Diploma level."
                        :image="asset('images/services-education/pathway-vet-tafe.webp')"
                        alt="Students in professional culinary training at a vocational kitchen"
                        :href="route('services.education.vet-tafe')"
                        linkText="Learn more">
                    <x-icon-list>
                        <x-icon-list.item>Directly linked to occupations on Australia's skilled migration lists</x-icon-list.item>
                        <x-icon-list.item>Hands-on training with strong employment outcomes</x-icon-list.item>
                    </x-icon-list>
                </x-card>

                <x-card title="I'm applying for a Bachelor's, Master's, or PhD"
                        description="Undergraduate and postgraduate programmes across globally ranked Australian universities."
                        :image="asset('images/services-education/pathway-degrees.webp')"
                        alt="East Asian graduate celebrating with diploma in university library"
                        :href="route('services.education.degrees')"
                        linkText="Learn more">
                    <x-icon-list>
                        <x-icon-list.item>Bachelor's, Master's, and Doctoral degrees available</x-icon-list.item>
                        <x-icon-list.item>Graduates gain 2–4 years of post-study work rights</x-icon-list.item>
                    </x-icon-list>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §4 The Placement Process --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="End-to-end Support"
                               subtitle="Your advisor supports you at every stage — from initial onboarding through to post-arrival support."
                               :centered="true" class="mb-10" />
            <x-timeline :steps="[
                ['title' => 'Discovery Session', 'icon' => 'chat-bubble-left-right', 'description' => 'We assess your background, goals, and eligibility to understand where you are and where you want to be.'],
                ['title' => 'Pathway Recommendation', 'icon' => 'map', 'description' => 'A shortlist of institutions and programmes matched to your career and migration goals — with a clear explanation of why each one fits.'],
                ['title' => 'Review & Enrolment', 'icon' => 'document-text', 'description' => 'We will review your documents, prepare for your school\'s submission and secure your offer and confirmation of enrolment.'],
                ['title' => 'Visa & Pre-Departure', 'icon' => 'paper-airplane', 'description' => 'Student visa, accommodation, health insurance, arrival orientation. All coordinated in one place.'],
                ['title' => 'Ongoing Support', 'icon' => 'shield-check', 'description' => 'Academic guidance, welfare monitoring, and career planning for as long as you\'re studying.'],
            ]" />
        </div>
    </section>

    {{-- §5 Admission Snapshot --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Admission Snapshot</h2>
            <p class="text-base-600 mb-8 text-pretty">Entry requirements as a starting point for your education journey, not a ceiling.</p>

            <x-data-table class="shadow-xl" :headers="['Study Level', 'Typical Duration', 'Post-Study Work Visa (Subclass 485)']"
                          :rows="[
                              ['English Language (ELICOS)', '10 weeks – 1 year', 'Not directly eligible — pathway into a qualifying course'],
                              ['Certificate III–IV (VET)', '6 months – 2 years', 'Generally not eligible; Graduate Work stream may apply for some occupations (~18 months)'],
                              ['Diploma / Advanced Diploma (VET)', '1 – 2 years', 'Graduate Work stream may apply if linked to an eligible occupation (~18 months)'],
                              ['Bachelor Degree', '3 – 4 years', 'Up to 2 years (Post-Study Work stream)'],
                              ['Graduate Certificate / Diploma', '6 months – 1 year', 'Subject to overall qualification package and study duration'],
                              ['Master\'s Degree', '1 – 2 years', 'Up to 3 years (Post-Study Work stream)'],
                              ['Doctoral (PhD)', '3 – 4 years', 'Up to 4 years (Post-Study Work stream)'],
                          ]" />

            <p class="text-sm text-base-500 mt-4 text-pretty"><strong>Disclaimer:</strong> Visa entitlements are indicative only. Requirements vary by course, institution, and visa type, and are subject to change by the Department of Home Affairs and individual education providers.</p>

            <div class="mt-6 bg-primary-50 border-2 border-primary-100 rounded-corner-lg p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <p class="font-semibold text-base-900">Need to know the English score and academic entry requirements?</p>
                    <p class="text-sm text-base-600 mt-1">IELTS, PTE, TOEFL, Cambridge equivalencies — plus academic qualifications and pathway options.</p>
                </div>
                <a href="{{ route('admission-requirements') }}" class="inline-flex items-center gap-1.5 shrink-0 bg-primary-800 text-white font-semibold px-5 py-2.5 rounded-corner text-sm hover:bg-primary-700 transition-colors">
                    View Full Requirements
                    <x-heroicon-m-arrow-right class="w-4 h-4" />
                </a>
            </div>
        </div>
    </section>

    {{-- QEAC Credential --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-8">
            <div class="flex items-center gap-4">
                <x-credential-card name="QEAC Certified" logo="images/credentials/qeac.svg" description="" />
                <p class="text-base-500 text-sm text-pretty">Blue Education is QEAC certified — meeting the quality standards set for education agent counsellors in Australia.</p>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Know what you want to study. Not sure how to get there?"
                  subtitle="Book a free education consultation. We review your background, map your options, and tell you exactly what the pathway looks like — in one conversation."
                  primaryText="Book an Education Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
