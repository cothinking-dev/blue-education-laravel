<x-layout title="Graduate & Work Visas"
          description="Post-study work visa (Subclass 485), employer-sponsored visa (Subclass 482), Employer Nomination Scheme — assessed and managed by registered migration agents.">

    {{-- §1 Hero --}}
    <x-hero title="Your student visa has an end date. Your options after it don't have to be uncertain."
            subtitle="Post-study work visa (Subclass 485), employer-sponsored visa (Subclass 482), Employer Nomination Scheme — assessed and managed by the same team that handled your student visa."
            :image="asset('images/heroes/services-migration-graduate-work.webp')"
            alt="East Asian businesswoman arriving confidently at a modern office"
            position="top"
            :breadcrumbs="true" />

    {{-- §2 Post-Study Work Visa (Subclass 485) --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Post-Study Work Visa (Subclass 485)</h2>
            <p class="text-base-600 leading-relaxed mb-8 max-w-3xl text-pretty">The Subclass 485 lets you live, work, and study in Australia after completing your qualification. It's your bridge from study to career — and to potential permanent residence.</p>

            {{-- Two stream cards --}}
            <div class="grid sm:grid-cols-2 gap-6 mb-8" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-wrench-screwdriver class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-2">Graduate Work Stream</h3>
                    <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">For graduates with skills on a relevant Skilled Occupation List.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-base-500">Duration</span><span class="font-bold text-primary-800">18 months</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Eligibility</span><span class="font-medium text-base-900">Skilled Occupation List</span></div>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-2">Post-Study Work Stream</h3>
                    <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">Duration based on your qualification level.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-base-500">Bachelor</span><span class="font-bold text-primary-800">2 years</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Master</span><span class="font-bold text-primary-800">3 years</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Doctoral</span><span class="font-bold text-primary-800">4 years</span></div>
                    </div>
                </div>
            </div>

            {{-- Shared benefits bar --}}
            <div class="bg-primary-50 rounded-corner-lg px-6 py-4">
                <div class="flex flex-wrap gap-x-8 gap-y-2 items-center">
                    <span class="text-sm font-semibold text-base-900">Both streams include:</span>
                    <span class="flex items-center gap-2 text-sm text-base-700"><span class="text-primary-600 font-bold">&#10003;</span> Work rights</span>
                    <span class="flex items-center gap-2 text-sm text-base-700"><span class="text-primary-600 font-bold">&#10003;</span> Australian work experience</span>
                    <span class="flex items-center gap-2 text-sm text-base-700"><span class="text-primary-600 font-bold">&#10003;</span> <a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 hover:underline font-medium">Migration pathway &rarr;</a></span>
                    <span class="flex items-center gap-2 text-sm text-base-700"><span class="text-primary-600 font-bold">&#10003;</span> Family inclusion</span>
                </div>
            </div>
        </div>
    </section>

    <x-visual-break :images="[['src' => 'images/services-migration-graduate-work/perth-skyline.webp', 'alt' => 'Perth CBD skyline from Elizabeth Quay with waterfront greenery']]" padding="pt-14 pb-0" />

    {{-- §3 Employer Sponsored Visas + SBS --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Employer Sponsored Visas" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6 mb-8" data-animate="stagger">
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </div>
                    <p class="text-xs font-semibold text-primary-800 mb-2">Subclass 482</p>
                    <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Temporary Skill Shortage (TSS)</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">For skilled workers with a job offer from an approved Australian employer. Allows work in Australia for up to 4 years and can lead to permanent residence.</p>
                </div>
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-home-modern class="w-5 h-5" />
                    </div>
                    <p class="text-xs font-semibold text-primary-800 mb-2">Direct pathway to permanent residence</p>
                    <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Employer Nomination Scheme (ENS)</h3>
                    <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Your employer nominates you for a permanent position. We manage the nomination application, labour market testing, and compliance.</p>
                    <a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 font-medium text-sm hover:underline">Permanent residence pathways &rarr;</a>
                </div>
            </div>
            <x-callout title="For Employers: Standard Business Sponsor (SBS)" variant="primary">
                <p class="text-sm mb-3">Need to hire international talent? We help Australian businesses become Standard Business Sponsors — a 5-year approval to sponsor skilled workers.</p>
                <ul class="space-y-1 text-sm">
                    <li>&bull; SBS application preparation and lodgement</li>
                    <li>&bull; Compliance training and ongoing obligation guidance</li>
                    <li>&bull; Streamlined pathway to nominate workers</li>
                </ul>
            </x-callout>
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
                  subtitle="We review your post-study options and tell you which visa applies, how long you have, and what to apply for next — before your student visa becomes a problem."
                  primaryText="Book a Work Visa Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
