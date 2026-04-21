<x-layout title="Admission Requirements"
          description="English scores, academic qualifications, and pathway options — by programme level.">

    {{-- §1 Hero --}}
    <x-hero title="Admission requirements."
            subtitle="English scores, academic qualifications, and pathway options — by programme level."
            :image="asset('images/heroes/admission-requirements.webp')"
            alt="East Asian student reviewing application forms and study documents"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 English Language Requirements --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">English Language Requirements</h2>
            <p class="text-base-600 mb-2 text-pretty">Accepted tests: IELTS, TOEFL, Cambridge CAE, Pearson PTE. Scores valid for 2 years.</p>
            <x-data-table class="shadow-xl" :headers="['Programme', 'IELTS', 'PTE Academic', 'TOEFL iBT', 'Cambridge', 'Band Min (IELTS)', 'Post-Study Work Visa (Subclass 485)']"
                          :rows="[
                              ['ELICOS', 'Provider-set', '—', '—', '—', 'N/A', 'Not directly eligible — pathway into a qualifying course'],
                              ['Certificate III–IV', '5.5 – 6.0', '42 – 50', '46 – 60', '—', 'Varies', 'Generally not eligible; Graduate Work stream may apply (~18 months)'],
                              ['Diploma / Adv. Diploma', '5.5 – 6.0', '42 – 50', '46 – 60', '—', 'Varies', 'Graduate Work stream may apply if linked to eligible occupation (~18 months)'],
                              ['Bachelor', '6.0 – 6.5', '50 – 58', '60 – 79', '169 – 176', 'No band below 6.0', 'Up to 2 years (Post-Study Work stream)'],
                              ['Graduate Cert/Diploma', '6.0 – 6.5', '50 – 58', '60 – 79', '—', 'Min 6.0 each', 'Subject to overall qualification package and study duration'],
                              ['Master\'s', '6.5 – 7.0', '58 – 65', '79 – 94', '176 – 185', 'No band below 6.5', 'Up to 3 years (Post-Study Work stream)'],
                              ['Doctoral', '6.5 – 7.0', '58 – 65', '79 – 94', '—', 'No band below 6.5', 'Up to 4 years (Post-Study Work stream)'],
                          ]" />

            <p class="text-sm text-base-500 mt-4 text-pretty"><strong>Disclaimer:</strong> Score ranges and visa entitlements are indicative only. Requirements vary by course, institution, and visa type, and are subject to change by the Department of Home Affairs and individual education providers. Speak to one of our Counsellors for more personalised guidance.</p>

            {{-- Callouts: alternative English evidence + free placement test --}}
            <div class="mt-6 grid sm:grid-cols-2 gap-6">
                <x-callout title="Not all candidates need a formal English test" variant="info">
                    <x-slot:icon><x-heroicon-o-information-circle class="w-6 h-6" /></x-slot:icon>
                    Some universities accept alternative evidence of English proficiency — for example, Malaysian students may qualify with 1119 English, SPM English, or Cambridge O Level English results.
                </x-callout>

                <x-callout title="Free English Placement Test" variant="primary">
                    <x-slot:icon><x-heroicon-o-clipboard-document-check class="w-6 h-6" /></x-slot:icon>
                    Blue Education can administer a free English Placement Test for students, depending on where they are from or where they are planning to study.
                </x-callout>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-10">
            <img src="{{ asset('images/why-australia/perth-skyline.webp') }}" alt="Perth city skyline across the Swan River" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/1] shadow-lg" loading="lazy">
        </div>
    </section>

    {{-- §3 Academic Requirements --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Academic Requirements" :centered="false" />
            <x-data-table class="shadow-xl" :headers="['Education Level', 'Academic Entry Requirement']"
                          :rows="[
                              ['Foundation', 'Year 11 (or equivalent)'],
                              ['VET/TAFE', 'Year 10–12 (varies by programme)'],
                              ['Bachelor', 'Year 12 equivalent OR VET Diploma/Advanced Diploma'],
                              ['Postgraduate', 'Relevant Bachelor degree (+ work experience for some programmes)'],
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
                    <x-data-table class="shadow-xl" :headers="['Pathway', 'Duration', 'Purpose']"
                                  :rows="[
                                      ['ELICOS', '10–30 weeks', 'English proficiency improvement'],
                                      ['Foundation Studies', '1 year', 'Pre-university academic preparation'],
                                      ['VET Diploma', '1–2 years', 'Vocational qualification + university pathway'],
                                      ['Packaged Offer', 'Varies', 'English + academic programme, single visa'],
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
                    <div class="bg-primary-50 border-2 border-primary-100 rounded-corner-lg p-8 text-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <x-heroicon-o-check-circle class="w-6 h-6 text-primary-700" />
                        </div>
                        <h3 class="font-bold text-lg text-base-900 mb-3">Get assessed</h3>
                        <p class="text-base-600 text-sm mb-6 text-pretty">Send your transcripts and English test results — we'll assess your options and recommend the best pathway.</p>
                        <div class="space-y-3">
                            <a href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to get my eligibility assessed') }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 w-full bg-primary-600 text-white font-semibold px-5 py-2.5 rounded-corner text-center text-sm hover:bg-primary-700 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                Get My Eligibility Assessed
                            </a>
                            <a href="{{ route('services.education.index') }}" class="block text-center border border-primary-600 text-primary-600 font-semibold px-5 py-2.5 rounded-corner text-sm hover:bg-primary-50 transition-colors">View Education Pathways &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 CTA --}}
    <x-cta-banner title="Send your transcripts — we'll tell you where you stand."
                  subtitle="Send academic transcripts and English test results. We assess your current level, identify any gaps, and recommend the most direct pathway to your target programme."
                  primaryText="Book an Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
