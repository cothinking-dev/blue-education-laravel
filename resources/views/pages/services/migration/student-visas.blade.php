<x-layout title="Student Visas"
          description="Registered migration agents handle your Subclass 500 application end to end — eligibility, documents, GTE statement, and lodgement.">

    {{-- §1 Hero --}}
    <x-hero title="Study in Australia starts with the right visa application."
            subtitle="Registered migration agents handle your Subclass 500 application end to end — eligibility, documents, GTE statement, and lodgement."
            :image="asset('images/heroes/services-migration-student-visas.webp')"
            alt="Two East Asian students checking flight information at the airport"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 What Is a Student Visa? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What Is a Student Visa?</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">The Student Visa (Subclass 500) allows international students to study full-time at a registered Australian institution — covering courses from primary school through to doctoral programmes.</p>
                    <p class="text-base-600 leading-relaxed text-pretty">A well-prepared application moves through the system cleanly. Your advisor handles the document compilation, GTE statement, and lodgement so nothing gets missed.</p>

                    {{-- Decorative illustration --}}
                    <div class="hidden lg:flex items-center justify-center mt-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 180" class="w-full max-w-sm text-primary-800" fill="none">
                            {{-- Passport booklet --}}
                            <rect x="40" y="20" width="120" height="150" rx="6" class="fill-primary-50 stroke-primary-200" stroke-width="1.5"/>
                            <rect x="50" y="30" width="100" height="130" rx="4" class="fill-white stroke-primary-200" stroke-width="1"/>
                            {{-- Passport emblem circle --}}
                            <circle cx="100" cy="75" r="22" class="fill-primary-100 stroke-primary-300" stroke-width="1"/>
                            <circle cx="100" cy="75" r="16" class="stroke-primary-300" stroke-width="0.75" fill="none"/>
                            {{-- Passport text lines --}}
                            <rect x="72" y="108" width="56" height="4" rx="2" class="fill-primary-200"/>
                            <rect x="80" y="118" width="40" height="3" rx="1.5" class="fill-primary-100"/>
                            <rect x="76" y="127" width="48" height="3" rx="1.5" class="fill-primary-100"/>
                            <rect x="84" y="136" width="32" height="3" rx="1.5" class="fill-primary-100"/>

                            {{-- Boarding pass --}}
                            <rect x="170" y="55" width="155" height="90" rx="6" class="fill-white stroke-primary-200" stroke-width="1.5"/>
                            {{-- Boarding pass header stripe --}}
                            <rect x="170" y="55" width="155" height="22" rx="6" class="fill-primary-800"/>
                            <rect x="170" y="68" width="155" height="9" class="fill-primary-800"/>
                            {{-- Header text --}}
                            <rect x="182" y="62" width="50" height="4" rx="2" fill="white" opacity="0.8"/>
                            {{-- Ticket details --}}
                            <rect x="182" y="88" width="36" height="3" rx="1.5" class="fill-primary-200"/>
                            <rect x="182" y="96" width="28" height="5" rx="2" class="fill-primary-800" opacity="0.7"/>
                            <rect x="272" y="88" width="36" height="3" rx="1.5" class="fill-primary-200"/>
                            <rect x="272" y="96" width="28" height="5" rx="2" class="fill-primary-800" opacity="0.7"/>
                            {{-- Arrow between cities --}}
                            <path d="M224 97 L260 97" class="stroke-primary-300" stroke-width="1.5" stroke-dasharray="4 3"/>
                            <path d="M256 94 L262 97 L256 100" class="stroke-primary-300" stroke-width="1.5" fill="none"/>
                            {{-- Barcode --}}
                            <g class="fill-primary-200" opacity="0.5">
                                @for($i = 0; $i < 18; $i++)
                                    <rect x="{{ 182 + $i * 7 }}" y="115" width="{{ $i % 3 === 0 ? 3 : 2 }}" height="18" rx="1"/>
                                @endfor
                            </g>
                            {{-- Tear perforation --}}
                            <line x1="300" y1="58" x2="300" y2="142" class="stroke-primary-200" stroke-width="1" stroke-dasharray="3 4"/>

                            {{-- Airplane --}}
                            <g transform="translate(260, 28) rotate(12)">
                                <path d="M0 8 L18 0 L38 6 L18 4 L18 12 L38 10 L18 16 L0 8Z" class="fill-primary-800" opacity="0.6"/>
                            </g>

                            {{-- Approval stamp --}}
                            <g transform="translate(115, 38) rotate(-12)">
                                <rect x="0" y="0" width="70" height="30" rx="4" class="stroke-primary-800" stroke-width="2" fill="none" opacity="0.2"/>
                                <rect x="10" y="9" width="50" height="4" rx="2" class="fill-primary-800" opacity="0.15"/>
                                <rect x="16" y="17" width="38" height="3" rx="1.5" class="fill-primary-800" opacity="0.1"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="Key Facts — Subclass 500"
                                   :rows="[
                                       ['key' => 'Visa subclass', 'value' => '500'],
                                       ['key' => 'Duration', 'value' => 'Course length + buffer'],
                                       ['key' => 'Work rights', 'value' => '48 hrs/fortnight; unlimited during scheduled breaks'],
                                       ['key' => 'Family inclusion', 'value' => 'Eligible dependants'],
                                       ['key' => 'Health insurance', 'value' => 'OSHC mandatory'],
                                       ['key' => 'Typical processing', 'value' => '4–8 weeks'],
                                   ]" />
                    <p class="text-xs text-base-500 mt-3 text-pretty">OSHC is mandatory for the duration of your visa. We arrange OSHC through our <a href="{{ route('services.student-support') }}" class="text-primary-800 hover:underline font-medium">student support services &rarr;</a></p>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 How We Help --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How We Help" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Eligibility Assessment', 'description' => 'We review your situation and confirm you meet the requirements before any application work begins.'],
                ['title' => 'Document Compilation', 'description' => 'Academic transcripts, financial evidence, health checks, character documents — we provide the checklist and verify everything.'],
                ['title' => 'GTE Statement', 'description' => 'The Genuine Temporary Entrant statement is the Department of Home Affairs\' way of assessing whether you genuinely intend to study and return home. We help you prepare one that\'s clear, credible, and specific to your situation.'],
                ['title' => 'Application Lodgement', 'description' => 'We complete and submit your application with all supporting documents properly formatted and certified.'],
                ['title' => 'After Lodgement', 'description' => 'We monitor your application and respond to any Department of Home Affairs requests on your behalf — until your visa is granted.'],
            ]" />
            <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-6 inline-block">Once granted: Graduate work visas &rarr;</a>
        </div>
    </section>

    {{-- §4 Requirements Snapshot — image left, checklist right --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-10 lg:gap-14 items-start">
                {{-- Image --}}
                <div class="lg:w-[45%] shrink-0">
                    <img src="{{ asset('images/services-migration-student-visas/campus-walkway.webp') }}"
                         alt="East Asian students walking through a university campus"
                         class="w-full rounded-corner-lg object-cover aspect-[4/3] shadow-lg" loading="lazy" />
                </div>
                {{-- Checklist --}}
                <div class="flex-1">
                    <x-section-heading title="Requirements Snapshot" :centered="false" />
                    <div class="rounded-corner-lg border border-base-200 divide-y divide-base-100 overflow-hidden" data-animate="fade-up">
                        <div class="flex items-start gap-4 p-5 sm:p-6">
                            <div class="w-1 self-stretch rounded-full bg-primary-500 shrink-0"></div>
                            <div>
                                <h3 class="font-bold text-base-900 mb-0.5">Financial Capacity</h3>
                                <p class="text-base-600 text-sm leading-relaxed text-pretty">Evidence covering tuition, living costs, and travel expenses for the duration of your studies.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 sm:p-6">
                            <div class="w-1 self-stretch rounded-full bg-primary-400 shrink-0"></div>
                            <div>
                                <h3 class="font-bold text-base-900 mb-0.5">English Proficiency</h3>
                                <p class="text-base-600 text-sm leading-relaxed text-pretty"><a href="{{ route('services.education.english') }}" class="text-primary-800 hover:underline font-medium">IELTS, TOEFL, PTE, or Cambridge</a> results meeting course and visa requirements.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 sm:p-6">
                            <div class="w-1 self-stretch rounded-full bg-primary-300 shrink-0"></div>
                            <div>
                                <h3 class="font-bold text-base-900 mb-0.5">Health & Character</h3>
                                <p class="text-base-600 text-sm leading-relaxed text-pretty">Medical examination ($240–$380) and police clearance certificates from countries you've lived in.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 sm:p-6">
                            <div class="w-1 self-stretch rounded-full bg-primary-200 shrink-0"></div>
                            <div>
                                <h3 class="font-bold text-base-900 mb-0.5">Confirmation of Enrolment</h3>
                                <p class="text-base-600 text-sm leading-relaxed text-pretty">A valid CoE from a CRICOS-registered institution. We help you secure enrolment through our <a href="{{ route('services.education.index') }}" class="text-primary-800 hover:underline font-medium">education services &rarr;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 What Comes Next? --}}
    <x-next-steps title="What Comes Next?" variant="featured" :links="[
        ['href' => route('services.migration.graduate-work'), 'label' => 'After Graduation', 'title' => 'Post-study work visas', 'description' => 'Your options for staying in Australia on a work visa after you graduate.'],
        ['href' => route('services.student-support'), 'label' => 'While You Study', 'title' => 'Support during your studies', 'description' => 'Accommodation, welfare monitoring, and ongoing advisor support.'],
    ]" />

    {{-- §6 CTA --}}
    <x-cta-banner title="Ready to apply?"
                  subtitle="We assess your eligibility, give you a clear document checklist, and lodge your application. No guesswork on your end."
                  primaryText="Start My Student Visa Application"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
