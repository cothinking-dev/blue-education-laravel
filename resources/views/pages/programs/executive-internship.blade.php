<x-layout title="Executive Internship Programme"
          description="Strategic work experience for business graduates. The EIP runs twice a year with limited places — structured placements with executive mentorship.">

    {{-- §1 Hero --}}
    <x-hero title="Strategic work experience for business graduates."
            subtitle="The Executive Internship Programme (EIP) runs twice a year. Places are limited. Open to undergraduate and postgraduate students in business or commerce."
            :image="asset('images/heroes/programs-executive-internship.webp')"
            alt="Woman mentoring an East Asian businessman at a laptop in a modern office"
            badge="Premium Program · Two Intakes Per Year"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 What It Is --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What It Is</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">The EIP places business graduates and final-year students with Australian employers for structured, mentored workplace experience. Not entry-level administration — a real position with agreed objectives, a dedicated supervisor, and a formal performance review at the end.</p>
                    <p class="text-base-600 leading-relaxed text-pretty">The programme is built around our six-phase Employability Booster Programme (EBP), which starts before placement and continues through to review. Blue Education manages the matching, preparation, and employer coordination. You bring the commitment.</p>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="Key Facts"
                                   :rows="[
                                       ['key' => 'Intakes', 'value' => 'Twice per year'],
                                       ['key' => 'Places', 'value' => 'Limited — assessed intake'],
                                       ['key' => 'Eligible', 'value' => 'Undergraduate and postgraduate, business/commerce'],
                                       ['key' => 'Duration', 'value' => 'Up to 3 months (min. 16 hrs/week)'],
                                       ['key' => 'Partners', 'value' => 'Professional Vogue · Employment Advantage'],
                                       ['key' => 'Managed by', 'value' => 'Blue Education'],
                                   ]" />
                </div>
            </div>
        </div>
    </section>

    {{-- §3 The Six-Phase EBP Process --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">The Six-Phase EBP Process</h2>
            <p class="text-base-600 mb-10 text-pretty">The Employability Booster Programme starts before placement and runs through to formal review.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @php
                    $phases = [
                        ['title' => 'Assessment', 'desc' => 'Background review, Initial Placement Questionnaire, and an online readiness module — completed before the programme begins.'],
                        ['title' => 'Readiness', 'desc' => 'CV preparation, LinkedIn presence, presentation guidance, and context on Australian workplace culture.'],
                        ['title' => 'Profiling', 'desc' => 'We research target organisations and match your profile with employers suited to your background and goals.'],
                        ['title' => 'Preparation', 'desc' => 'Shortlisted employers, prioritised by fit. Interview coaching and workplace expectations briefing before any approach is made.'],
                        ['title' => 'Placement', 'desc' => 'Blue Education facilitates introductions, assists with interview preparation, and coordinates your placement once an employer confirms.'],
                        ['title' => 'Review', 'desc' => 'Structured performance review with employer feedback, a programme debrief, and documented outcomes for your records.'],
                    ];
                @endphp
                @foreach($phases as $i => $phase)
                    <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                        <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-bold mb-4">{{ $i + 1 }}</div>
                        <h3 class="font-bold text-base-900 mb-2 text-pretty">{{ $phase['title'] }}</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">{{ $phase['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 What You Gain --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What You Gain" :centered="false" />
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Documented Australian Experience"
                        description="Placement with a real employer — agreed objectives, a dedicated supervisor, and a formal performance review that strengthens your Australian job applications."
                        :image="asset('images/programs-executive-internship/australian-experience.webp')"
                        alt="East Asian business professionals collaborating at a laptop in a modern office" />

                <x-card title="Professional Development"
                        description="Soft skills training, CV and LinkedIn preparation, and interview coaching before you step into the placement. Delivered through our programme partners."
                        :image="asset('images/programs-executive-internship/professional-development.webp')"
                        alt="East Asian woman presenting a project to colleagues in a modern office" />

                <x-card title="AQF Alignment"
                        description="Understand how your qualification maps to Australian employer expectations within the AQF — and what it means for your post-study visa options."
                        :image="asset('images/programs-executive-internship/aqf-alignment.webp')"
                        alt="East Asian businesswoman reviewing qualification documents in a city setting" />
            </div>
            <div class="mt-10 text-center">
                <x-btn :href="route('contact')" variant="primary" size="lg">Apply for the Next Intake</x-btn>
            </div>
        </div>
    </section>

    {{-- §5 Programme Partners --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Programme Partners" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="bg-white rounded-corner-lg border border-base-200 p-6 flex items-start gap-5">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 font-bold text-lg">L</div>
                    <div>
                        <h3 class="font-bold text-base-900">Lisa</h3>
                        <p class="text-primary-800 text-sm font-medium mb-2">Professional Vogue</p>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Lisa has two passions: fashion and style, and personal development. Professional Vogue programmes focus on enhancing employability and soft skills — building and developing future leaders and helping men and women make their mark and achieve their goals in corporate WA.</p>
                    </div>
                </div>
                <div class="bg-white rounded-corner-lg border border-base-200 p-6 flex items-start gap-5">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 font-bold text-lg">N</div>
                    <div>
                        <h3 class="font-bold text-base-900">Natalia</h3>
                        <p class="text-primary-800 text-sm font-medium mb-2">Employment Advantage</p>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Natalia has contributed significantly in the education and employment marketplace for more than two decades, with extensive experience in research and development and creating training content in soft skills. The Employment Advantage Tool has contributed to the success of many candidates in the job marketplace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/programs-executive-internship/perth-skyline.webp', 'alt' => 'Perth downtown city skyline and commercial buildings, Western Australia'],
    ]" aspect="aspect-[4/1]" position="center" />

    {{-- §6 For Host Employers --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="For Host Employers" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-8" data-animate="stagger">
                <div>
                    <h3 class="font-bold text-base-900 mb-3">What's Involved</h3>
                    <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">Hosting an EIP intern means providing a supervisor, agreed learning objectives, and a genuine working environment. Blue Education handles the matching, objectives framework, and performance review structure. There is no obligation to hire after placement.</p>
                    <ul class="space-y-2 text-sm text-base-600">
                        <li class="flex items-start gap-2"><span class="text-base-400 font-bold mt-0.5" aria-hidden="true">&#8226;</span> Commitment: 16 hours per week for up to 8 weeks</li>
                        <li class="flex items-start gap-2"><span class="text-base-400 font-bold mt-0.5" aria-hidden="true">&#8226;</span> Dedicated mentor or supervisor</li>
                        <li class="flex items-start gap-2"><span class="text-base-400 font-bold mt-0.5" aria-hidden="true">&#8226;</span> Orientation and agreed task expectations</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-base-900 mb-3">Benefits for Your Business</h3>
                    <ul class="space-y-2 text-sm text-base-600">
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5" aria-hidden="true">&#10003;</span> Access to motivated, pre-assessed business graduates</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5" aria-hidden="true">&#10003;</span> An early look at talent before any hiring decision is made</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5" aria-hidden="true">&#10003;</span> Fresh perspectives and skills from candidates with international education backgrounds</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5" aria-hidden="true">&#10003;</span> No recruitment cost or hiring obligation</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="text-primary-800 font-medium text-sm hover:underline mt-4 inline-block">Interested in hosting an intern? Contact our team &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 How to Apply --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How to Apply" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Confirm Intake Dates', 'description' => 'The programme runs twice a year. Contact us to confirm when the next intake opens and whether applications are currently being accepted.'],
                ['title' => 'Submit Your Application', 'description' => 'Send your CV and a brief summary of your goals and the type of placement you\'re looking for. We assess fit before confirming a place.'],
                ['title' => 'Begin the EBP', 'description' => 'Once accepted, your six-phase programme starts with an assessment session. Placement typically follows within the same intake cycle.'],
            ]" />
        </div>
    </section>

    {{-- §8 Also Relevant --}}
    <x-next-steps variant="featured" bg="bg-white" :links="[
        ['href' => route('services.career'), 'title' => 'Career Services', 'label' => 'Related Service', 'description' => 'CV preparation, interview coaching, and job search support for international graduates in Australia.'],
        ['href' => route('services.migration.graduate-work'), 'title' => 'Graduate Work Visas', 'label' => 'Post-Study Pathways', 'description' => 'Understand your visa options after completing your studies — including the Temporary Graduate visa (subclass 485).'],
    ]" />

    {{-- §9 CTA --}}
    <x-cta-banner title="Two intakes a year. Applications close early."
                  subtitle="Tell us about your background and the type of placement you're aiming for. We'll confirm current intake dates and walk you through the application process."
                  primaryText="Apply for the Next Intake"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
