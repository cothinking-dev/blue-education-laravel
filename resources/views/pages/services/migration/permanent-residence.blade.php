<x-layout title="Permanent Residence"
          description="From skills assessment and points optimisation to employer nomination and family reunification — every pathway is different, and the details matter.">

    {{-- §1 Hero --}}
    <x-hero title="Your path to Australian permanent residence starts with the right first step."
            subtitle="From skills assessment and points optimisation to employer nomination and family reunification — every pathway is different, and the details matter. We manage the application from start to finish."
            :image="asset('images/heroes/services-migration-permanent-residence.webp')"
            alt="Family arriving in Australia for a new life"
            variant="left" />

    {{-- §2 Pathways to Permanent Residence --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Pathways to Permanent Residence</h2>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-check-circle class="w-5 h-5" />
                    </div>
                    <p class="text-xs font-semibold text-primary-800 mb-1">Subclass 189 &middot; 190 &middot; 491</p>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Skilled Migration</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">For qualified professionals with skills in demand in Australia. The points-based system assesses age, English proficiency, qualifications, and work experience. We handle skills assessment coordination, EOI preparation, and state nomination applications.</p>
                    <div class="bg-amber-50 border border-amber-200 rounded-corner p-3 mb-4">
                        <p class="text-amber-800 text-sm font-medium text-pretty">If your points are too low, we tell you — and show you exactly what to do about it.</p>
                    </div>
                    <p class="text-gray-500 text-xs text-pretty"><strong>Best for:</strong> Professionals with <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 hover:underline">Australian qualifications and work experience</a> who meet or are approaching the points threshold.</p>
                </div>

                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </div>
                    <p class="text-xs font-semibold text-primary-800 mb-1">Subclass 186 &middot; 482</p>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Employer Sponsored Migration</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">Your employer nominates you for permanent or temporary residence. We manage the nomination application, labour market testing requirements, and sponsorship compliance throughout.</p>
                    <p class="text-gray-500 text-xs text-pretty"><strong>Best for:</strong> Workers with a confirmed job offer from an approved Australian employer who cannot find a suitably skilled local candidate.</p>
                </div>

                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-building-office class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Business Migration</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">For business owners, investors, and entrepreneurs planning to establish or invest in Australia. We support business plan development, investment requirement guidance, and state nomination applications.</p>
                    <p class="text-gray-500 text-xs text-pretty"><strong>Best for:</strong> Experienced business operators with significant capital or a demonstrated track record in business ownership or management.</p>
                </div>

                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-users class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Family & Partner Visas</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">Partner, parent, and family reunification pathways for those with Australian citizen or permanent resident family members. We compile relationship evidence, manage financial sponsorship documentation, and coordinate health and character requirements — including representation if the application requires a review.</p>
                    <p class="text-gray-500 text-xs text-pretty"><strong>Best for:</strong> Anyone with an eligible Australian citizen, permanent resident, or eligible NZ citizen family member or partner.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/services-migration-permanent-residence/new-home.webp') }}" alt="Family settling into a new home in Australia" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/services-migration-permanent-residence/community-life.webp') }}" alt="Multicultural community life in an Australian neighbourhood" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §3 How It Works --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-pretty" data-animate="fade-up">How It Works</h2>
            <x-timeline :steps="[
                ['title' => 'Skills Assessment', 'description' => 'Your occupation must be assessed by the relevant Australian authority before you can submit an Expression of Interest. We identify the appropriate assessing body for your field and coordinate the application.'],
                ['title' => 'Expression of Interest (EOI)', 'description' => 'Once assessed, you submit an EOI through SkillSelect. Invitations are issued in rounds — your points score determines when and whether you receive one. We optimise your points profile and advise on state nomination options that can increase your total.'],
                ['title' => 'Application', 'description' => 'Invitations are valid for 60 days. Once received, we prepare and lodge your visa application — documentation, health and character requirements, and compliance checks handled in full.'],
            ]" />
        </div>
    </section>

    {{-- §4 When It's More Complex --}}
    <x-callout title="When It's More Complex" variant="info">
        <p class="text-sm mb-3 text-pretty">Not every application is straightforward. If you've previously had a visa refused or cancelled — or if your situation involves complex employer arrangements, an appeal, or Administrative Appeals Tribunal proceedings — we work alongside experienced immigration lawyers who specialise in exactly these matters.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-1 text-sm font-semibold text-primary-800 hover:text-primary-600 transition-colors">Talk to us about your situation &rarr;</a>
    </x-callout>

    {{-- §5 What Comes Next? --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">What Comes Next?</h2>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <a href="{{ route('services.career') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Explore career support and employer connections &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">Job placement, executive internships, and professional development.</p>
                </a>
                <a href="{{ route('contact') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Talk to a migration agent &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">Get an honest assessment of your PR pathway and timeline.</p>
                </a>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Eligible for PR?"
                  subtitle="We assess your qualifications, work history, and visa status, and tell you which pathways apply — and which don't. Straight answer, no speculation."
                  primaryText="Assess My PR Eligibility"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
