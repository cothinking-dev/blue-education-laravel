<x-layout title="Education Services"
          description="Australia has 1,100+ institutions and 20,000+ programmes. Blue Education helps you find the right one — from school to PhD.">

    {{-- §1 Hero --}}
    <x-hero title="Finding the right one takes more than a Google search."
            subtitle="Blue Education has been navigating this system since 1998. Let us show you where you fit."
            badge="1,100+ institutions · 20,000+ programmes"
            :image="asset('images/heroes/services-education.webp')"
            alt="Education advisor guiding an East Asian student through university options"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 How We Help --}}
    <x-content-split title="How We Help" :image="asset('images/services-education/education-guidance.webp')" alt="Education advisor guiding an East Asian student through programme options">
        <p>Choosing where and what to study in Australia isn't just an education decision — it's a career decision, a migration decision, and a life decision.</p>
        <p>Your advisor maps out institutions and programmes against two questions: what career do you want, and what does your visa pathway look like? The course recommendation will come after that — not before.</p>
        <p>Once you've decided, we take care of the rest — application, enrolment, and student visa included.</p>
    </x-content-split>

    {{-- §3 Education Pathways --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Which describes your situation?"
                               :centered="false" class="mb-10" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="I'm enrolling a child in school"
                        description="For students aged 5–18. We handle school selection, accommodation, guardianship, and welfare — so parents know their child is looked after at every stage."
                        :image="asset('images/services-education/pathway-school.webp')"
                        alt="East Asian student smiling in a modern classroom with classmates"
                        :href="route('services.education.school')"
                        linkText="Learn more" />

                <x-card title="I need to build my English or bridge to university"
                        description="Not quite at university entry level yet? English language courses (10–30 weeks) and foundation programmes build the academic skills and IELTS scores that open the door."
                        :image="asset('images/services-education/pathway-english.webp')"
                        alt="East Asian student laughing with classmates in a language school classroom"
                        :href="route('services.education.english')"
                        linkText="Learn more" />

                <x-card title="I want a practical, career-focused qualification"
                        description="Certificates through to Advanced Diplomas — practical, industry-recognised qualifications. Many sit directly on Australia's skilled migration lists."
                        :image="asset('images/services-education/pathway-vet-tafe.webp')"
                        alt="Students in professional culinary training at a vocational kitchen"
                        :href="route('services.education.vet-tafe')"
                        linkText="Learn more" />

                <x-card title="I'm applying for a Bachelor's, Master's, or PhD"
                        description="Bachelor, Master, and Doctoral programmes across globally ranked Australian universities. Graduates receive 2–4 years of post-study work rights."
                        :image="asset('images/services-education/pathway-degrees.webp')"
                        alt="East Asian graduate celebrating with diploma in university library"
                        :href="route('services.education.degrees')"
                        linkText="Learn more" />
            </div>
        </div>
    </section>

    {{-- §4 The Placement Process --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="The Placement Process"
                               subtitle="Your advisor helps you at every step; From the initial onboarding to post-travel support."
                               :centered="true" class="mb-10" />
            <x-timeline :steps="[
                ['title' => 'Discovery Session', 'icon' => 'chat-bubble-left-right', 'description' => 'We assess your background, goals, and eligibility to understand where you are and where you want to end up.'],
                ['title' => 'Pathway Recommendation', 'icon' => 'map', 'description' => 'A shortlist of institutions and programmes matched to your career and migration goals — with a clear explanation of why each one fits.'],
                ['title' => 'Application & Enrolment', 'icon' => 'document-text', 'description' => 'We prepare your documents, lodge applications, and secure your offer and enrolment confirmation.'],
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
            <x-data-table :headers="['Programme Level', 'IELTS', 'Duration', 'Post-Study Work Visa']"
                          :rows="[
                              ['Foundation', '5.0 – 5.5', '6–12 months', '—'],
                              ['VET/TAFE', '5.5 – 6.0', '6 months – 2 years', '18 months (if eligible)'],
                              ['Bachelor Degree', '6.5', '3–4 years', '2 years'],
                              ['Master Degree', '6.5 – 7.0', '1–2 years', '3 years'],
                              ['Doctoral', '6.5 – 7.0', '3–4 years', '4 years'],
                          ]" />
            <p class="text-sm text-base-500 mt-4 text-pretty">VET post-study work rights (Graduate Work Stream, Subclass 485, 18 months) are available to graduates whose qualification and occupation appear on a skilled occupation list.</p>
            <a href="{{ route('admission-requirements') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-2 inline-block">See full admission requirements &rarr;</a>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Know what you want to study. Not sure how to get there?"
                  subtitle="We review your background, map your options, and tell you exactly what the pathway looks like — in one conversation."
                  primaryText="Book an Education Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
