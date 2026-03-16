<x-layout title="Graduate & Work Visas"
          description="Post-study work visa (Subclass 485), employer-sponsored visa (Subclass 482), Employer Nomination Scheme — assessed and managed by registered migration agents.">

    {{-- §1 Hero --}}
    <x-hero title="Your student visa has an end date. Your options after it don't have to be uncertain."
            subtitle="Post-study work visa (Subclass 485), employer-sponsored visa (Subclass 482), Employer Nomination Scheme — assessed and managed by the same team that handled your student visa."
            :image="asset('images/heroes/services-migration-graduate-work.webp')"
            alt="East Asian businesswoman arriving confidently at a modern office"
            :breadcrumbs="true" />

    {{-- §2 Post-Study Work Visa (Subclass 485) --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">Post-Study Work Visa (Subclass 485)</h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-pretty">The Subclass 485 lets you live, work, and study in Australia after completing your qualification. It's your bridge from study to career — and to potential permanent residence.</p>
                    <p class="text-gray-600 leading-relaxed mb-8 text-pretty">There are two streams:</p>

                    <div class="space-y-6">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-3">Graduate Work Stream</h3>
                            <x-facts-table :rows="[
                                ['key' => 'Duration', 'value' => '18 months'],
                                ['key' => 'Eligibility', 'value' => 'Skills and qualifications on a relevant Skilled Occupation List'],
                            ]" />
                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-3">Post-Study Work Stream</h3>
                            <x-data-table :headers="['Qualification', 'Visa Duration']"
                                          :rows="[
                                              ['Bachelor Degree', '2 years'],
                                              ['Master Degree', '3 years'],
                                              ['Doctoral Degree', '4 years'],
                                          ]" />
                        </div>
                    </div>
                </div>
                <div class="lg:w-[40%]">
                    <div class="bg-primary-50 rounded-corner-lg p-6">
                        <h3 class="font-bold text-gray-900 mb-4">Both streams include:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <span class="text-primary-600 font-bold mt-0.5">&#10003;</span>
                                <span class="text-gray-700 text-sm">Work rights in Australia</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-primary-600 font-bold mt-0.5">&#10003;</span>
                                <span class="text-gray-700 text-sm">Opportunity to gain Australian work experience</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-primary-600 font-bold mt-0.5">&#10003;</span>
                                <span class="text-gray-700 text-sm"><a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 hover:underline font-medium">Pathway to skilled migration &rarr;</a></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-primary-600 font-bold mt-0.5">&#10003;</span>
                                <span class="text-gray-700 text-sm">Family inclusion options</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/services-migration-graduate-work/graduate-at-desk.webp') }}" alt="East Asian graduate professional working at a desk in an Australian office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/services-migration-graduate-work/career-fair.webp') }}" alt="East Asian graduates networking at a career fair event" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §3 Employer Sponsored Visas --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Employer Sponsored Visas" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="bg-white rounded-corner-lg border border-gray-200 p-6">
                    <p class="text-xs font-semibold text-primary-800 mb-2">Subclass 482</p>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Temporary Skill Shortage (TSS)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed text-pretty">For skilled workers with a job offer from an approved Australian employer. Allows work in Australia for up to 4 years and can lead to permanent residence.</p>
                </div>
                <div class="bg-white rounded-corner-lg border border-gray-200 p-6">
                    <p class="text-xs font-semibold text-primary-800 mb-2">Direct pathway to permanent residence</p>
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Employer Nomination Scheme (ENS)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-3 text-pretty">Your employer nominates you for a permanent position. We manage the nomination application, labour market testing, and compliance.</p>
                    <a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 font-medium text-sm hover:underline">Permanent residence pathways &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §4 For Employers: SBS --}}
    <x-callout title="For Employers: Standard Business Sponsor (SBS)" variant="primary">
        <p class="text-sm mb-3">Need to hire international talent? We help Australian businesses become Standard Business Sponsors — a 5-year approval to sponsor skilled workers.</p>
        <ul class="space-y-1 text-sm">
            <li>&bull; SBS application preparation and lodgement</li>
            <li>&bull; Compliance training and ongoing obligation guidance</li>
            <li>&bull; Streamlined pathway to nominate workers</li>
        </ul>
    </x-callout>

    {{-- §5 What Comes Next? --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What Comes Next?" :centered="false" />
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <a href="{{ route('services.migration.permanent-residence') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Permanent residence pathways &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">From work visa to calling Australia home.</p>
                </a>
                <a href="{{ route('services.career') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Career services and job placement &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">Connecting graduates to Australian employers.</p>
                </a>
                <a href="{{ route('services.migration.student-visas') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Still studying? Student visa support &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">Subclass 500 assistance from the same team.</p>
                </a>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Graduated or about to?"
                  subtitle="We review your post-study options and tell you which visa applies, how long you have, and what to apply for next — before your student visa becomes a problem."
                  primaryText="Book a Work Visa Assessment"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
