<x-layout title="Admission Requirements"
          description="English scores, academic qualifications, and pathway options — by program level.">

    {{-- §1 Hero --}}
    <x-hero title="Admission requirements."
            subtitle="English scores, academic qualifications, and pathway options — by program level."
            :image="asset('images/heroes/admission-requirements.webp')"
            alt="East Asian student reviewing application forms and study documents"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 English Language Requirements --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">English Language Requirements</h2>
            <p class="text-base-600 mb-2 text-pretty">Accepted tests: IELTS, TOEFL, Cambridge CAE, Pearson PTE. Scores valid for 2 years.</p>
            <p class="text-sm text-base-500 mb-6 text-pretty">Institutions may set higher thresholds. Course requirements may differ from visa requirements.</p>
            <x-data-table :headers="['Program', 'Overall IELTS', 'Per-Band Minimum']"
                          :rows="[
                              ['Certificate I–IV', '5.5', 'Varies'],
                              ['VET/TAFE', '5.5 – 6.0', 'Varies'],
                              ['Bachelor', '6.0 – 6.5', 'No band below 6.0'],
                              ['Bachelor Honours', '6.5', 'No band below 6.0'],
                              ['Graduate Cert/Diploma', '6.5 – 7.0', 'Minimum 6.0 in each band'],
                              ['Masters', '6.5 – 7.5', 'No band below 6.5'],
                              ['Doctoral', '6.5 – 8.0', 'No band below 7.0'],
                          ]" />
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/admission-requirements/study-materials.webp') }}" alt="East Asian student with study materials and textbooks for academic preparation" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/admission-requirements/checklist.webp') }}" alt="Application checklist and admission documents on a desk" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §3 Academic Requirements --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Academic Requirements" :centered="false" />
            <x-data-table :headers="['Education Level', 'Academic Entry Requirement']"
                          :rows="[
                              ['Foundation', 'Year 11 (or equivalent)'],
                              ['VET/TAFE', 'Year 10–12 (varies by program)'],
                              ['Bachelor', 'Year 12 equivalent OR VET Diploma/Advanced Diploma'],
                              ['Postgraduate', 'Relevant Bachelor degree (+ work experience for some programs)'],
                              ['Professional (teaching, nursing, engineering)', 'Academic admission plus registration with the relevant Australian authority'],
                              ['Creative Arts', 'Portfolio or interview may apply'],
                          ]" />
        </div>
    </section>

    {{-- §4 Pathway Options --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">If you don't meet direct entry requirements</h2>
            <p class="text-base-600 mb-8 text-pretty">We assess where you are now and map the shortest path to where you want to be.</p>
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <x-data-table :headers="['Pathway', 'Duration', 'Purpose']"
                                  :rows="[
                                      ['ELICOS', '10–30 weeks', 'English proficiency improvement'],
                                      ['Foundation Studies', '1 year', 'Pre-university academic preparation'],
                                      ['VET Diploma', '1–2 years', 'Vocational qualification + university pathway'],
                                      ['Packaged Offer', 'Varies', 'English + academic program, single visa'],
                                  ]" />
                    <div class="mt-6 flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('services.education.english') }}" class="text-primary-800 font-medium text-sm hover:underline">English & Foundation programmes &rarr;</a>
                        <a href="{{ route('services.education.vet-tafe') }}" class="text-primary-800 font-medium text-sm hover:underline">VET Diploma pathway &rarr;</a>
                    </div>

                    <div class="bg-amber-50 border border-amber-200 rounded-corner p-4 mt-6">
                        <p class="text-amber-800 text-sm text-pretty"><strong>Professional fields note:</strong> Teaching, nursing, and engineering graduates require registration with the relevant Australian authority — Teaching Council, AHPRA (nursing and allied health), or Engineers Australia — in addition to academic admission. We advise on these requirements as part of your pathway assessment.</p>
                    </div>
                </div>
                <div class="lg:w-[35%]">
                    <div class="bg-primary-800 rounded-corner-lg p-6 text-white">
                        <h3 class="font-bold text-lg mb-3">Get assessed</h3>
                        <p class="text-primary-200 text-sm mb-6 text-pretty">Send your transcripts and English test results — we'll assess your options and recommend the best pathway.</p>
                        <div class="space-y-3">
                            <a href="{{ route('contact') }}" class="block bg-white text-primary-800 font-semibold px-5 py-2.5 rounded-corner text-center text-sm hover:bg-primary-50 transition-colors">Get My Eligibility Assessed</a>
                            <a href="{{ route('services.education.index') }}" class="block text-center text-primary-200 font-medium text-sm hover:text-white transition-colors">View Education Pathways &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 CTA --}}
    <x-cta-banner title="Send your transcripts — we'll tell you where you stand."
                  subtitle="Send academic transcripts and English test results. We assess your current level, identify any gaps, and recommend the most direct pathway to your target program."
                  primaryText="Book an Assessment"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
