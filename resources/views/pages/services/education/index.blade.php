<x-layout title="Education Services"
          description="Australia has 1,100+ institutions and 20,000+ programs. Blue Education helps you find the right one — from school to PhD.">

    {{-- §1 Hero --}}
    <x-hero title="Australia has 1,100+ institutions and 20,000+ programs. Finding the right one takes more than a Google search."
            subtitle="We've been navigating this system since 1998. Let us show you where you fit."
            :image="asset('images/heroes/services-education.webp')"
            alt="Education advisor guiding a student through university options"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 How We Help --}}
    <x-content-split title="How We Help" :image="asset('images/services-education/education-guidance.webp')" alt="Education advisor guiding a student through programme options">
        <p>Choosing where and what to study in Australia isn't just an education decision — it's a career decision, a migration decision, and a life decision.</p>
        <p>Your advisor maps out institutions and programs against two questions: what career do you want, and what does your visa pathway look like? The course recommendation comes after that — not before.</p>
        <p>Once you've decided, we take care of the rest — application, enrolment, and student visa included.</p>
    </x-content-split>

    {{-- §3 Education Pathways --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Which describes your situation?"
                               subtitle="All options shown — no hidden content."
                               :centered="false" class="mb-10" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="I'm enrolling a child in school"
                        description="For students aged 5–18. We handle school selection, accommodation, guardianship, and welfare — so parents know their child is looked after at every stage."
                        :href="route('services.education.school')"
                        linkText="Learn more" />

                <x-card title="I need to build my English or bridge to university"
                        description="Not quite at university entry level yet? English language courses (10–30 weeks) and foundation programs build the academic skills and IELTS scores that open the door."
                        :href="route('services.education.english')"
                        linkText="Learn more" />

                <x-card title="I want a practical, career-focused qualification"
                        description="Certificates through to Advanced Diplomas — practical, industry-recognised qualifications. Many sit directly on Australia's skilled migration lists."
                        :href="route('services.education.vet-tafe')"
                        linkText="Learn more" />

                <x-card title="I'm applying for a Bachelor's, Master's, or PhD"
                        description="Bachelor, Master, and Doctoral programs across globally ranked Australian universities. Graduates receive 2–4 years of post-study work rights."
                        :href="route('services.education.degrees')"
                        linkText="Learn more" />
            </div>
        </div>
    </section>

    {{-- §4 The Placement Process --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12 mb-10">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">The Placement Process</h2>
                    <p class="text-gray-600 leading-relaxed text-pretty">From discovery session to ongoing support — your advisor coordinates every step.</p>
                </div>
                <div class="lg:w-[40%]">
                    <img src="{{ asset('images/services-education/campus-library.webp') }}" alt="Students studying in a modern university library" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
            <x-timeline :steps="[
                ['title' => 'Discovery Session', 'description' => 'We assess your background, goals, and eligibility. One conversation to understand where you\'re starting from and where you want to end up.'],
                ['title' => 'Pathway Recommendation', 'description' => 'You receive a shortlist of institutions and programs matched to your career and migration goals — with a clear explanation of why each one fits.'],
                ['title' => 'Application & Enrolment', 'description' => 'We prepare your documents, lodge applications, and secure your offer and enrolment confirmation.'],
                ['title' => 'Visa & Pre-Departure', 'description' => 'Student visa, accommodation, health insurance, arrival orientation. All coordinated in one place.'],
                ['title' => 'Ongoing Support', 'description' => 'Academic guidance, welfare monitoring, and career planning for as long as you\'re studying.'],
            ]" />
        </div>
    </section>

    {{-- §5 Admission Snapshot --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">Admission Snapshot</h2>
            <p class="text-gray-600 mb-8 text-pretty">Think of entry requirements as a starting point, not a ceiling. There's almost always more than one way in.</p>
            <x-data-table :headers="['Program Level', 'IELTS', 'Duration', 'Post-Study Work Visa']"
                          :rows="[
                              ['Foundation', '5.0 – 5.5', '6–12 months', '—'],
                              ['VET/TAFE', '5.5 – 6.0', '6 months – 2 years', '18 months (if eligible)'],
                              ['Bachelor Degree', '6.5', '3–4 years', '2 years'],
                              ['Master Degree', '6.5 – 7.0', '1–2 years', '3 years'],
                              ['Doctoral', '6.5 – 7.0', '3–4 years', '4 years'],
                          ]" />
            <p class="text-sm text-gray-500 mt-4 text-pretty">VET post-study work rights (Graduate Work Stream, Subclass 485, 18 months) are available to graduates whose qualification and occupation appear on a skilled occupation list.</p>
            <a href="{{ route('admission-requirements') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-2 inline-block">See full admission requirements &rarr;</a>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Know what you want to study. Not sure how to get there?"
                  subtitle="We review your background, map your options, and tell you exactly what the pathway looks like — in one conversation."
                  primaryText="Book an Education Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
