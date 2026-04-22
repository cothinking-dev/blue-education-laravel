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
            <x-timeline :steps="[
                ['title' => 'Eligibility Assessment', 'description' => 'We go through your background, goals and documents with you to check whether you appear to meet key student visa requirements before you move ahead with an application.'],
                ['title' => 'Document Preparation', 'description' => 'Together we organise your academic records, evidence of financial capacity, formal English test results and other supporting documents. We provide clear checklists and guidance, and help you make sure everything is complete and consistent.'],
                ['title' => 'Genuine Student (GS) Statement', 'description' => 'The Genuine Student (GS) requirement is how the Department of Home Affairs assesses whether you genuinely intend to study in Australia and understand your obligations. We guide you on how to present your circumstances clearly and honestly, and help you structure a GS statement that is specific to your situation.'],
                ['title' => 'Application Lodgement', 'description' => 'We help you complete the application forms and upload your supporting documents in the required format. Lodgement is done carefully to reflect the information and evidence you have provided.'],
                ['title' => 'After Lodgement', 'description' => 'We help you monitor the application process and, where appropriate, respond to any requests for further information — supporting you from lodgement through to a final outcome.'],
            ]" />
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

            {{-- 2-column requirements grid --}}
            <div class="grid sm:grid-cols-2 gap-6" data-animate="fade-up">
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">1</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Valid passport and identity documents</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">To apply for an international student visa, you must hold a valid passport, because your visa will be linked to your passport details and used as your primary identity and travel document. We check that your passport and other identity information are current and consistent before progressing with the rest of your application.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">2</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Confirmation of Enrolment (CoE)</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">A current Confirmation of Enrolment from a CRICOS-registered education provider is essential before lodging an Australian student visa application. We will assist you in obtaining an offer from the school and you will have to make the first term or semester's fees to the institution in order to obtain the CoE.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">3</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Genuine Student (GS) information</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">The GS statement will require an explanation of your reasons for studying in Australia, your choice of course and provider, and how your plans fit your background and future goals. As a trusted agent and education counsellor, we will guide you on this matter with the required evidence, so that your GS responses are honest, consistent and easy to read for any Case Officer to review.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">4</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Academic qualifications and education history</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">You will usually need certified copies of your academic transcripts (translated into English where required), completion certificates and any relevant professional qualifications. For many international student visa applications, a clear study history helps show you are prepared for your chosen course and strengthens the overall credibility of your case.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">5</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Financial capacity and proof of funds</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">You must demonstrate that you have genuine access to enough money to cover tuition fees, living costs, travel and any dependants' expenses whilst living and studying in Australia. An experienced student visa agent can help you understand what types of financial evidence are typically used and how to present them clearly. <a href="#appendix-a" class="text-primary-800 hover:underline font-medium">See indicative financial requirements &darr;</a></p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">6</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Official English language proficiency test results</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Where required, you need a valid English test result (such as IELTS, TOEFL iBT, PTE Academic or Cambridge) that meets both your course entry requirements and the minimum standard for your visa. <a href="#appendix-b" class="text-primary-800 hover:underline font-medium">See typical English test ranges &darr;</a></p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">7</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Health examinations and Overseas Student Health Cover (OSHC)</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Most international students must arrange OSHC for the duration of their stay and complete health examinations with an approved panel clinic. A trusted student visa agent will let you know when to book medicals, how to organise OSHC, and how to upload the evidence correctly.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 sm:p-6 rounded-corner-lg border border-base-200 bg-white">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full bg-primary-100 text-primary-800 font-bold text-sm shrink-0">8</span>
                    <div>
                        <h3 class="font-bold text-base-900 mb-1">Character and background documents</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Depending on your history, you may need police clearance certificates and character declarations for countries where you have lived. These documents support the character requirement for an Australian student visa and should be consistent with the rest of your application.</p>
                    </div>
                </div>
            </div>

            <p class="text-sm text-base-600 mt-6 text-pretty">Check with us on the set of documents or evidence that you need to provide. You wouldn't want to be short of providing the relevant documents.</p>
        </div>
    </section>

    {{-- Appendix A — Indicative Financial Requirements --}}
    <section id="appendix-a" class="bg-white scroll-mt-8">
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
    <section id="appendix-b" class="bg-base-50 scroll-mt-8">
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

    {{-- §5 What Comes Next? --}}
    <x-next-steps title="What Comes Next?" variant="featured" :links="[
        ['href' => route('services.migration.graduate-work'), 'label' => 'After Graduation', 'title' => 'Post-study work visas', 'description' => 'Your options for staying in Australia on a work visa after you graduate.'],
        ['href' => route('services.student-support'), 'label' => 'While You Study', 'title' => 'Support during your studies', 'description' => 'Accommodation, welfare monitoring, and ongoing advisor support.'],
    ]" />

    {{-- §6 CTA --}}
    <x-cta-banner title="Ready to apply?"
                  subtitle="We assess your eligibility, give you a clear document checklist, and lodge your application. No guesswork on your end."
                  primaryText="Start My Student Visa Application"
                  :primaryHref="route('contact')" />

</x-layout>
