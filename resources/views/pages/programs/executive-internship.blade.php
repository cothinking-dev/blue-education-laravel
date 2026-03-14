<x-layout title="Executive Internship Programme"
          description="Strategic work experience for business graduates. The EIP runs twice a year with limited places — structured placements with executive mentorship.">

    {{-- §1 Hero --}}
    <x-hero title="Strategic work experience for business graduates."
            subtitle="The Executive Internship Programme (EIP) runs twice a year. Places are limited. Open to undergraduate and postgraduate students in business or commerce."
            :image="asset('images/heroes/programs-executive-internship.webp')"
            alt="Professional boardroom meeting in a corporate office"
            badge="Premium Program · Two Intakes Per Year"
            variant="left" />

    {{-- §2 What It Is --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty">What It Is</h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-pretty">The EIP places business graduates and final-year students with Australian employers for structured, mentored workplace experience. Not entry-level administration — a real position with agreed objectives, a dedicated supervisor, and a formal performance review at the end.</p>
                    <p class="text-gray-600 leading-relaxed text-pretty">The programme is built around our six-phase Employability Booster Programme (EBP), which starts before placement and continues through to review. Blue Education manages the matching, preparation, and employer coordination. You bring the commitment.</p>
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
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-3 text-pretty" data-animate="fade-up">The Six-Phase EBP Process</h2>
            <p class="text-gray-600 mb-10 text-pretty">The Employability Booster Programme starts before placement and runs through to formal review.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @php
                    $phases = [
                        ['title' => 'Assessment', 'desc' => 'Initial review of your background, strengths, and readiness for Australian employment. You complete an Initial Placement Questionnaire and an online readiness module before the programme begins.'],
                        ['title' => 'Readiness', 'desc' => 'CV preparation, LinkedIn presence, presentation guidance, and context on Australian workplace culture — what employers expect and how to meet those expectations.'],
                        ['title' => 'Profiling', 'desc' => 'We research target organisations, develop approach templates, and match your profile with employers suited to your background and goals.'],
                        ['title' => 'Preparation', 'desc' => 'We build a shortlist of target employers with you, prioritise them by fit, and prepare you for interviews and workplace expectations before any approach is made.'],
                        ['title' => 'Placement', 'desc' => 'Blue Education facilitates introductions, assists with interview preparation, and coordinates your internship placement once an employer confirms.'],
                        ['title' => 'Review', 'desc' => 'Structured performance review at the end of placement. Feedback from your employer, a final debrief with the programme team, and documented outcomes for your records.'],
                    ];
                @endphp
                @foreach($phases as $i => $phase)
                    <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                        <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-bold mb-4">{{ $i + 1 }}</div>
                        <h3 class="font-bold text-gray-900 mb-2 text-pretty">{{ $phase['title'] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">{{ $phase['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/programs-executive-internship/professional-mentoring.webp') }}" alt="Professional mentoring session in an office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/programs-executive-internship/office-work.webp') }}" alt="Business professionals collaborating in a modern office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §4 What You Gain --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">What You Gain</h2>
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Documented Australian Experience"
                        description="Placement with a real employer — agreed objectives, a dedicated supervisor, and a formal performance review. The kind of experience that makes your application stand out in the Australian job market.">
                    <x-slot:icon>
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Professional Development"
                        description="Soft skills training, CV and LinkedIn preparation, and interview coaching before you step into the placement. Delivered through our programme partners.">
                    <x-slot:icon>
                        <x-heroicon-o-star class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="AQF Alignment"
                        description="An understanding of how your qualification maps to Australian employer expectations within the Australian Qualifications Framework — and what it means for your post-study visa options.">
                    <x-slot:icon>
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §5 Programme Partners --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Programme Partners</h2>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="bg-white rounded-corner-lg border border-gray-200 p-6 flex items-start gap-5">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 font-bold text-lg">L</div>
                    <div>
                        <h3 class="font-bold text-gray-900">Lisa</h3>
                        <p class="text-primary-800 text-sm font-medium mb-2">Professional Vogue</p>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Lisa has two passions: fashion and style, and personal development. Professional Vogue programmes focus on enhancing employability and soft skills — building and developing future leaders and helping men and women make their mark and achieve their goals in corporate WA.</p>
                    </div>
                </div>
                <div class="bg-white rounded-corner-lg border border-gray-200 p-6 flex items-start gap-5">
                    <div class="w-14 h-14 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 font-bold text-lg">N</div>
                    <div>
                        <h3 class="font-bold text-gray-900">Natalia</h3>
                        <p class="text-primary-800 text-sm font-medium mb-2">Employment Advantage</p>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Natalia has contributed significantly in the education and employment marketplace for more than two decades, with extensive experience in research and development and creating training content in soft skills. The Employment Advantage Tool has contributed to the success of many candidates in the job marketplace.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §6 For Host Employers --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">For Host Employers</h2>
            <div class="grid sm:grid-cols-2 gap-8" data-animate="stagger">
                <div>
                    <h3 class="font-bold text-gray-900 mb-3">What's Involved</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">Hosting an EIP intern means providing a supervisor, agreed learning objectives, and a genuine working environment. Blue Education handles the matching, objectives framework, and performance review structure. There is no obligation to hire after placement.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><span class="text-gray-400 font-bold mt-0.5">&#8226;</span> Commitment: 16 hours per week for up to 8 weeks</li>
                        <li class="flex items-start gap-2"><span class="text-gray-400 font-bold mt-0.5">&#8226;</span> Dedicated mentor or supervisor</li>
                        <li class="flex items-start gap-2"><span class="text-gray-400 font-bold mt-0.5">&#8226;</span> Orientation and agreed task expectations</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 mb-3">What You Gain</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> Access to motivated, pre-assessed business graduates</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> An early look at talent before any hiring decision is made</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> Fresh perspectives and skills from candidates with international education backgrounds</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#10003;</span> No recruitment cost or hiring obligation</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="text-primary-800 font-medium text-sm hover:underline mt-4 inline-block">Interested in hosting an intern? Contact our team &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 How to Apply --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-pretty" data-animate="fade-up">How to Apply</h2>
            <x-timeline :steps="[
                ['title' => 'Confirm Intake Dates', 'description' => 'The programme runs twice a year. Contact us to confirm when the next intake opens and whether applications are currently being accepted.'],
                ['title' => 'Submit Your Application', 'description' => 'Send your CV and a brief summary of your goals and the type of placement you\'re looking for. We assess fit before confirming a place.'],
                ['title' => 'Begin the EBP', 'description' => 'Once accepted, your six-phase programme starts with an assessment session. Placement typically follows within the same intake cycle.'],
            ]" />
        </div>
    </section>

    {{-- §8 Also Relevant --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('services.career') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">Career Services &rarr;</a>
                <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">Graduate Work Visas &rarr;</a>
                <a href="{{ route('about.partners') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">Our Partners &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §9 CTA --}}
    <x-cta-banner title="Two intakes a year. Applications close early."
                  subtitle="Tell us about your background and the type of placement you're aiming for. We'll confirm current intake dates and walk you through the application process."
                  primaryText="Apply for the Next Intake"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
