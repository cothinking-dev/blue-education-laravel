<x-layout title="Student Support"
          description="Accommodation. Guardianship. Health cover. Airport transfers. Translation. 24/7 emergency line. All arranged before arrival.">

    {{-- §1 Hero --}}
    <x-hero title="Student support services in Australia."
            subtitle="Accommodation. Guardianship. Health cover. Airport transfers. Translation. 24/7 emergency line. All arranged before arrival."
            :image="asset('images/heroes/services-student-support.webp')"
            alt="Advisor tutoring an East Asian student at a desk"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Support Services --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What's included" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-home class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Accommodation</h3>
                    <p class="text-base-600 text-sm leading-relaxed mb-3 text-pretty">Vetted homestay families through the Australian Homestay Network. Safe, supportive living environment. Meals included. Short-term and long-term arrangements available.</p>
                    <a href="{{ route('programs.buddy-programme') }}" class="text-primary-800 font-medium text-sm hover:underline">See Buddy Programme homestay &rarr;</a>
                </div>

                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-shield-check class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Guardianship (Under 18)</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Legal guardianship through Professional Student Care Australia or International Student Alliance. Welfare monitoring, school liaison, parental reporting. Required by the Department of Home Affairs for unaccompanied minor students.</p>
                </div>

                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-phone class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">24/7 Emergency Hotline</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Round-the-clock crisis support. Multilingual assistance. Coordination with local emergency services. Available to all Blue Education clients.</p>
                </div>

                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-paper-airplane class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Airport Transfers</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Meet and greet at the airport. Direct transfer to accommodation. Luggage assistance included.</p>
                </div>

                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-heart class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Health Insurance (OSHC)</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Overseas Student Health Cover — mandatory for all student visas. We arrange cover through OSHC Australia, Annalink, and Konpare — and handle policy selection, enrolment, claims assistance, and renewal.</p>
                </div>

                <div class="border border-base-200 rounded-corner-lg p-6">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2">Document Translation</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">NAATI-certified translations for academic, legal, and visa documents. Accepted by all Australian authorities. Fast turnaround.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Orientation & Onboarding --}}
    <x-content-split title="Orientation & Onboarding" :image="asset('images/services-student-support/orientation-tour.webp')" alt="East Asian student on a campus orientation tour">
        <p>Comprehensive introduction to life and study in Australia for all new arrivals:</p>
        <ul class="space-y-2 text-sm">
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Campus and local area</strong> familiarisation</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Banking and essential services</strong> setup</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Public transport</strong> guidance</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Australian lifestyle and culture</strong> introduction</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Student support services</strong> overview</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Personal development programmes</strong> for confidence and community</span></li>
        </ul>
    </x-content-split>

    {{-- §4 For Parents --}}
    <x-content-split title="For Parents" :image="asset('images/services-student-support/parent-reassurance.webp')" alt="East Asian parent reassuring child about studying abroad" class="bg-base-50" reverse>
        <p>Sending your child to study in Australia is a significant decision. Here's how we look after them:</p>
        <ul class="space-y-2 text-sm">
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>24/7 emergency hotline</strong> — for parents and students, any time</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Regular welfare reports</strong> — school updates and wellbeing checks</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>Direct communication</strong> with guardianship providers</span></li>
            <li class="flex items-start gap-2"><span class="text-primary-600 font-bold">&#8226;</span> <span><strong>On-ground support</strong> in Perth and across major Australian cities</span></li>
        </ul>
    </x-content-split>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/services-student-support/campus-life.webp', 'alt' => 'Group of university students walking through a sunny campus towards a brick building'],
    ]" />

    {{-- §5 Support Journey --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Your Support Journey" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Pre-Arrival', 'description' => 'Documents translated. Accommodation arranged. OSHC enrolled. Visa approved.'],
                ['title' => 'Arrival Day', 'description' => 'Airport pickup. Transfer to accommodation. First-day orientation.'],
                ['title' => 'Ongoing', 'description' => '24/7 hotline. Welfare monitoring. Cultural adaptation support. Personal development programmes.'],
            ]" />
        </div>
    </section>

    {{-- §6 Cost Considerations --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Cost Considerations" :centered="false" />
            <x-data-table :headers="['Item', 'Notes']"
                          :rows="[
                              ['Accommodation', 'Fees vary by homestay arrangement and duration'],
                              ['Guardianship', 'Required for under-18 students; fees vary'],
                              ['OSHC', 'Mandatory; fees depend on provider and duration'],
                              ['Medical examinations', '$240–$380 depending on assessment type'],
                              ['Translation, airport transfers, 24/7 hotline', 'Additional service fees apply'],
                          ]" />
            <p class="text-sm text-base-500 mt-4 text-pretty">Items above are costs payable directly to providers — homestay families, guardianship organisations, OSHC providers, medical clinics. Blue Education's service fees for advisory, application management, and ongoing support are quoted separately during initial consultation.</p>
            <a href="{{ route('fees') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors mt-2 inline-block">See full fees & costs &rarr;</a>
        </div>
    </section>

    {{-- §7 Explore More --}}
    <x-next-steps bg="bg-white" :links="[
        ['href' => route('programs.buddy-programme'), 'icon' => 'heroicon-o-users', 'title' => 'Buddy Programme', 'description' => 'Peer support, homestay, and cultural mentorship for new arrivals.'],
        ['href' => route('services.migration.student-visas'), 'icon' => 'heroicon-o-document-check', 'title' => 'Student visa support', 'description' => 'Application management, compliance, and renewal assistance.'],
    ]" />

    {{-- §8 CTA --}}
    <x-cta-banner title="Get the full picture."
                  subtitle="Contact us with your situation. We'll tell you exactly what support is available and what it costs."
                  primaryText="Ask About Support Services"
                  :primaryHref="route('contact')" />

</x-layout>
