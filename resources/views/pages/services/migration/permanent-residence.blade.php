<x-layout title="Permanent Residence"
          description="From skills assessment and points optimisation to employer nomination and family reunification — every pathway is different, and the details matter.">

    {{-- §1 Hero --}}
    <x-hero title="Your path to Australian permanent residence starts with the right first step"
            subtitle="From skills assessment and points optimisation to employer nomination and family reunification — every pathway is different, and the details matter. We manage the application from start to finish."
            :image="asset('images/heroes/services-migration-permanent-residence.webp')"
            alt="East Asian mother walking happily with her children from home"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Pathways to Permanent Residence --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Pathways to Permanent Residence" :centered="false" />
            <div class="space-y-8" data-animate="stagger">

                {{-- Skilled Migration --}}
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="flex flex-col lg:flex-row lg:gap-10">
                        <div class="lg:w-[280px] shrink-0 mb-4 lg:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                                    <x-heroicon-o-check-circle class="w-5 h-5" />
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-base-900">Skilled Migration <span class="text-base-500 font-normal">(self-sponsored)</span></h3>
                                    <p class="text-xs font-semibold text-primary-800">Subclass 189 &middot; 190 &middot; 491</p>
                                </div>
                            </div>
                            <p class="text-base-500 text-xs mt-3"><strong>Best for:</strong> Skilled workers and professionals with relevant work experience and a required qualification approaching the points threshold.</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Points-based system assessing age, English proficiency, qualifications, and work experience.</p>
                            <x-icon-list variant="check" class="mb-3">
                                <x-icon-list.item>Skills assessment</x-icon-list.item>
                                <x-icon-list.item>EOI preparation</x-icon-list.item>
                                <x-icon-list.item>State nomination</x-icon-list.item>
                                <x-icon-list.item>Points optimisation</x-icon-list.item>
                            </x-icon-list>
                            <div class="bg-amber-50 border border-amber-200 rounded-corner p-3">
                                <p class="text-amber-800 text-sm font-medium text-pretty">If your points are too low, our experts can guide you through your next steps.</p>
                            </div>
                            <p class="text-base-400 text-[11px] mt-2">Note: applicants generally cannot be over 45 years of age at the time of invitation. <a href="#dama-appendix" class="text-primary-700 hover:underline">See DAMA pathways</a> for possible alternatives.</p>
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
                                    <p class="text-xs font-semibold text-primary-800">Subclass 482 &middot; 186</p>
                                </div>
                            </div>
                            <p class="text-base-500 text-xs mt-3"><strong>Best for:</strong> Sponsored skilled hire with an approved nomination by an Australian business who is an approved Standard Business Sponsor.</p>
                        </div>
                        <div class="flex-1">
                            <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Your employer nominates you for permanent or temporary residence. We manage the full process.</p>
                            <x-icon-list variant="check" class="mb-3">
                                <x-icon-list.item>Nomination application</x-icon-list.item>
                                <x-icon-list.item>Labour market testing</x-icon-list.item>
                                <x-icon-list.item>Sponsorship compliance</x-icon-list.item>
                            </x-icon-list>
                            <div class="bg-amber-50 border border-amber-200 rounded-corner p-3">
                                <p class="text-amber-800 text-sm font-medium text-pretty">The 482 visa has no fixed age limit, but permanent visas you may aim for afterwards (including 186 pathways) often have a threshold around 45. We assess the 482 as part of a broader strategy, not in isolation.</p>
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
                            <x-icon-list variant="check">
                                <x-icon-list.item>Relationship evidence</x-icon-list.item>
                                <x-icon-list.item>Financial sponsorship</x-icon-list.item>
                                <x-icon-list.item>Health &amp; character</x-icon-list.item>
                            </x-icon-list>
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

    {{-- §3 How It Works (self-sponsored skilled visas only) --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How It Works" :centered="false" />
            <p class="text-base-500 text-sm mb-6 -mt-2 text-pretty">The following steps apply to self-sponsored skilled visas (subclasses 189, 190, 491). Employer-sponsored and family/partner pathways follow a different process.</p>
            <x-timeline :steps="[
                ['title' => 'Skills assessment', 'description' => 'For most points-tested skilled visas, you will need a suitable skills assessment in your nominated occupation before you can be invited to apply. We help identify the correct assessing authority for your field and guide you through the skills assessment process so it fits into your overall migration strategy.'],
                ['title' => 'Expression of Interest (EOI)', 'description' => 'Once your skills and background are aligned with an eligible occupation, you submit an Expression of Interest through SkillSelect. EOIs are ranked and invitations are issued in selection rounds based on current program settings and your points score. We work with you to strengthen your points profile where possible and explain state or territory nomination pathways that may increase your total points or improve your prospects.'],
                ['title' => 'Visa application', 'description' => 'If you receive an invitation, you have a limited time (often around 60 days under current settings) to lodge a complete application. We help you prepare and submit the visa application, including documentation, health and character requirements, and compliance checks, so your case is presented clearly and in line with current requirements.'],
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
    <x-next-steps bg="bg-white" title="What Comes Next?" subtitle="Permanent residence changes what is possible, from how long you can stay to the types of work and study you can take on. Once your status is confirmed, you can focus on building the life and career you want in Australia." :links="[
        ['href' => route('services.career'), 'icon' => 'heroicon-o-rocket-launch', 'title' => 'Explore career and job-ready support', 'description' => 'Career counselling, resume and interview preparation, job search strategies, internships and work opportunities, tailored for new graduates and new migrants.'],
        ['href' => route('contact'), 'icon' => 'heroicon-o-chat-bubble-left-right', 'title' => 'Talk to a migration agent', 'description' => 'Get a clear, honest view of your longer-term visa options, timelines and obligations, so you know how permanent residence fits into your wider study, work and family plans.'],
    ]" />

    {{-- Visual break before DAMA --}}
    <x-visual-break />

    {{-- DAMA Pathways --}}
    <section id="dama-appendix" class="bg-base-50 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-2xl font-bold text-base-900 mb-3" data-animate="fade-up">DAMA Pathways</h2>
            <p class="text-base-600 leading-relaxed mb-6 max-w-3xl text-pretty">A Designated Area Migration Agreement (DAMA) is a formal arrangement between the Australian Government and a regional, state or territory authority. It allows local employers to sponsor overseas workers in occupations or under conditions that fall outside the standard skilled visa programs. DAMA is not the first option for every graduate or employer, but for the right occupation and location it can open doors that standard skilled visas do not.</p>

            <div class="space-y-3">
                <details open class="group border border-base-200 rounded-corner-lg overflow-hidden bg-white transition-shadow hover:shadow-sm">
                    <summary class="flex items-center justify-between gap-4 px-6 py-4 cursor-pointer select-none bg-base-50 hover:bg-base-100 transition-colors">
                        <span class="font-semibold text-base-900 text-sm">When is it worth considering a DAMA pathway?</span>
                        <x-heroicon-m-chevron-down class="w-5 h-5 text-base-400 shrink-0 transition-transform duration-200 group-open:rotate-180" aria-hidden="true" />
                    </summary>
                    <div class="grid grid-rows-[0fr] group-open:grid-rows-[1fr] transition-[grid-template-rows] duration-200 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-6 pb-5 text-base-600 text-sm leading-relaxed text-pretty border-t border-base-100 pt-4">
                                <p class="mb-3">A DAMA pathway is usually worth exploring when:</p>
                                <x-icon-list variant="check">
                                    <x-icon-list.item>Your occupation is not available, or is very limited, under the standard skilled migration or employer-sponsored visa programs.</x-icon-list.item>
                                    <x-icon-list.item>An employer wants to sponsor you but is struggling to meet standard requirements for things like English, age, work experience or salary, and your role may be covered by an approved DAMA occupation list.</x-icon-list.item>
                                    <x-icon-list.item>You are working in a regional or designated area where local employers are using DAMA to fill long-term skills shortages.</x-icon-list.item>
                                    <x-icon-list.item>You and your employer are both looking at a medium-to-long-term pathway (not just a short job), and are prepared for the extra endorsement and compliance steps that come with a labour agreement.</x-icon-list.item>
                                </x-icon-list>
                                <p class="mt-4">We look at DAMA only after checking whether simpler, standard pathways are available first.</p>
                            </div>
                        </div>
                    </div>
                </details>

                <details class="group border border-base-200 rounded-corner-lg overflow-hidden bg-white transition-shadow hover:shadow-sm">
                    <summary class="flex items-center justify-between gap-4 px-6 py-4 cursor-pointer select-none bg-base-50 hover:bg-base-100 transition-colors">
                        <span class="font-semibold text-base-900 text-sm">Why Western Australia is a strong option now</span>
                        <x-heroicon-m-chevron-down class="w-5 h-5 text-base-400 shrink-0 transition-transform duration-200 group-open:rotate-180" aria-hidden="true" />
                    </summary>
                    <div class="grid grid-rows-[0fr] group-open:grid-rows-[1fr] transition-[grid-template-rows] duration-200 ease-in-out">
                        <div class="overflow-hidden">
                            <div class="px-6 pb-5 text-base-600 text-sm leading-relaxed text-pretty border-t border-base-100 pt-4">
                                <p class="mb-3">Western Australia is currently one of the most active states for DAMA use, with a state-wide WA DAMA designed to give both metropolitan and regional employers more options to sponsor skilled and semi-skilled workers where standard visas are too restrictive.</p>
                                <p class="mb-4">For people already living and working in WA, this can create additional employer-sponsored and permanent residence pathways that are not available in other states or under standard programs alone.</p>
                                <h4 class="font-semibold text-base-900 mb-3">Key advantages of the WA DAMA</h4>
                                <x-definition-grid :columns="1" :items="[
                                    ['term' => 'State-wide coverage, not just remote pockets', 'description' => 'The WA DAMA applies across the state, including metropolitan Perth and regional areas, instead of being limited to a handful of regional zones. More employers across WA can potentially access DAMA concessions if they qualify.'],
                                    ['term' => 'Large number of places and occupations', 'description' => 'The WA DAMA, combined with state nomination, can support thousands of overseas workers each year, with places split between metro and regional employers and a broader occupation list than standard skilled programs.'],
                                    ['term' => 'Concessions compared to standard visas', 'description' => 'Eligible employers can seek concessions to standard migration settings (for example in English, income thresholds and age) where that is built into the agreement. This can turn roles that are hard to fill under normal rules into viable sponsorship options.'],
                                    ['term' => 'Staged transition with protections', 'description' => 'As existing regional DAMAs reach their expiry dates, businesses can keep using their current agreements up to those dates, and individual labour agreements remain valid. A "no disadvantage" principle is being developed to support the shift into the WA DAMA, with grandfathering arrangements anticipated.'],
                                ]" />
                            </div>
                        </div>
                    </div>
                </details>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Eligible for PR?"
                  subtitle="We assess your qualifications, work history, and visa status, and tell you which pathways apply — and which don't. Straight answer, no speculation."
                  primaryText="Assess My PR Eligibility"
                  :primaryHref="route('contact')" />

</x-layout>
