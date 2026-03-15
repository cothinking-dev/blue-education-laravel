<x-layout title="Student Visas"
          description="Registered migration agents handle your Subclass 500 application end to end — eligibility, documents, GTE statement, and lodgement.">

    {{-- §1 Hero --}}
    <x-hero title="Study in Australia starts with the right visa application."
            subtitle="Registered migration agents handle your Subclass 500 application end to end — eligibility, documents, GTE statement, and lodgement."
            :image="asset('images/heroes/services-migration-student-visas.webp')"
            alt="Passport and visa application documents on a desk"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 What Is a Student Visa? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">What Is a Student Visa?</h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-pretty">The Student Visa (Subclass 500) allows international students to study full-time at a registered Australian institution — covering courses from primary school through to doctoral programmes.</p>
                    <p class="text-gray-600 leading-relaxed text-pretty">A well-prepared application moves through the system cleanly. Your advisor handles the document compilation, GTE statement, and lodgement so nothing gets missed.</p>
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
                    <p class="text-xs text-gray-500 mt-3 text-pretty">OSHC is mandatory for the duration of your visa. We arrange OSHC through our <a href="{{ route('services.student-support') }}" class="text-primary-800 hover:underline font-medium">student support services &rarr;</a></p>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 How We Help --}}
    <section class="bg-gray-50">
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

    {{-- Visual break --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/services-migration-student-visas/visa-application.webp') }}" alt="Visa application form and passport documents" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/services-migration-student-visas/student-arrival.webp') }}" alt="International student arriving at an Australian airport" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §4 Requirements Snapshot --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Requirements Snapshot" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                        <x-heroicon-o-currency-dollar class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">Financial Capacity</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Evidence covering tuition, living costs, and travel expenses for the duration of your studies.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                        <x-heroicon-o-globe-alt class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">English Proficiency</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty"><a href="{{ route('services.education.english') }}" class="text-primary-800 hover:underline font-medium">IELTS, TOEFL, PTE, or Cambridge</a> results meeting course and visa requirements.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                        <x-heroicon-o-shield-check class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">Health & Character</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Medical examination ($240–$380) and police clearance certificates from countries you've lived in.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center shrink-0">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 mb-1">Confirmation of Enrolment</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">A valid CoE from a CRICOS-registered institution. We help you secure enrolment through our <a href="{{ route('services.education.index') }}" class="text-primary-800 hover:underline font-medium">education services &rarr;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 What Comes Next? --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What Comes Next?" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <a href="{{ route('services.migration.graduate-work') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Post-study work visas &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">Your options after graduation — staying in Australia on a work visa.</p>
                </a>
                <a href="{{ route('services.student-support') }}" class="bg-white rounded-corner-lg border border-gray-200 p-6 hover:border-primary-300 hover:shadow-sm transition-all group">
                    <h3 class="font-bold text-gray-900 mb-2 group-hover:text-primary-800 transition-colors">Support during your studies &rarr;</h3>
                    <p class="text-gray-600 text-sm text-pretty">Accommodation, welfare monitoring, and ongoing advisor support.</p>
                </a>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Ready to apply?"
                  subtitle="We assess your eligibility, give you a clear document checklist, and lodge your application. No guesswork on your end."
                  primaryText="Start My Student Visa Application"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
