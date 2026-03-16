<x-layout title="University Degrees"
          description="Bachelor, Master, and Doctoral programs at Western Australian universities. Graduates receive 2–4 years of post-study work rights.">

    {{-- §1 Hero --}}
    <x-hero title="A degree worth having, from a city worth studying in."
            subtitle="A degree from one of Western Australia's universities opens doors in most major economies — and gives you 2 to 4 years to build a career here before you decide what comes next."
            :image="asset('images/heroes/services-education-degrees.webp')"
            alt="East Asian graduates celebrating and clapping at graduation ceremony"
            :breadcrumbs="true" />

    {{-- §2 Programs --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Programs" :centered="false" />
            <div class="grid md:grid-cols-3 gap-6 mb-8" data-animate="stagger">
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Bachelor</h3>
                    <p class="text-gray-600 text-sm mb-4 text-pretty">The starting point for most professional careers — and for post-study work rights in Western Australia.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-gray-500">AQF Level</span><span class="font-medium text-gray-900">7</span></div>
                        <div class="flex justify-between"><span class="text-gray-500">Duration</span><span class="font-medium text-gray-900">3–4 years</span></div>
                        <div class="flex justify-between"><span class="text-gray-500">Post-Study Work</span><span class="font-bold text-primary-800">2 years</span></div>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Master</h3>
                    <p class="text-gray-600 text-sm mb-4 text-pretty">For specialisation or career advancement. Coursework or research pathways available.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-gray-500">AQF Level</span><span class="font-medium text-gray-900">9</span></div>
                        <div class="flex justify-between"><span class="text-gray-500">Duration</span><span class="font-medium text-gray-900">1–2 years</span></div>
                        <div class="flex justify-between"><span class="text-gray-500">Post-Study Work</span><span class="font-bold text-primary-800">3 years</span></div>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-corner-lg p-6 bg-white">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Doctoral</h3>
                    <p class="text-gray-600 text-sm mb-4 text-pretty">Research-focused PhD programmes at institutions with strong industry and government research ties.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-gray-500">AQF Level</span><span class="font-medium text-gray-900">10</span></div>
                        <div class="flex justify-between"><span class="text-gray-500">Duration</span><span class="font-medium text-gray-900">3–4 years</span></div>
                        <div class="flex justify-between"><span class="text-gray-500">Post-Study Work</span><span class="font-bold text-primary-800">4 years</span></div>
                    </div>
                </div>
            </div>
            <p class="text-sm text-gray-500 text-pretty">Also available: Graduate Certificate and Graduate Diploma (AQF Level 8) — typically 6 months to 1 year.</p>
        </div>
    </section>

    {{-- §3 Partner Universities --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Partner Universities" :centered="false" />
            <p class="text-gray-600 mb-8 text-pretty">Blue Education works with all five main Western Australian universities — and a wider network of institutions across Australia. Your advisor matches you to the right one based on your goals, background, and intended field.</p>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                @php
                    $unis = [
                        ['name' => 'The University of Western Australia (UWA)', 'logo' => 'images/partners/uwa-logo.svg', 'desc' => 'One of Australia\'s leading research universities. Strong in medicine, science, law, and engineering. Consistently ranked in the global top 100.'],
                        ['name' => 'Curtin University', 'logo' => 'images/partners/curtin-logo.webp', 'desc' => 'Perth\'s largest university, with particular strength in engineering, technology, business, and health sciences. Strong industry connections.'],
                        ['name' => 'Murdoch University', 'logo' => 'images/partners/murdoch-logo.svg', 'desc' => 'Known for health sciences, law, veterinary science, and environmental studies. Smaller cohorts and strong student support.'],
                        ['name' => 'Edith Cowan University (ECU)', 'logo' => 'images/partners/ecu-logo.png', 'desc' => 'Recognised for creative arts, education, nursing, and security studies. A practical, career-focused institution.'],
                    ];
                @endphp
                @foreach($unis as $uni)
                    <div class="bg-white rounded-corner-lg border border-gray-200 p-6 flex items-start gap-5">
                        <img src="{{ asset($uni['logo']) }}" alt="{{ $uni['name'] }}" class="h-12 w-auto object-contain shrink-0" loading="lazy">
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1 text-pretty">{{ $uni['name'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed text-pretty">{{ $uni['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="sm:col-span-2 bg-white rounded-corner-lg border border-gray-200 p-6 flex items-start gap-5">
                    <img src="{{ asset('images/partners/notre-dame-logo.svg') }}" alt="The University of Notre Dame Australia" class="h-12 w-auto object-contain shrink-0" loading="lazy">
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1 text-pretty">The University of Notre Dame Australia</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">A smaller, values-based university with strengths in health, law, philosophy, and education. Located in Fremantle.</p>
                    </div>
                </div>
            </div>
            <a href="{{ route('about.partners') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-6 inline-block">View all partner institutions &rarr;</a>
        </div>
    </section>

    {{-- §4 Why Study in Western Australia? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why study in Western Australia?" :centered="false" />

            <div class="flex flex-col lg:flex-row items-center gap-12 mb-14">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-pretty">Global recognition</h3>
                    <p class="text-gray-600 leading-relaxed text-pretty">Western Australia's universities are regulated by TEQSA, ensuring consistent academic standards across all programmes. Qualifications are recognised across major economies — including in regulated professions such as teaching, nursing, and engineering.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/services-education-degrees/global-recognition.webp') }}" alt="East Asian graduates celebrating at a university graduation ceremony" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 mb-14">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-pretty">Industry connections</h3>
                    <p class="text-gray-600 leading-relaxed text-pretty">Many programmes include industry placements, research projects, and professional mentoring. Graduates leave with demonstrated experience in their field — not just a transcript.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/services-education-degrees/industry-connections.webp') }}" alt="East Asian professionals networking and discussing ideas in a modern office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-pretty">Post-study work rights</h3>
                    <p class="text-gray-600 leading-relaxed text-pretty">The Post-Study Work Visa (Subclass 485) gives graduates 2 to 4 years of open work rights in Australia. That's time to build experience in your field, establish professional connections, and consider your options for permanent residence.</p>
                    <div class="flex gap-4 mt-3">
                        <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 font-medium text-sm hover:underline">Graduate work visas &rarr;</a>
                        <a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 font-medium text-sm hover:underline">Permanent residence &rarr;</a>
                    </div>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/services-education-degrees/post-study-work.webp') }}" alt="East Asian professional woman working on a laptop in a modern office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §5 Fees & Costs --}}
    <section class="bg-gray-50">
        <div class="max-w-4xl mx-auto px-8 lg:px-16 py-14 text-center">
            <x-section-heading title="Fees &amp; Costs" />
            <p class="text-gray-600 leading-relaxed mb-3 text-pretty">Tuition fees vary by institution, field of study, and qualification level. Most universities require fees to be paid per semester or trimester before each study period begins.</p>
            <p class="text-gray-600 leading-relaxed mb-6 text-pretty">As an international student, your fees are separate from your living costs. Perth is widely regarded as one of Australia's most liveable and cost-effective cities for students — your advisor can provide a detailed cost breakdown for your specific situation.</p>
            <a href="{{ route('admission-requirements') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">See admission requirements and fee guidance &rarr;</a>
        </div>
    </section>

    {{-- §6 Admission Requirements --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Admission Requirements" :centered="false" />
            <x-data-table :headers="['Program', 'IELTS', 'Academic Requirement']"
                          :rows="[
                              ['Bachelor', '6.5', 'Year 12 equivalent or VET Diploma'],
                              ['Master', '6.5 – 7.0', 'Relevant Bachelor degree'],
                              ['Doctoral', '6.5 – 7.0', 'Relevant Master degree'],
                          ]" />
            <div class="mt-6">
                <p class="text-gray-600 text-sm mb-3">Below entry requirements? There are structured pathways to get you there:</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services.education.english') }}" class="text-primary-800 font-medium text-sm hover:underline">ELICOS and Foundation programmes &rarr;</a>
                    <a href="{{ route('services.education.vet-tafe') }}" class="text-primary-800 font-medium text-sm hover:underline">VET Diploma pathway &rarr;</a>
                </div>
                <a href="{{ route('admission-requirements') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-4 inline-block">See full admission requirements &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §7 How to Apply --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How to Apply" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Assess your eligibility', 'description' => 'Your advisor reviews your academic background, English level, and career goals.'],
                ['title' => 'Choose institution & programme', 'description' => 'Blue Education identifies the right match from our partner institutions.'],
                ['title' => 'Submit your application', 'description' => 'We manage the application and liaise with the institution on your behalf.'],
                ['title' => 'Receive offer & apply for visa', 'description' => 'Once you have a CoE, your visa application can proceed.'],
                ['title' => 'Arrive, enrol, and begin', 'description' => 'Your advisor remains available throughout studies and into post-graduation planning.'],
            ]" />
        </div>
    </section>

    {{-- §8 CTA --}}
    <x-cta-banner title="Not sure which university is the right fit?"
                  subtitle="Talk to an advisor. They'll assess your background and goals, then recommend the institution and programme that suits your situation."
                  primaryText="Get University Recommendations"
                  :primaryHref="route('contact')" />

</x-layout>
