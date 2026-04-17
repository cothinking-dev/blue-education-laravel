<x-layout title="University Degrees"
          description="Bachelor, Master, and Doctoral programmes at Western Australian universities. Graduates receive 2–4 years of post-study work rights.">

    {{-- §1 Hero --}}
    <x-hero title="A degree worth having, from a city worth studying in."
            subtitle="A degree from one of Western Australia's universities opens doors in most major economies — and gives you 2 to 4 years to build a career here before you decide what comes next."
            :image="asset('images/heroes/services-education-degrees.webp')"
            alt="East Asian graduates celebrating and clapping at graduation ceremony"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Programmes --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Programmes" :centered="false" />
            <div class="grid md:grid-cols-3 gap-6 mb-8" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-book-open class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-2">Bachelor</h3>
                    <p class="text-base-600 text-sm mb-4 text-pretty">The starting point for most professional careers — and for post-study work rights in Western Australia.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-base-500">AQF Level</span><span class="font-medium text-base-900">7</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Duration</span><span class="font-medium text-base-900">3–4 years</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Post-Study Work</span><span class="font-bold text-primary-800">2 years</span></div>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-2">Master</h3>
                    <p class="text-base-600 text-sm mb-4 text-pretty">For specialisation or career advancement. Coursework or research pathways available.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-base-500">AQF Level</span><span class="font-medium text-base-900">9</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Duration</span><span class="font-medium text-base-900">1–2 years</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Post-Study Work</span><span class="font-bold text-primary-800">3 years</span></div>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-100 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-light-bulb class="w-5 h-5" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-2">Doctoral</h3>
                    <p class="text-base-600 text-sm mb-4 text-pretty">Research-focused PhD programmes at institutions with strong industry and government research ties.</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between"><span class="text-base-500">AQF Level</span><span class="font-medium text-base-900">10</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Duration</span><span class="font-medium text-base-900">3–4 years</span></div>
                        <div class="flex justify-between"><span class="text-base-500">Post-Study Work</span><span class="font-bold text-primary-800">4 years</span></div>
                    </div>
                </div>
            </div>
            <p class="text-sm text-base-500 text-pretty">Also available: Graduate Certificate and Graduate Diploma (AQF Level 8) — typically 6 months to 1 year.</p>
        </div>
    </section>

    {{-- §3 Partner Universities --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Partner Universities" :centered="false" />
            <p class="text-base-600 mb-8 text-pretty">Blue Education works with Western Australia's leading universities — and a wider network of institutions across Australia. Your advisor matches you to the right one based on your goals, background, and intended field.</p>
            @php
                $unis = [
                    ['name' => 'The University of Western Australia (UWA)', 'logo' => 'images/partners/uwa-logo.svg', 'desc' => 'One of Australia\'s leading research universities. Strong in medicine, science, law, and engineering. Consistently ranked in the global top 100.'],
                    ['name' => 'Curtin University', 'logo' => 'images/partners/curtin-logo.webp', 'desc' => 'Perth\'s largest university, with particular strength in engineering, technology, business, and health sciences. Strong industry connections.'],
                    ['name' => 'Murdoch University', 'logo' => 'images/partners/murdoch-logo.svg', 'desc' => 'Known for health sciences, law, veterinary science, and environmental studies. Smaller cohorts and strong student support.'],
                    ['name' => 'Edith Cowan University (ECU)', 'logo' => 'images/partners/ecu-logo.png', 'desc' => 'Recognised for creative arts, education, nursing, and security studies. A practical, career-focused institution.'],
                    ['name' => 'The University of Notre Dame Australia', 'logo' => 'images/partners/notre-dame-logo.webp', 'desc' => 'A smaller, values-based university with strengths in health, law, philosophy, and education. Located in Fremantle.'],
                    ['name' => 'Southern Cross University', 'logo' => 'images/partners/scu-logo.png', 'desc' => 'A regional university with campuses in NSW and Queensland, offering courses in Perth through partner institutions. Known for tourism, marine science, and health.'],
                ];
            @endphp
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @foreach($unis as $uni)
                    <div class="bg-white rounded-corner-lg border border-base-200 overflow-hidden flex flex-col">
                        <div class="flex items-center justify-center bg-gradient-to-br from-primary-50 to-primary-100 p-6 h-28">
                            <img src="{{ asset($uni['logo']) }}" alt="{{ $uni['name'] }}" class="h-14 w-auto max-w-[140px] object-contain" loading="lazy">
                        </div>
                        <div class="p-5">
                            <h3 class="font-bold text-base-900 mb-1 text-pretty">{{ $uni['name'] }}</h3>
                            <p class="text-base-600 text-sm leading-relaxed text-pretty">{{ $uni['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('about.partners') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-6 inline-block">View all partner institutions &rarr;</a>
        </div>
    </section>

    {{-- §4 Why Study in Western Australia? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14 pb-0">
            <x-section-heading title="Why study in Western Australia?" :centered="false" subtitle="What sets Western Australia apart from other study destinations." />
        </div>
    </section>

    <x-content-split title="Global recognition" :image="asset('images/services-education-degrees/global-recognition.webp')" alt="East Asian graduates clapping and celebrating at a university graduation ceremony">
        <x-slot:before>
            <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                <x-heroicon-o-globe-alt class="w-5 h-5" />
            </div>
        </x-slot:before>
        <p>Western Australia's universities are regulated by TEQSA, ensuring consistent academic standards across all programmes. Qualifications are recognised across major economies — including in regulated professions such as teaching, nursing, and engineering.</p>
    </x-content-split>

    <x-content-split title="Industry connections" :reverse="true" :image="asset('images/services-education-degrees/industry-connections.webp')" alt="East Asian professionals networking and discussing ideas in a modern office" class="bg-base-50">
        <x-slot:before>
            <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                <x-heroicon-o-briefcase class="w-5 h-5" />
            </div>
        </x-slot:before>
        <p>Many programmes include industry placements, research projects, and professional mentoring. Graduates leave with demonstrated experience in their field — not just a transcript.</p>
    </x-content-split>

    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <div class="border border-primary-200 rounded-corner-lg bg-white p-8 lg:p-12 shadow-[0_0_24px_var(--color-primary-100)]">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="flex-1 lg:max-w-[55%]">
                        <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                            <x-heroicon-o-clock class="w-5 h-5" />
                        </div>
                        <h2 class="text-2xl font-bold text-base-900 mb-6 text-pretty" data-animate="fade-up">Post-study work rights</h2>
                        <div class="text-base-600 leading-relaxed space-y-4 text-pretty">
                            <p>The Post-Study Work Visa (Subclass 485) gives graduates open work rights in Australia. That's time to build experience in your field, establish professional connections, and consider your options for permanent residence.</p>
                            <div class="grid grid-cols-3 gap-3 mt-4">
                                <div class="bg-primary-50 rounded-corner-lg p-3 text-center">
                                    <span class="block text-2xl font-bold text-primary-800">2</span>
                                    <span class="text-base-500 text-xs">years — Bachelor</span>
                                </div>
                                <div class="bg-primary-50 rounded-corner-lg p-3 text-center">
                                    <span class="block text-2xl font-bold text-primary-800">3</span>
                                    <span class="text-base-500 text-xs">years — Master</span>
                                </div>
                                <div class="bg-primary-50 rounded-corner-lg p-3 text-center">
                                    <span class="block text-2xl font-bold text-primary-800">4</span>
                                    <span class="text-base-500 text-xs">years — Doctoral</span>
                                </div>
                            </div>
                            <div class="flex gap-4 mt-4">
                                <a href="{{ route('services.migration.graduate-work') }}" class="text-primary-800 font-medium text-sm hover:underline">Graduate work visas &rarr;</a>
                                <a href="{{ route('services.migration.permanent-residence') }}" class="text-primary-800 font-medium text-sm hover:underline">Permanent residence &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 lg:max-w-[40%]">
                        <img src="{{ asset('images/services-education-degrees/post-study-work.webp') }}" alt="East Asian professional woman working on a laptop in a modern office" class="rounded-corner-lg w-full h-auto shadow-lg" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 Admission & Fees --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Admission Requirements & Fees" :centered="false" />
            <p class="text-base-600 mb-8 text-pretty">Tuition fees vary by institution, field of study, and qualification level. Perth is widely regarded as one of Australia's most cost-effective cities for international students — your advisor can provide a detailed cost breakdown for your specific situation.</p>
            <x-data-table :headers="['Programme', 'IELTS', 'Academic Requirement']"
                          :rows="[
                              ['Bachelor', '6.5', 'Year 12 equivalent or VET Diploma'],
                              ['Master', '6.5 – 7.0', 'Relevant Bachelor degree'],
                              ['Doctoral', '6.5 – 7.0', 'Relevant Master degree'],
                          ]" />
            <div class="mt-6">
                <p class="text-base-600 text-sm mb-3">Below entry requirements? There are structured pathways to get you there:</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('services.education.english') }}" class="text-primary-800 font-medium text-sm hover:underline">ELICOS and Foundation programmes &rarr;</a>
                    <a href="{{ route('services.education.vet-tafe') }}" class="text-primary-800 font-medium text-sm hover:underline">VET Diploma pathway &rarr;</a>
                </div>
                <a href="{{ route('admission-requirements') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-4 inline-block">See full admission requirements and fee guidance &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §7 How to Apply --}}
    <section class="bg-white">
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
                  subtitle="Book a free education consultation. We'll assess your background and goals, then recommend the institution and programme that suits your situation."
                  primaryText="Get University Recommendations"
                  :primaryHref="route('contact')" />

</x-layout>
