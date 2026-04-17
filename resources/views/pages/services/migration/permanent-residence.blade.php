<x-layout title="Permanent Residence"
          description="From skills assessment and points optimisation to employer nomination and family reunification — every pathway is different, and the details matter.">

    {{-- §1 Hero --}}
    <x-hero title="Your path to Australian permanent residence starts with the right first step."
            subtitle="From skills assessment and points optimisation to employer nomination and family reunification — every pathway is different, and the details matter. We manage the application from start to finish."
            :image="asset('images/heroes/services-migration-permanent-residence.webp')"
            alt="East Asian mother walking happily with her children from home"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Pathways to Permanent Residence --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Pathways to Permanent Residence" :centered="false" />
            <div class="space-y-5" data-animate="stagger">

                {{-- Skilled Migration --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="flex flex-col lg:flex-row lg:gap-10">
                        <div class="lg:w-[280px] shrink-0 mb-4 lg:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                                    <x-heroicon-o-check-circle class="w-5 h-5" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-base-900">Skilled Migration</h3>
                                    <p class="text-xs font-semibold text-primary-800">Subclass 189 &middot; 190 &middot; 491</p>
                                </div>
                            </div>
                            <p class="text-base-500 text-xs mt-3"><strong>Best for:</strong> Professionals with <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 hover:underline">Australian qualifications and work experience</a> approaching the points threshold.</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Points-based system assessing age, English proficiency, qualifications, and work experience.</p>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Skills assessment</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">EOI preparation</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">State nomination</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Points optimisation</span>
                            </div>
                            <div class="bg-amber-50 border border-amber-200 rounded-corner p-3">
                                <p class="text-amber-800 text-sm font-medium text-pretty">If your points are too low, our experts can guide you through your next steps.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Employer Sponsored --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="flex flex-col lg:flex-row lg:gap-10">
                        <div class="lg:w-[280px] shrink-0 mb-4 lg:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                                    <x-heroicon-o-briefcase class="w-5 h-5" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-base-900">Employer Sponsored</h3>
                                    <p class="text-xs font-semibold text-primary-800">Subclass 186 &middot; 482</p>
                                </div>
                            </div>
                            <p class="text-base-500 text-xs mt-3"><strong>Best for:</strong> Workers with a confirmed job offer from an approved Australian employer.</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Your employer nominates you for permanent or temporary residence. We manage the full process.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Nomination application</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Labour market testing</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Sponsorship compliance</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Business Migration --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="flex flex-col lg:flex-row lg:gap-10">
                        <div class="lg:w-[280px] shrink-0 mb-4 lg:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                                    <x-heroicon-o-building-office class="w-5 h-5" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-base-900">Business Migration</h3>
                                </div>
                            </div>
                            <p class="text-base-500 text-xs mt-3"><strong>Best for:</strong> Experienced business operators with significant capital or a demonstrated track record.</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">For business owners, investors, and entrepreneurs planning to establish or invest in Australia.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Business plan development</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Investment guidance</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">State nomination</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Family & Partner --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="flex flex-col lg:flex-row lg:gap-10">
                        <div class="lg:w-[280px] shrink-0 mb-4 lg:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                                    <x-heroicon-o-users class="w-5 h-5" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-base-900">Family & Partner Visas</h3>
                                </div>
                            </div>
                            <p class="text-base-500 text-xs mt-3"><strong>Best for:</strong> Anyone with an eligible Australian citizen or permanent resident family member or partner.</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Partner, parent, and family reunification pathways — including representation if an application requires review.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Relationship evidence</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Financial sponsorship</span>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-50 text-primary-800">Health & character</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/services-migration-permanent-residence/new-home.webp', 'alt' => 'East Asian family settling into a new home in Australia'],
        ['src' => 'images/services-migration-permanent-residence/community-life.webp', 'alt' => 'East Asian family enjoying community life in an Australian neighbourhood'],
    ]" />

    {{-- §3 How It Works --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How It Works" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Skills Assessment', 'description' => 'Your occupation must be assessed by the relevant Australian authority before you can submit an Expression of Interest. We identify the appropriate assessing body for your field and coordinate the application.'],
                ['title' => 'Expression of Interest (EOI)', 'description' => 'Once assessed, you submit an EOI through SkillSelect. Invitations are issued in rounds — your points score determines when and whether you receive one. We optimise your points profile and advise on state nomination options that can increase your total.'],
                ['title' => 'Application', 'description' => 'Invitations are valid for 60 days. Once received, we prepare and lodge your visa application — documentation, health and character requirements, and compliance checks handled in full.'],
            ]" />
        </div>
    </section>

    {{-- §4 When It's More Complex --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-callout title="When It's More Complex" variant="info">
                <p class="text-sm mb-3 text-pretty">Not every application is straightforward. If you've previously had a visa refused or cancelled — or if your situation involves complex employer arrangements, an appeal, or Administrative Appeals Tribunal proceedings — we work alongside experienced immigration lawyers who specialise in exactly these matters.</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-1 text-sm font-semibold text-primary-800 hover:text-primary-600 transition-colors">Talk to us about your situation &rarr;</a>
            </x-callout>
        </div>
    </section>

    {{-- §5 What Comes Next? --}}
    <x-next-steps title="What Comes Next?" subtitle="Permanent residence changes what's possible. With status confirmed, the next steps are yours to choose." :links="[
        ['href' => route('services.career'), 'icon' => 'heroicon-o-rocket-launch', 'title' => 'Explore career support and employer connections', 'description' => 'Job placement, executive internships, and professional development.'],
        ['href' => route('contact'), 'icon' => 'heroicon-o-chat-bubble-left-right', 'title' => 'Talk to a migration agent', 'description' => 'Get an honest assessment of your PR pathway and timeline.'],
    ]" />

    {{-- §6 CTA --}}
    <x-cta-banner title="Eligible for PR?"
                  subtitle="We assess your qualifications, work history, and visa status, and tell you which pathways apply — and which don't. Straight answer, no speculation."
                  primaryText="Assess My PR Eligibility"
                  :primaryHref="route('contact')" />

</x-layout>
