<x-layout title="Graduate & Work Visas"
          description="Your student visa has an end date, but your future doesn't. Post-study work visas, employer-sponsored visas and permanent residence pathways, guided by the same team.">

    {{-- §1 Hero --}}
    <x-hero title="Your student visa has an end date, but your future doesn't. You can plan it from the start"
            subtitle="The same team that supported your student visa can also guide you through your post-study options. That includes post-study work visas (Subclass 485), employer-sponsored visas (Subclass 482) and Employer Nomination Scheme pathways. We help you understand your choices and plan your next steps in Australia."
            :image="asset('images/heroes/services-migration-graduate-work.webp')"
            alt="East Asian businesswoman arriving confidently at a modern office"
            position="top"
            :breadcrumbs="true" />

    {{-- §2a Temporary Graduate Visa (Subclass 485) — Intro + Streams --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Temporary Graduate Visa (Subclass 485)</h2>
            <p class="text-base-600 leading-relaxed mb-4 max-w-3xl text-pretty">The Temporary Graduate visa (subclass 485) lets eligible international graduates stay in Australia for a limited time after they finish studying, so they can gain local work experience, build professional connections and plan their next visa steps.</p>
            <p class="text-base-600 leading-relaxed mb-8 max-w-3xl text-pretty">It is often the bridge between a student visa and longer-term options such as skilled migration or employer sponsorship.</p>

            <h3 class="text-xl font-bold text-base-900 mb-4">Streams at a glance</h3>
            <p class="text-base-600 text-sm leading-relaxed mb-6 text-pretty">There are different 485 streams, depending on what you studied and how you meet the Australian Study Requirement:</p>

            {{-- Three stream cards with badges --}}
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-wrench-screwdriver class="w-5 h-5" />
                    </div>
                    <span class="inline-block text-xs font-medium px-2.5 py-0.5 rounded-full bg-amber-100 text-amber-800 mb-2">VET / Diploma / Trade</span>
                    <h4 class="text-lg font-bold text-base-900 mb-2">Post-Vocational Education Work</h4>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">For graduates with an associate degree, diploma or trade qualification related to an occupation on the skilled occupation list. Allows a period of post-study stay so you can work and gain experience in your field.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <span class="inline-block text-xs font-medium px-2.5 py-0.5 rounded-full bg-primary-100 text-primary-800 mb-2">Bachelor's / Master's / PhD</span>
                    <h4 class="text-lg font-bold text-base-900 mb-2">Post-Higher Education Work</h4>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">For graduates who have completed a bachelor degree, master's or PhD with a CRICOS-registered provider. The length of stay depends on your qualification and current policy settings, but commonly gives you several years in Australia after graduation.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-arrow-path class="w-5 h-5" />
                    </div>
                    <span class="inline-block text-xs font-medium px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 mb-2">Regional extension</span>
                    <h4 class="text-lg font-bold text-base-900 mb-2">Second Post-Higher Education Work</h4>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Available to some graduates who already hold a Post-Higher Education Work 485 visa and meet regional study and living requirements, providing an additional period of stay in Australia.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[['src' => 'images/services-migration-graduate-work/perth-skyline.webp', 'alt' => 'Perth CBD skyline from Elizabeth Quay with waterfront greenery']]" />

    {{-- §2b What you can do on a 485 visa — benefit cards --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h3 class="text-xl font-bold text-base-900 mb-4" data-animate="fade-up">What you can do on a 485 visa</h3>
            <p class="text-base-600 text-sm mb-6 text-pretty">Holding a 485 visa typically allows you to:</p>

            {{-- Benefit cards — filled bg, no border, large circle icons —  distinct from stream cards --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5" data-animate="stagger">
                <div class="rounded-corner-lg p-6 bg-primary-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-home-modern class="w-6 h-6" />
                    </div>
                    <h4 class="font-semibold text-base-900 mb-1">Live in Australia</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Live in Australia temporarily after you complete your eligible course.</p>
                </div>
                <div class="rounded-corner-lg p-6 bg-emerald-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-briefcase class="w-6 h-6" />
                    </div>
                    <h4 class="font-semibold text-base-900 mb-1">Work full-time</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Work full-time and gain Australian work experience.</p>
                </div>
                <div class="rounded-corner-lg p-6 bg-amber-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-6 h-6" />
                    </div>
                    <h4 class="font-semibold text-base-900 mb-1">Study further</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Study further if you want to upskill or change direction.</p>
                </div>
                <div class="rounded-corner-lg p-6 bg-violet-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-violet-100 text-violet-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-user-group class="w-6 h-6" />
                    </div>
                    <h4 class="font-semibold text-base-900 mb-1">Include family</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Include eligible family members in your application.</p>
                </div>
                <div class="rounded-corner-lg p-6 bg-sky-50 flex flex-col items-start sm:col-span-2 lg:col-span-1 lg:mx-0 sm:mx-auto sm:max-w-sm lg:max-w-none">
                    <div class="w-12 h-12 rounded-full bg-sky-100 text-sky-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-arrow-trending-up class="w-6 h-6" />
                    </div>
                    <h4 class="font-semibold text-base-900 mb-1">Build your visa pathway</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Use your Australian work history to support future skilled or employer-sponsored visa options. <a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 hover:underline font-medium">Migration pathways &rarr;</a></p>
                </div>
            </div>

            <p class="text-base-700 leading-relaxed mt-8 max-w-3xl text-pretty font-medium">For many students, this visa is a key part of turning Australian study into real career opportunities.</p>
        </div>
    </section>

    {{-- §2c Eligibility + How we help --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-10">
                {{-- Eligibility — contained reference card --}}
                <div class="flex-1" data-animate="fade-up">
                    <h3 class="text-xl font-bold text-base-900 mb-4">Eligibility snapshot</h3>
                    <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                        <p class="text-base-600 text-sm mb-4 text-pretty">Requirements differ by stream, but common elements include:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">1</span>
                                <p class="text-base-600 text-sm">Being under the relevant <strong>age limit</strong> at the time of application</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">2</span>
                                <p class="text-base-600 text-sm">Holding, or having held, an <strong>eligible student visa</strong></p>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">3</span>
                                <p class="text-base-600 text-sm">Completing a <strong>CRICOS-registered course</strong> meeting the Australian Study Requirement</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">4</span>
                                <p class="text-base-600 text-sm">Meeting <strong>English language, health and character</strong> requirements</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="w-6 h-6 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0 mt-0.5 text-xs font-bold">5</span>
                                <p class="text-base-600 text-sm">For some streams, a qualification on the <strong>skilled list</strong> and a Provisional Skills Assessment (PSA)</p>
                            </li>
                        </ul>
                        <p class="text-xs text-base-500 mt-4 text-pretty">Because the rules are detailed and change over time, we always look at your individual study history, visa history and goals before recommending a pathway.</p>
                    </div>
                </div>

                {{-- How we help — warm CTA block --}}
                <div class="flex-1" data-animate="fade-up">
                    <h3 class="text-xl font-bold text-base-900 mb-4">How Blue Education helps with your 485 visa</h3>
                    <div class="bg-primary-800 text-white rounded-corner-lg p-6">
                        <p class="text-primary-100 text-sm leading-relaxed mb-4 text-pretty">At Blue Education, we often know your story from the moment you start planning your studies, which puts us in a strong position to support you at graduation. We can:</p>
                        <x-icon-list variant="check" theme="dark">
                            <x-icon-list.item>Review your eligibility and confirm which 485 stream may fit your situation.</x-icon-list.item>
                            <x-icon-list.item>Plan timelines so you apply within the required window after your course completion.</x-icon-list.item>
                            <x-icon-list.item>Guide you through English, health checks, police clearances and any skills assessment steps that may be relevant.</x-icon-list.item>
                            <x-icon-list.item>Prepare and lodge your application and show you how a 485 visa can fit into a broader plan, such as skilled migration, regional options or employer sponsorship.</x-icon-list.item>
                        </x-icon-list>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-2.5 mt-6 rounded-corner bg-white text-primary-800 text-sm font-semibold hover:bg-primary-50 transition-colors">Discuss Your 485 Options &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Divider — transition to employer section --}}
    <x-visual-break :images="[['src' => 'images/services-migration-graduate-work/career-fair.webp', 'alt' => 'Diverse recruitment team reviewing a graduate candidate\'s CV and discussing a job offer']]" />

    {{-- §3a Employer Sponsored Visa Opportunities — Intro + Pathways --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Employer Sponsored Visa Opportunities</h2>
            <p class="text-base-600 leading-relaxed mb-8 max-w-3xl text-pretty">For some graduates, the next step after a student visa or Temporary Graduate visa is employer sponsorship. If an Australian business is willing to sponsor you for a genuine skilled role, this may create a pathway to keep working in Australia on a temporary visa and, in some cases, work towards permanent residence later on.</p>

            <x-callout title="Why this matters" variant="info" class="max-w-3xl mb-8">
                <x-slot:icon><x-heroicon-o-information-circle class="w-6 h-6" /></x-slot:icon>
                <p class="mb-3 text-pretty">Employer sponsorship is not a single application or a guaranteed outcome. It usually involves both the employer and the visa applicant meeting separate requirements, including the business being eligible to sponsor, the role meeting visa criteria, and the worker meeting the relevant skills, English, health and character requirements.</p>
                <p class="font-medium italic text-pretty">Just remember: it takes two to tango.</p>
            </x-callout>

            <h3 class="text-xl font-bold text-base-900 mb-4">Main pathways</h3>

            {{-- 3 visa pathway cards --}}
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white flex flex-col">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </div>
                    <span class="self-start text-xs font-medium px-2.5 py-0.5 rounded-full bg-primary-100 text-primary-800 mb-2">Temporary</span>
                    <h4 class="text-lg font-bold text-base-900 mb-2">Skills in Demand Visa (Subclass 482)</h4>
                    <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">The subclass 482 visa is a temporary employer-sponsored visa for skilled workers nominated by an approved employer. It allows eligible workers to live and work in Australia in a nominated role, and for many applicants it becomes the first step in an employer-sponsored migration pathway.</p>
                    <div class="border-t border-base-200 pt-4 mt-auto">
                        <p class="text-[11px] font-semibold text-primary-700 uppercase tracking-wide mb-2">Who this may suit</p>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">This option may suit graduates who have secured a job offer from an employer willing to sponsor them in an eligible occupation. The exact requirements depend on the stream, occupation, salary level and your background.</p>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white flex flex-col">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-map-pin class="w-5 h-5" />
                    </div>
                    <span class="self-start text-xs font-medium px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 mb-2">Regional</span>
                    <h4 class="text-lg font-bold text-base-900 mb-2">Skilled Employer Sponsored Regional (Subclass 494)</h4>
                    <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">The subclass 494 visa is for skilled workers who are nominated by an eligible employer in a designated regional area of Australia. It is a provisional visa and can provide a pathway to permanent residence for eligible applicants who continue to meet the requirements.</p>
                    <div class="border-t border-base-200 pt-4 mt-auto">
                        <p class="text-[11px] font-semibold text-emerald-700 uppercase tracking-wide mb-2">When this is relevant</p>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">This pathway can be relevant if you are working or planning to work in regional Australia and have an employer ready to support your application in a genuine regional position.</p>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white flex flex-col">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-home-modern class="w-5 h-5" />
                    </div>
                    <span class="self-start text-xs font-medium px-2.5 py-0.5 rounded-full bg-amber-100 text-amber-800 mb-2">Permanent</span>
                    <h4 class="text-lg font-bold text-base-900 mb-2">Employer Nomination Scheme (Subclass 186)</h4>
                    <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">The subclass 186 visa is a permanent employer-sponsored visa for eligible skilled workers nominated by an Australian employer. Depending on the stream, this may be an option for applicants who already have employer-sponsored work experience in Australia or who meet direct entry criteria.</p>
                    <div class="border-t border-base-200 pt-4 mt-auto">
                        <p class="text-[11px] font-semibold text-amber-700 uppercase tracking-wide mb-2">Worth knowing</p>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">This is not an automatic next step for every graduate, but for the right applicant and employer, it may become part of a longer-term strategy towards permanent residence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §3b How employer sponsorship works — 3 process cards --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h3 class="text-xl font-bold text-base-900 mb-6" data-animate="fade-up">How employer sponsorship works</h3>
            <div class="grid sm:grid-cols-3 gap-5" data-animate="stagger">
                <div class="rounded-corner-lg p-6 bg-primary-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-building-office class="w-6 h-6" />
                    </div>
                    <span class="text-xs font-bold text-primary-800 mb-1">Step 1</span>
                    <h4 class="font-semibold text-base-900 mb-2">Employer sponsorship eligibility</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Before sponsoring a worker, the employer usually needs to be approved by the Department of Home Affairs as a sponsor. This is a separate step from the worker's visa application.</p>
                </div>
                <div class="rounded-corner-lg p-6 bg-emerald-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-document-check class="w-6 h-6" />
                    </div>
                    <span class="text-xs font-bold text-emerald-800 mb-1">Step 2</span>
                    <h4 class="font-semibold text-base-900 mb-2">Nomination of the role</h4>
                    <p class="text-base-600 text-sm leading-relaxed">The employer then nominates the position they want to fill, and the role must meet the relevant visa criteria, including occupation and salary requirements.</p>
                </div>
                <div class="rounded-corner-lg p-6 bg-amber-50 flex flex-col items-start">
                    <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-user-circle class="w-6 h-6" />
                    </div>
                    <span class="text-xs font-bold text-amber-800 mb-1">Step 3</span>
                    <h4 class="font-semibold text-base-900 mb-2">Visa application by the worker</h4>
                    <p class="text-base-600 text-sm leading-relaxed">Once the sponsorship and nomination requirements are in place, the worker can proceed with the visa application and must meet the criteria including English, skills, health and character requirements.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §3c Two-column: Employer note + How we help --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-10">
                {{-- Important note for employers --}}
                <x-card class="flex-1"
                        title="Important note for employers"
                        :image="asset('images/services-migration-graduate-work/employer-handshake.webp')"
                        alt="Employer and job candidate shaking hands after a successful interview"
                        :gradient="true"
                        aspect="16/9"
                        data-animate="fade-up">
                    <p class="text-base-600 leading-relaxed mb-3 text-pretty">One of the most common misunderstandings about employer-sponsored visas is that only the worker needs to apply.</p>
                    <p class="text-base-600 leading-relaxed text-pretty">In reality, the employer may first need to <strong>become an approved sponsor</strong>, then <strong>nominate the role</strong>, before the worker can lodge their visa application. This is why employer-sponsored migration needs planning on both sides.</p>
                </x-card>

                {{-- How we help — dark CTA --}}
                <div class="flex-1" data-animate="fade-up">
                    <h3 class="text-xl font-bold text-base-900 mb-4">How Blue Education helps</h3>
                    <div class="bg-primary-800 text-white rounded-corner-lg p-6">
                        <p class="text-primary-100 text-sm leading-relaxed mb-4 text-pretty">We help graduates understand whether employer sponsorship may be realistic based on their course, occupation, work experience and visa history. Where sponsorship may be possible, we can also work with employers to explain the process, identify the relevant pathway, and support the nomination and visa application stages in a clear and organised way.</p>
                        <x-icon-list variant="check" theme="dark">
                            <x-icon-list.item>Assess whether a 482, 494 or 186 pathway may be relevant</x-icon-list.item>
                            <x-icon-list.item>Review your occupation, qualifications and work history against visa requirements</x-icon-list.item>
                            <x-icon-list.item>Help employers understand sponsorship approval and nomination steps</x-icon-list.item>
                            <x-icon-list.item>Support the preparation and lodgement of the visa application once the pathway is confirmed</x-icon-list.item>
                        </x-icon-list>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-2.5 mt-6 rounded-corner bg-white text-primary-800 text-sm font-semibold hover:bg-primary-50 transition-colors">Discuss Employer Sponsorship &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §3d Standard Business Sponsor (SBS) --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                {{-- Content — 2/3 width --}}
                <div class="lg:col-span-2" data-animate="fade-up">
                    <h3 class="text-xl font-bold text-base-900 mb-4">What is a Standard Business Sponsor (SBS)?</h3>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">To sponsor someone on a Skills in Demand (subclass 482) or Skilled Employer Sponsored Regional (subclass 494) visa, most Australian businesses must first be approved as a Standard Business Sponsor by the Department of Home Affairs. This is a separate approval that confirms your business is genuine, lawfully operating and suitable to sponsor overseas workers.</p>

                    <h4 class="font-semibold text-base-900 mb-3">What does the SBS application involve?</h4>
                    <p class="text-base-600 text-sm mb-3 text-pretty">In simple terms, an SBS application asks your business to:</p>
                    <x-icon-list variant="shield">
                        <x-icon-list.item>Show that you are <strong>legally operating</strong> in Australia (for example, ABN/ASIC registration and basic business details)</x-icon-list.item>
                        <x-icon-list.item>Show that you are <strong>financially viable and active</strong>, with evidence that you are actually trading and can pay your staff</x-icon-list.item>
                        <x-icon-list.item>Confirm you follow Australian <strong>workplace and anti-discrimination laws</strong>, and that there is no serious negative information about your business</x-icon-list.item>
                    </x-icon-list>

                    <div class="mt-8 bg-primary-50 border border-primary-100 rounded-corner-lg p-6 sm:p-8 flex flex-col gap-4 items-start">
                        <p class="text-base-800 font-medium text-pretty">We can help employers understand whether SBS is right for them, gather the core documents, and walk through the application so the information you provide is clear, consistent and aligned with current sponsorship obligations.</p>
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors whitespace-nowrap">Talk to Us About SBS &rarr;</a>
                    </div>
                </div>

                {{-- Image — 1/3 width, sticky on desktop so it tracks with the content --}}
                <div class="lg:col-span-1 lg:sticky lg:top-24 lg:self-start" data-animate="fade-up">
                    <img src="{{ asset('images/services-migration-graduate-work/sbs-business-owner.webp') }}"
                         alt="Confident young Asian business owner portrait, representing an approved Standard Business Sponsor"
                         class="rounded-corner-lg w-full h-auto object-cover shadow-lg aspect-[3/4]"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §4 What Comes Next? --}}
    <x-next-steps title="What Comes Next?" :links="[
        ['href' => route('services.migration.permanent-residence'), 'icon' => 'heroicon-o-flag', 'title' => 'Permanent residence pathways', 'description' => 'From work visa to calling Australia home.'],
        ['href' => route('services.career'), 'icon' => 'heroicon-o-rocket-launch', 'title' => 'Career services and job placement', 'description' => 'Connecting graduates to Australian employers.'],
        ['href' => route('services.migration.student-visas'), 'icon' => 'heroicon-o-academic-cap', 'title' => 'Still studying? Student visa support', 'description' => 'Subclass 500 assistance from the same team.'],
    ]" />

    {{-- §6 CTA --}}
    <x-cta-banner title="Graduated or about to?"
                  subtitle="We review your post-study options and tell you which visa applies, how long you have, and what to apply for next, before your student visa becomes a problem."
                  primaryText="Book a Work Visa Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
