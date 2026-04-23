<x-layout title="Student Visas"
          description="Applying for a student visa? Our team of Registered Migration Agents will guide you from eligibility through to lodgement.">

    {{-- §1 Hero --}}
    <x-hero title="Applying for a student visa isn't as easy as it used to be — get it right from the start"
            subtitle="Our team will work with you at every step — from checking your eligibility and documents, to guiding your Genuine Student (GS) statement, through to preparing, reviewing and lodging the application by a Registered Migration Agent."
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
                    <p class="text-base-600 leading-relaxed text-pretty">A well-prepared application moves through the system cleanly. Your advisor handles the document compilation, Genuine Student (GS) statement, and lodgement so nothing gets missed.</p>

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
                                       ['key' => 'Health cover', 'value' => 'OSHC mandatory'],
                                       ['key' => 'Family inclusion', 'value' => 'Eligible dependants'],
                                   ]" />
                    <p class="text-sm text-base-600 mt-4 leading-relaxed text-pretty">An offshore student visa application can be granted in as little as 48 hours, but in other cases it may take significantly longer, sometimes more than 8 weeks. The most reliable way to understand current expected timeframes is to refer to the Department of Home Affairs <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-processing-times/global-visa-processing-times" target="_blank" rel="noopener" class="text-primary-800 hover:underline font-medium">Global Visa Processing Times</a>.</p>
                    <a href="{{ route('services.oshc') }}" class="inline-flex items-center justify-center px-5 py-2.5 mt-4 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors">Arrange Your OSHC &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 How We Help --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How We Can Help You" :centered="false" />

            {{-- Vertical process timeline --}}
            <div class="space-y-0">
                @php
                    $steps = [
                        ['num' => 1, 'title' => 'Eligibility Assessment', 'desc' => 'We go through your background, goals and documents with you to check whether you appear to meet key student visa requirements before you move ahead with an application.'],
                        ['num' => 2, 'title' => 'Document Preparation', 'desc' => 'Together we organise your academic records, evidence of financial capacity, formal English test results and other supporting documents. We provide clear checklists and guidance, and help you make sure everything is complete and consistent.'],
                        ['num' => 3, 'title' => 'Genuine Student (GS) Statement', 'desc' => 'The Genuine Student (GS) requirement is how the Department of Home Affairs assesses whether you genuinely intend to study in Australia and understand your obligations. We guide you on how to present your circumstances clearly and honestly, and help you structure a GS statement that is specific to your situation.'],
                        ['num' => 4, 'title' => 'Application Lodgement', 'desc' => 'We help you complete the application forms and upload your supporting documents in the required format. Lodgement is done carefully to reflect the information and evidence you have provided.'],
                        ['num' => 5, 'title' => 'After Lodgement', 'desc' => 'We help you monitor the application process and, where appropriate, respond to any requests for further information — supporting you from lodgement through to a final outcome.'],
                    ];
                @endphp
                @foreach($steps as $step)
                    <div class="flex gap-6" data-animate="fade-up">
                        {{-- Line + node --}}
                        <div class="flex flex-col items-center shrink-0">
                            <div class="w-10 h-10 rounded-full bg-primary-800 text-white flex items-center justify-center text-sm font-bold shrink-0">{{ $step['num'] }}</div>
                            @if(!$loop->last)
                                <div class="w-0.5 flex-1 bg-primary-200 my-1"></div>
                            @endif
                        </div>
                        {{-- Content --}}
                        <div class="pb-8 min-w-0">
                            <h3 class="font-bold text-base-900 text-lg mb-1">{{ $step['title'] }}</h3>
                            <p class="text-base-600 leading-relaxed text-pretty">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 Student Visa Requirements Snapshot --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            {{-- Hero image --}}
            <img src="{{ asset('images/services-migration-student-visas/campus-walkway.webp') }}"
                 alt="International students walking through a university campus"
                 class="w-full rounded-corner-lg object-cover aspect-[3/1] shadow-lg mb-10" loading="lazy" />

            <x-section-heading title="Student Visa Requirements Snapshot" :centered="false" />

            {{-- Staggered vertical timeline --}}
            <div class="relative">
                {{-- Central vertical line (desktop only) --}}
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-px bg-primary-200 -translate-x-1/2"></div>

                <div class="space-y-6 lg:space-y-10">
                    {{-- 1. Passport — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3 flex-row">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-identification class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Valid passport and identity documents</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Your visa will be linked to your passport details and used as your primary identity and travel document</li>
                                    <li>Must be valid and current at time of application</li>
                                </ul>
                                <p class="text-primary-800 text-sm font-medium mt-3">We check that your passport and identity information are current and consistent before progressing.</p>
                            </div>
                        </div>
                        {{-- Timeline node --}}
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">1</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- 2. CoE — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Confirmation of Enrolment (CoE)</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>A current CoE from a <strong>CRICOS-registered</strong> education provider is essential before lodging</li>
                                    <li>You will need to pay the first term or semester's fees to obtain the CoE</li>
                                </ul>
                                <p class="text-primary-800 text-sm font-medium mt-3">We assist you in obtaining an offer from the school and guide you through the enrolment process. <a href="{{ route('services.education.index') }}" class="underline hover:text-primary-600">Explore our education services &rarr;</a></p>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">2</div>
                    </div>

                    {{-- 3. GS Statement — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3 flex-row">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-document-text class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Genuine Student (GS) information</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Explain your reasons for studying in Australia, your choice of course and provider</li>
                                    <li>Show how your plans fit your background and future goals</li>
                                </ul>
                                <p class="text-primary-800 text-sm font-medium mt-3">As a trusted agent and education counsellor, we guide you so that your GS responses are honest, consistent and easy to read for any Case Officer.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">3</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- 4. Academic qualifications — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-clipboard-document-list class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Academic qualifications and education history</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Certified copies of <strong>academic transcripts</strong> (translated into English where required)</li>
                                    <li>Completion certificates and any relevant professional qualifications</li>
                                    <li>A clear study history strengthens the overall credibility of your case</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">4</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Visual break — splits requirements into two halves --}}
    <x-visual-break />

    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="relative">
                {{-- Timeline connector (continued) --}}
                <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-primary-100 -translate-x-1/2"></div>
                <div class="space-y-10">

                    {{-- 5. Financial capacity — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3 flex-row">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-banknotes class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Financial capacity and proof of funds</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Demonstrate genuine access to funds covering <strong>tuition fees, living costs, travel</strong> and dependants' expenses</li>
                                    <li>Evidence includes bank statements, loans, sponsorship or scholarship letters</li>
                                </ul>
                                <p class="text-primary-800 text-sm font-medium mt-3">We help you understand what evidence is typically used and how to present it clearly. <a href="#appendix-a" class="underline hover:text-primary-600">See indicative financial requirements &darr;</a></p>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">5</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- 6. English proficiency — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-language class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Official English language proficiency test results</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>A valid result from <strong>IELTS, TOEFL iBT, PTE Academic or Cambridge</strong></li>
                                    <li>Must meet both your course entry requirements and the visa minimum standard</li>
                                </ul>
                                <p class="text-primary-800 text-sm font-medium mt-3"><a href="#appendix-b" class="underline hover:text-primary-600">See typical English test ranges &darr;</a> &middot; <a href="{{ route('services.education.english') }}" class="underline hover:text-primary-600">English &amp; Foundation courses &rarr;</a></p>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">6</div>
                    </div>

                    {{-- 7. Health & OSHC — LEFT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="lg:text-left">
                            <div class="rounded-corner-lg p-6 bg-primary-50 border border-primary-100">
                                <div class="flex items-center gap-3 mb-3 flex-row">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-heart class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Health examinations and OSHC</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li>Arrange <strong>Overseas Student Health Cover</strong> for the duration of your stay</li>
                                    <li>Complete health examinations with an approved panel clinic</li>
                                </ul>
                                <p class="text-primary-800 text-sm font-medium mt-3">We let you know when to book medicals, how to organise OSHC, and how to upload evidence correctly.</p>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">7</div>
                        <div class="hidden lg:block"></div>
                    </div>

                    {{-- 8. Character documents — RIGHT --}}
                    <div class="relative lg:grid lg:grid-cols-2 lg:gap-12 items-start" data-animate="fade-up">
                        <div class="hidden lg:block"></div>
                        <div>
                            <div class="rounded-corner-lg p-6 bg-base-50 border border-base-200">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center shrink-0">
                                        <x-heroicon-o-shield-check class="w-5 h-5" />
                                    </div>
                                    <h3 class="font-bold text-base-900">Character and background documents</h3>
                                </div>
                                <ul class="text-base-600 text-sm leading-relaxed space-y-1.5">
                                    <li><strong>Police clearance certificates</strong> from countries where you have lived</li>
                                    <li>Character declarations supporting the character requirement for your visa</li>
                                    <li>All documents should be consistent with the rest of your application</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:flex absolute left-1/2 top-6 -translate-x-1/2 w-8 h-8 rounded-full bg-primary-800 text-white items-center justify-center text-xs font-bold z-10">8</div>
                    </div>
                </div>
            </div>

            <p class="text-sm text-base-600 mt-8 text-pretty">Check with us on the set of documents or evidence that you need to provide. You wouldn't want to be short of providing the relevant documents.</p>

            {{-- Mid-page CTA --}}
            <div class="mt-10 bg-primary-50 border border-primary-100 rounded-corner-lg p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-base-800 font-medium text-pretty">Have questions about what documents you need? We can review your situation and give you a clear checklist.</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors whitespace-nowrap shrink-0">Talk to Our Team</a>
            </div>
        </div>
    </section>

    {{-- Reference Tables divider --}}
    <div class="bg-base-100 border-y border-base-200">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-4">
            <p class="text-xs font-semibold uppercase tracking-wider text-base-400">Reference Tables</p>
        </div>
    </div>

    {{-- Appendix A — Indicative Financial Requirements --}}
    <section id="appendix-a" class="bg-base-100 scroll-mt-8">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Indicative Student Visa Financial Requirements" :centered="false" />
            <p class="text-sm text-base-600 mb-6 text-pretty">From time to time, the Department of Home Affairs will revise and publish the official requirements, so it is important that you should always refer to the <a href="https://immi.homeaffairs.gov.au/visas/web-evidentiary-tool" target="_blank" rel="noopener" class="text-primary-800 hover:underline font-medium">Document Checklist Tool</a> before you apply.</p>

            <div class="overflow-x-auto rounded-corner-lg border border-base-200">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-primary-800 text-white text-left">
                            <th class="px-5 py-3 font-semibold">Component</th>
                            <th class="px-5 py-3 font-semibold">What it covers</th>
                            <th class="px-5 py-3 font-semibold">Indicative amount</th>
                            <th class="px-5 py-3 font-semibold">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-base-100">
                        <tr class="bg-white">
                            <td class="px-5 py-3 font-medium text-base-900">Living costs (primary student &mdash; 12 months)</td>
                            <td class="px-5 py-3 text-base-600">Day-to-day expenses such as accommodation, food, transport and basic bills for the main applicant</td>
                            <td class="px-5 py-3 text-base-600 whitespace-nowrap">Around AUD 29,710/year</td>
                            <td class="px-5 py-3 text-base-600">Base living-cost benchmark for a single student for 12 months. Figures are indicative and can be updated by the Department.</td>
                        </tr>
                        <tr class="bg-base-50">
                            <td class="px-5 py-3 font-medium text-base-900">Tuition fees</td>
                            <td class="px-5 py-3 text-base-600">Course fees for at least the first 12 months of study (or full course if shorter)</td>
                            <td class="px-5 py-3 text-base-600 whitespace-nowrap">AUD 15,000&ndash;47,000+/year</td>
                            <td class="px-5 py-3 text-base-600">Use the tuition shown on your Letter of Offer / CoE, plus any non-tuition fees listed by your provider.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-5 py-3 font-medium text-base-900">Travel to and from Australia</td>
                            <td class="px-5 py-3 text-base-600">Initial travel to Australia and return travel</td>
                            <td class="px-5 py-3 text-base-600 whitespace-nowrap">AUD 2,000&ndash;3,000</td>
                            <td class="px-5 py-3 text-base-600">This can vary based on your country, airline and time of year.</td>
                        </tr>
                        <tr class="bg-base-50">
                            <td class="px-5 py-3 font-medium text-base-900">Additional living costs &mdash; spouse/partner</td>
                            <td class="px-5 py-3 text-base-600">Extra living costs if a partner is included on the visa</td>
                            <td class="px-5 py-3 text-base-600 whitespace-nowrap">Around AUD 10,394/year</td>
                            <td class="px-5 py-3 text-base-600">Approximate benchmark for a spouse or de facto partner, in addition to the main student amount.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-5 py-3 font-medium text-base-900">Additional living costs &mdash; each dependent child</td>
                            <td class="px-5 py-3 text-base-600">Extra living costs for each dependent child</td>
                            <td class="px-5 py-3 text-base-600 whitespace-nowrap">Around AUD 4,449/child/year</td>
                            <td class="px-5 py-3 text-base-600">Added on top of the main student amount and any partner amount if applicable.</td>
                        </tr>
                        <tr class="bg-base-50">
                            <td class="px-5 py-3 font-medium text-base-900">School-aged children &mdash; school fees</td>
                            <td class="px-5 py-3 text-base-600">Public or private schooling costs for dependent children of school age</td>
                            <td class="px-5 py-3 text-base-600 whitespace-nowrap">Around AUD 13,000+/child/year</td>
                            <td class="px-5 py-3 text-base-600">Exact school fees depend on the state, sector and school; some exemptions apply in limited cases.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Appendix B — Typical English Test Ranges --}}
    <section id="appendix-b" class="bg-base-100 border-t border-base-200 scroll-mt-8">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Typical English Test Ranges for Study in Australia" :centered="false" />

            <div class="overflow-x-auto rounded-corner-lg border border-base-200">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-primary-800 text-white text-left">
                            <th class="px-5 py-3 font-semibold">Study level</th>
                            <th class="px-5 py-3 font-semibold">IELTS Academic</th>
                            <th class="px-5 py-3 font-semibold">PTE Academic</th>
                            <th class="px-5 py-3 font-semibold">TOEFL iBT</th>
                            <th class="px-5 py-3 font-semibold">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-base-100">
                        <tr class="bg-white">
                            <td class="px-5 py-3 font-medium text-base-900">Certificates &amp; Diplomas (VET)</td>
                            <td class="px-5 py-3 text-base-600">Around 5.5 overall, no band below 5.0</td>
                            <td class="px-5 py-3 text-base-600">Around 42&ndash;46 overall</td>
                            <td class="px-5 py-3 text-base-600">Around 46&ndash;60</td>
                            <td class="px-5 py-3 text-base-600">Common across many TAFE and private VET providers; some allow packaged ELICOS if your score is a little below this.</td>
                        </tr>
                        <tr class="bg-base-50">
                            <td class="px-5 py-3 font-medium text-base-900">Bachelor degrees (most fields)</td>
                            <td class="px-5 py-3 text-base-600">Typically 6.5 overall, no band below 6.0</td>
                            <td class="px-5 py-3 text-base-600">Typically 50&ndash;58 overall</td>
                            <td class="px-5 py-3 text-base-600">Typically 79&ndash;87</td>
                            <td class="px-5 py-3 text-base-600">Common standard at many universities for standard undergraduate programmes.</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-5 py-3 font-medium text-base-900">Postgraduate coursework (most fields)</td>
                            <td class="px-5 py-3 text-base-600">Often 6.5 overall, no band below 6.0</td>
                            <td class="px-5 py-3 text-base-600">Often 58+ overall</td>
                            <td class="px-5 py-3 text-base-600">Often 79&ndash;90</td>
                            <td class="px-5 py-3 text-base-600">Many master's degrees use the same or very similar English level as standard undergraduate degrees; individual courses may set higher thresholds.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-xs text-base-500 mt-4 text-pretty">These score ranges are a general guide only. Every university, college and course in Australia sets its own English language entry requirements, and some programmes &mdash; especially medicine, nursing, teaching, social work and law &mdash; often require higher overall scores and higher minimum sub-scores than standard courses. Always check the exact English requirement for your chosen course and provider, and confirm any visa-related English settings with the education provider, or a trusted education agent.</p>
        </div>
    </section>

    {{-- Credential trust strip --}}
    <x-logo-grid title="Registered & accredited migration agents"
                 :grayscale="true"
                 :logos="[
                     ['src' => asset('images/credentials/qeac.svg'), 'alt' => 'QEAC Certified'],
                     ['src' => asset('images/credentials/migration-alliance.svg'), 'alt' => 'Migration Alliance'],
                     ['src' => asset('images/credentials/mia.svg'), 'alt' => 'Migration Institute of Australia'],
                 ]" />

    {{-- §5a While You're in Australia --}}
    <section class="bg-primary-800 text-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <p class="text-primary-300 text-xs font-semibold uppercase tracking-wider mb-2">While You Study</p>
            <h2 class="text-3xl font-bold mb-6">While You're in Australia</h2>

            <div class="flex flex-col lg:flex-row gap-10">
                <div class="flex-1">
                    <p class="text-primary-100 leading-relaxed mb-6 text-pretty">Studying in Australia is more than just getting a visa approved — it's about feeling supported while you settle in, study and plan your next steps. Blue Education is based in Perth with partners around Australia, so you have a local team you can turn to throughout your journey.</p>

                    <p class="text-white font-semibold mb-3">We can help with:</p>
                    <x-icon-list variant="check" theme="dark" class="mb-6">
                        <x-icon-list.item>Arrival and orientation, including on-boarding sessions so you understand your new city, your campus and your visa conditions.</x-icon-list.item>
                        <x-icon-list.item>Accommodation options, such as homestay, student housing or other arrangements that suit your budget and needs.</x-icon-list.item>
                        <x-icon-list.item>Ongoing check-ins and welfare support, so you have someone to speak with if you need guidance or run into any issues.</x-icon-list.item>
                        <x-icon-list.item>Study, migration and career planning if you want to change courses, extend your studies, or explore post-study work and skilled migration pathways.</x-icon-list.item>
                    </x-icon-list>

                    <p class="text-primary-200 text-sm text-pretty">Once you arrive in Australia, you are not on your own — you have a team in Perth that understands international student life and is here to support you from your first week through to graduation and beyond.</p>

                    <a href="{{ route('services.student-support') }}" class="inline-flex items-center gap-1 mt-4 text-white hover:text-primary-200 font-semibold transition-colors">Student support services &rarr;</a>
                </div>

                {{-- Inline video --}}
                <div class="lg:w-[45%] shrink-0">
                    <div class="rounded-corner-lg overflow-hidden shadow-lg">
                        <video controls preload="none" poster="{{ asset('videos/student-infopack-poster.jpg') }}" class="w-full aspect-video bg-black">
                            <source src="{{ asset('videos/student-infopack.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <p class="text-primary-300 text-xs mt-2">What a student needs to know before arriving in Perth</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §5b Post-Study Work Options --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <p class="text-primary-800 text-xs font-semibold uppercase tracking-wider mb-2">After Graduation</p>
            <h2 class="text-3xl font-bold text-base-900 mb-6">Post-Study Work Options</h2>

            <p class="text-base-600 leading-relaxed mb-8 text-pretty max-w-3xl">Finishing your course is just the beginning. Australia offers several pathways for graduates who want to stay, work and build a career — and in many cases, work towards permanent residence.</p>

            <div class="grid sm:grid-cols-3 gap-6 mb-8">
                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-full bg-primary-50 text-primary-800 flex items-center justify-center mb-3">
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Post-Study Work Visa</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Subclass 485 — 2 years for bachelor's and master's coursework graduates, 3 years for master's research and doctoral graduates.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-full bg-primary-50 text-primary-800 flex items-center justify-center mb-3">
                        <x-heroicon-o-building-office class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Temporary Skill Shortage</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Subclass 482 — for graduates with an employer willing to sponsor, with pathways to permanent residence.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-full bg-primary-50 text-primary-800 flex items-center justify-center mb-3">
                        <x-heroicon-o-home class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Employer Nomination Scheme</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">A direct pathway to permanent residence for skilled workers with employer support.</p>
                </div>
            </div>

            <p class="text-base-500 text-sm text-pretty mb-4">The same team that helped with your student visa can guide you through the transition — no need to start over with a new agent.</p>
            <a href="{{ route('services.migration.graduate-work') }}" class="inline-flex items-center justify-center px-6 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors">Explore Work Visa Options &rarr;</a>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Ready to apply?"
                  subtitle="We assess your eligibility, give you a clear document checklist, and lodge your application. No guesswork on your end."
                  primaryText="Start My Student Visa Application"
                  :primaryHref="route('contact')" />

</x-layout>
