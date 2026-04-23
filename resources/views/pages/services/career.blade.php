<x-layout title="Career Services"
          description="From skills gap analysis and employer introductions to graduate work visa support — every step from study to employment in Australia.">

    {{-- §1 Hero --}}
    <x-hero title="Turn your Australian qualification into a career in Australia"
            subtitle="Getting qualified is only the beginning. We help you map your skills, connect with suitable employers, and navigate your graduate work visa options, so your journey from study to employment is guided at every step by a dedicated team."
            :image="asset('images/heroes/services-career.webp')"
            alt="Japanese man and woman collaborating at a laptop in a modern office"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Employability Booster Programme --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Employability Booster Programme (EBP)</h2>
            <p class="text-base-600 leading-relaxed mb-10 max-w-3xl text-pretty">Our Employability Booster Programme (EBP) is a 6-phase approach. We assist in the initial phases of Assessment and Readiness so you can position yourself better in the job marketplace. If you need us to connect you with potential employers or relevant host companies, we guide you through the rest of the programme, from Profiling all the way to Review.</p>

            {{-- Alternating zigzag timeline --}}
            <div class="relative">
                {{-- Central vertical line (desktop only) --}}
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-px bg-primary-200 -translate-x-1/2"></div>

                <div class="space-y-6 lg:space-y-10">
                    {{-- Phase 1: Assessment — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-clipboard-document-check class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Assessment</h3>
                                </div>
                                <p class="text-base-700 text-sm font-medium mb-2">Review of candidate's requirements, background and job readiness.</p>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Initial interview to ascertain candidate's strengths and areas for improvement</li>
                                    <li>Candidate to complete Initial Placement Questionnaire (IPQ)</li>
                                    <li>Candidate to complete Online Readiness Training</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">1</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- Phase 2: Readiness — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-user-plus class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Readiness</h3>
                                </div>
                                <p class="text-base-700 text-sm font-medium mb-2">Ascertain candidate's inclination towards being 'ready' for employment.</p>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Assist with the preparation of a professional CV</li>
                                    <li>Provide additional support: presence in LinkedIn, tips on presentation and image, and understanding of cultural context</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">2</div>
                    </div>

                    {{-- Phase 3: Profiling — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-magnifying-glass class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Profiling</h3>
                                </div>
                                <p class="text-base-700 text-sm font-medium mb-2">Assess candidate's requirements and match with potential employers.</p>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Research on shortlisted employers</li>
                                    <li>Develop letters and templates of approach</li>
                                    <li>Candidate to contact prospective employers</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">3</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- Phase 4: Preparation — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-adjustments-horizontal class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Preparation</h3>
                                </div>
                                <p class="text-base-700 text-sm font-medium mb-2">Get candidate ready and positioned for interviews in the job marketplace.</p>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Work with candidate to develop a target list of potential employers</li>
                                    <li>Shortlist and prioritise employers to approach</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">4</div>
                    </div>

                    {{-- Phase 5: Placement — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-briefcase class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Placement</h3>
                                </div>
                                <p class="text-base-700 text-sm font-medium mb-2">Facilitate opportunities for internship and interviews.</p>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Assist in lining up interviews and internship</li>
                                    <li>Assist candidate to prepare for interviews, provide feedback and action plans</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">5</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- Phase 6: Review — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Review</h3>
                                </div>
                                <p class="text-base-700 text-sm font-medium mb-2">Gain feedback on candidate's performance.</p>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Contact employer, or the companies who have interviewed or hired candidate to obtain feedback</li>
                                    <li>Provide feedback to candidate</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">6</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EBP CTA --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="bg-primary-50 border border-primary-100 rounded-corner-lg p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-base-800 font-medium text-pretty">If you would like to participate in our Employability Booster Programme, prepare your CV and send to us. Our team will assess your eligibility and notify you for an appointment with our Career Counsellor.</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors whitespace-nowrap shrink-0">Send Us Your CV &rarr;</a>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/services-career/future-starts-now.webp', 'alt' => 'Future Start Now button representing the beginning of your career journey'],
    ]" bg="bg-base-50" />

    {{-- §3 Executive Internship Highlight --}}
    <section class="bg-gradient-to-br from-primary-900 to-primary-700">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <x-badge variant="dark" size="md" :uppercase="false" class="mb-4">Premium Programme</x-badge>
                    <h2 class="text-3xl font-bold text-white mb-4 text-pretty" data-animate="fade-up">The Executive Internship Programme</h2>
                    <p class="text-primary-200 leading-relaxed mb-4 text-pretty">For business graduates and experienced professionals who want more than entry-level experience. Strategic placements with Australian employers, executive mentorship through our EIP partners, and a structured programme that runs twice a year.</p>
                    <p class="text-primary-200 leading-relaxed mb-6 text-pretty">Places are limited. Applications open before each intake.</p>
                    <a href="{{ route('programs.executive-internship') }}" class="inline-flex bg-white text-primary-800 font-semibold px-6 py-3 rounded-corner hover:bg-primary-50 transition-colors">Learn more about the Executive Internship Programme &rarr;</a>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/services-career/internship-professional.webp') }}" alt="Group of Asian business professionals meeting in a modern office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2] shadow-lg" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §4 CTA --}}
    <x-cta-banner title="Your career in Australia starts with a plan."
                  subtitle="We map your skills against Australian employment pathways and identify your work visa options before you're under pressure to figure it out alone."
                  primaryText="Book a Career Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
