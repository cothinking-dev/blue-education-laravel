<x-layout title="Fees & Costs"
          description="All fees communicated upfront, before any work begins. Transparent pricing for education, migration, and support services.">

    {{-- §1 Hero --}}
    <x-hero title="Fees & Costs"
            subtitle="Transparent pricing; Always."
            :image="asset('images/heroes/fees.webp')"
            alt="Perth city skyline across the Swan River, Western Australia"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Approach --}}
    <x-content-split title="Blue Education Service Fees" :image="asset('images/fees/transparent-pricing.webp')" alt="East Asian student in a transparent pricing consultation">
        <p>Our professional fees depend on the type of service you require, the time involved, the complexity of your case, and whether family members or additional support services are included.</p>
        <p>Depending on your needs, Blue Education service fees may relate to:</p>
        <ul class="space-y-2 text-sm mt-4">
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>School applications extending to more than two (2) choices</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Change of programme / course provider</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Student visa support and visa-related professional assistance</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Skills assessment or migration consultation with a Registered Migration Agent or immigration lawyer</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>High school support services</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Homestay placement and continuous support</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Transportation coordination and arrival support</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Employability readiness assessment and support</span></li>
            <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Other tailored transition support services</span></li>
        </ul>
        <p class="mt-4">Before you appoint us, we will provide a personalised quote or fee estimate. This estimate may include professional fees, disbursements charged at cost, and any miscellaneous charges that apply to your situation.</p>
    </x-content-split>

    {{-- §3 Cost Overview --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Cost Overview" :centered="false" />
            <x-data-table class="shadow-xl" :headers="['Cost Category', 'Who Sets It', 'Paid To', 'Amount']"
                          :rows="[
                              ['Blue Education service fees', 'Blue Education', 'Blue Education', 'Varies by case'],
                              ['Course counselling', 'Blue Education', '—', 'Free'],
                              ['Skills assessment / visa consultation', 'MARA agent / lawyer', 'Blue Education', 'From AUD 300 + GST'],
                              ['Visa Application Charge (VAC)', 'Dept of Home Affairs', 'Australian Government', 'From AUD 2,000 (subclass 500)'],
                              ['Medical examination', 'Bupa MVS', 'Medical provider', 'From AUD 268.30'],
                              ['Tuition', 'Institution', 'Institution', 'Varies by programme'],
                          ]" />
            <p class="text-base-500 text-sm mt-4">Visa Application Charges took effect from 1 July 2025. For the most up-to-date pricing, see the <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/fees-and-charges/current-visa-pricing" target="_blank" rel="noopener noreferrer" class="text-primary-800 hover:underline">Department of Home Affairs website</a>.</p>
        </div>
    </section>

    {{-- §4 What You'll Pay --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What You'll Pay" :centered="false" />
            <div class="space-y-6">
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Course counselling &mdash; free</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Blue Education does not charge any fees for course counselling or advice on your study options.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Blue Education service fees</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Our service fees cover consultation, pathway planning, application processing, document compilation, and ongoing support. Fees vary by case and complexity. We provide a personalised quote before you commit.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Skills assessment or visa consultation</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">General consultations about skills assessment or visa options are provided by a Registered Migration Agent (MARA) or immigration lawyer engaged by Blue Education. Consultation fees generally start <strong>from AUD 300 + GST</strong>. If you choose to proceed with further work or ongoing support after the initial consultation, this fee is usually offset against the total professional fees on your final invoice.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Visa Application Charge (VAC)</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">VACs are set by the Australian Department of Home Affairs. For a Student visa (subclass 500), the Department currently lists the base application charge from <strong>AUD 2,000</strong>; fee changes took effect from 1 July 2025. Additional applicant charges may apply for dependants, and some applicants may also need to pay a subsequent temporary application charge depending on their visa history. <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/fees-and-charges/current-visa-pricing" target="_blank" rel="noopener noreferrer" class="text-primary-800 hover:underline font-medium">Check current visa pricing &rarr;</a> Separate from Blue Education fees. <a href="{{ route('services.migration.student-visas') }}" class="text-primary-800 hover:underline font-medium">See student visa details &rarr;</a></p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Tuition fees</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Paid directly to your educational institution. Vary by institution, programme, and duration.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/why-australia/perth-skyline.webp', 'alt' => 'Perth city skyline across the Swan River'],
    ]" padding="py-10" />

    {{-- §5 Additional Support Services --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Additional Support Services" :centered="false" />
            <x-data-table class="shadow-xl" :headers="['Service', 'Description']"
                          :rows="[
                              ['24/7 Emergency Hotline', 'Round-the-clock crisis support'],
                              ['Document Translation', 'NAATI-certified (~AUD 85 per page)'],
                              ['Airport Transfers', 'Meet, greet, transport on arrival'],
                              ['Homestay placement & monitoring', 'Australian family-home placement, ongoing support'],
                              ['Employability readiness', 'CV, interviews, workplace culture coaching'],
                              ['Specialised Consultations', 'Expert advice sessions'],
                              ['Tailored transition services', 'Custom settlement support'],
                          ]" />
        </div>
    </section>

    {{-- §6 Other Associated Fees --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Other Associated Fees" :centered="false" />
            <p class="text-base-600 mb-8 text-pretty">In addition to professional fees and visa application charges, students may need to budget for other associated costs related to their application and study journey.</p>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                @php
                    $otherFees = [
                        [
                            'icon' => 'heart',
                            'title' => 'OSHC',
                            'desc' => '<a href="' . route('services.oshc') . '" class="text-primary-800 hover:underline">Overseas Student Health Cover</a> is generally required for student visa holders for the duration of their stay (estimated around <strong>AUD 1,500 for 2 years</strong>).',
                        ],
                        [
                            'icon' => 'clipboard-document-check',
                            'title' => 'Medical examinations',
                            'desc' => 'Performed by Bupa MVS. Standard medical exam (501) <strong>AUD 268.30</strong>; chest X-ray (502) <strong>AUD 138.60</strong>; combined ~AUD 371.70 (as of July 2025), plus any required pathology tests. <a href="https://www.bupa.com.au/bupamvs/more-information/fees/australian-mvs" target="_blank" rel="noopener noreferrer" class="text-primary-800 hover:underline">Bupa MVS fees &rarr;</a>',
                        ],
                        [
                            'icon' => 'finger-print',
                            'title' => 'Biometrics',
                            'desc' => 'Australian visa biometrics generally cost between <strong>AUD 85 and AUD 120</strong> per person, payable to the service provider (usually VFS Global).',
                        ],
                        [
                            'icon' => 'document-text',
                            'title' => 'Translation & document preparation',
                            'desc' => 'Certified document translation around <strong>AUD 85 per page</strong>.',
                        ],
                        [
                            'icon' => 'credit-card',
                            'title' => 'Bank charges & transfers',
                            'desc' => 'International transfer fees or credit card surcharges may apply when paying institutions or government fees.',
                        ],
                        [
                            'icon' => 'shield-check',
                            'title' => 'Police clearances',
                            'desc' => 'Police clearances or other supporting documents, where required by the Department of Home Affairs.',
                        ],
                        [
                            'icon' => 'book-open',
                            'title' => 'Study materials',
                            'desc' => 'Textbooks, laptops, uniforms or specialised equipment, depending on the provider and course.',
                        ],
                    ];
                @endphp
                @foreach($otherFees as $item)
                    <div class="border border-base-200 rounded-corner-lg p-5 shadow-md flex items-start gap-4">
                        <div class="w-10 h-10 bg-primary-100 rounded-corner-lg flex items-center justify-center shrink-0">
                            <x-dynamic-component :component="'heroicon-o-' . $item['icon']" class="w-5 h-5 text-primary-700" />
                        </div>
                        <div>
                            <h3 class="font-bold text-base-900 mb-1">{{ $item['title'] }}</h3>
                            <p class="text-base-600 text-sm text-pretty">{!! $item['desc'] !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §7 Budgeting for your arrival --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Budgeting for your arrival" :centered="false" />
            <p class="text-base-600 mb-6 text-pretty">Studying in Australia also involves everyday living and settlement costs, so it is important to plan beyond tuition and visa fees. Study Australia and university guidance note that students should budget for accommodation, food, transport, phone, utilities and personal expenses, and that actual costs vary by city and lifestyle.</p>
            <p class="text-base-600 mb-6 text-pretty">Many current guides suggest international students may spend around <strong>AUD 450 to AUD 750 per week</strong> on living expenses, while the Department of Home Affairs financial capacity settings are also an important budgeting reference. Students should think about:</p>
            <ul class="grid sm:grid-cols-2 gap-3 text-sm mb-6">
                <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Accommodation, including rent, bond, homestay fees or student housing setup costs</span></li>
                <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Food and groceries</span></li>
                <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Public transport and local travel</span></li>
                <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Airport pickup and initial transport after arrival</span></li>
                <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Phone, internet and utilities</span></li>
                <li class="flex items-start gap-3"><span class="text-primary-600 mt-0.5">&#10003;</span> <span>Personal items and household setup costs</span></li>
            </ul>
            <p class="text-base-600 text-pretty">You can use the <a href="https://intl-student-living-cost-australia.base44.app/" target="_blank" rel="noopener noreferrer" class="text-primary-800 hover:underline font-medium">International Student Cost-of-Living Calculator</a> to compare cities and living arrangements. For settlement support after arrival, see our <a href="{{ route('services.student-support') }}" class="text-primary-800 hover:underline font-medium">Student Support page</a>.</p>
        </div>
    </section>

    {{-- §8 Important note --}}
    <section class="bg-white">
        <div class="max-w-3xl mx-auto px-8 lg:px-16 py-14">
            <x-callout title="Important note" variant="warning">
                <p>All fees and costs are indicative only and may change over time. Actual expenses will depend on your education provider, visa type, city, accommodation choice, family circumstances and the level of support you require.</p>
                <p class="mt-3">For the most up-to-date government fees and visa requirements, please refer to the official <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/fees-and-charges/current-visa-pricing" target="_blank" rel="noopener noreferrer" class="underline font-medium">Department of Home Affairs website</a>.</p>
            </x-callout>
        </div>
    </section>

    {{-- §9 CTA --}}
    <x-cta-banner title="Get your cost breakdown."
                  subtitle="Tell us your situation: education level, visa status, and what you're trying to achieve. We'll provide an itemised quote before any work begins."
                  primaryText="Get a Personalised Quote"
                  :primaryHref="route('contact')" />

</x-layout>
