<x-layout title="Buddy Programme"
          description="Two weeks inside Australian school life. High school students join classrooms, live with homestay families, and explore Western Australia.">

    {{-- §1 Hero --}}
    <x-hero title="Two weeks. Real school. Real families. Real Western Australia."
            subtitle="High school students join Australian classrooms, live with vetted homestay families, and explore Western Australia through structured field trips — all within a supervised 14-day programme run in partnership with Anglican Schools."
            :image="asset('images/heroes/programs-buddy-programme.webp')"
            alt="Students exploring nature in Western Australia"
            badge="14-Day Immersion · Anglican Schools"
            variant="left" />

    {{-- §2 What Is the Buddy Programme --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty">What Is the Buddy Programme?</h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-pretty">Two weeks inside Australian school life. Morning sessions focus on English and Australian culture. Afternoons are spent in regular high school classes, alongside local students.</p>
                    <p class="text-gray-600 leading-relaxed text-pretty">Homestay accommodation — with meals provided and homestay families approved through police background checks — ensures the experience is safe, supported, and authentic.</p>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="Programme Summary"
                                   :rows="[
                                       ['key' => 'Duration', 'value' => '14 days'],
                                       ['key' => 'Age group', 'value' => 'High school students'],
                                       ['key' => 'Accommodation', 'value' => 'Homestay (meals included)'],
                                       ['key' => 'School partner', 'value' => 'Anglican Schools'],
                                       ['key' => 'Certificate', 'value' => 'Certificate of completion'],
                                       ['key' => 'Voluntary work', 'value' => 'Yes, through local councils'],
                                   ]" />
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Your 14 Days --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Your 14 Days</h2>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="bg-primary-50 border border-primary-200 rounded-corner-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Mornings: English Language & Culture</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">Structured lessons built around Australian context — history, culture, geography, and wildlife. Grammar, vocabulary, and sentence structure taught practically, not in isolation.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#8226;</span> Australian history, geography, and wildlife as lesson themes</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#8226;</span> Vocabulary, grammar, and sentence structure</li>
                        <li class="flex items-start gap-2"><span class="text-primary-600 font-bold mt-0.5">&#8226;</span> Communication skills through interactive class discussion</li>
                    </ul>
                </div>
                <div class="bg-white border border-gray-200 rounded-corner-lg p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 text-pretty">Afternoons: High School Integration</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">Students join regular Australian high school classes — Science, Maths, and other subjects, all in English. The point is participation, not observation: same lessons, same teachers, same expectations as local students.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2"><span class="text-gray-400 font-bold mt-0.5">&#8226;</span> Standard academic classes alongside Australian peers</li>
                        <li class="flex items-start gap-2"><span class="text-gray-400 font-bold mt-0.5">&#8226;</span> All subjects taught in English (including Science, Maths)</li>
                        <li class="flex items-start gap-2"><span class="text-gray-400 font-bold mt-0.5">&#8226;</span> Social and cross-cultural skills in a real school environment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- §4 Beyond the Classroom --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Beyond the Classroom</h2>
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-gray-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/homestay-experience.webp') }}" alt="Warm homestay family welcoming an international student at their front door" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2">Homestay Experience</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Police-cleared homestay families provide meals, emotional support, and a genuine share of Australian family life — including weekend activities. Students are looked after, not just housed.</p>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/local-field-trips.webp') }}" alt="Group of students on a field trip exploring nature in Australia" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2">Local Field Trips</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Caversham Wildlife Park, Rottnest Island, The Pinnacles, King's Park, Fremantle Market, and a Penguin and Sea Lion Cruise — each chosen to connect to the cultural and environmental themes taught in class.</p>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/voluntary-work.webp') }}" alt="Young volunteers planting trees and doing community service in a park" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-2">Voluntary Work</h3>
                        <p class="text-gray-600 text-sm leading-relaxed text-pretty">Students who want to go further can arrange voluntary work with local councils. The voluntary work certificate has practical value — it strengthens CV and scholarship applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 Why It Matters --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-pretty" data-animate="fade-up">Why It Matters</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @php
                    $reasons = [
                        ['title' => 'Test before you commit', 'desc' => 'Experience Australian education without a multi-year enrolment.'],
                        ['title' => 'Build real English skills', 'desc' => 'Practical, immersive language development in 14 days of genuine classroom use.'],
                        ['title' => 'Strengthen applications', 'desc' => 'Voluntary work certificate and programme certificate support future university and scholarship submissions.'],
                        ['title' => 'Adapt, not just observe', 'desc' => 'Participating as a student, not a visitor, builds the kind of independence that carries forward.'],
                        ['title' => 'Make connections that last', 'desc' => 'With Australian classmates and homestay families in a supervised environment.'],
                        ['title' => 'Anglican Schools partnership', 'desc' => 'Established pastoral care, vetted homestay families, and a programme that has run with the same school network since its founding.'],
                    ];
                @endphp
                @foreach($reasons as $i => $reason)
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-bold shrink-0">{{ $i + 1 }}</div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1 text-pretty">{{ $reason['title'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed text-pretty">{{ $reason['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §6 Also Relevant --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('services.student-support') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">Student support services &rarr;</a>
                <a href="{{ route('programs.study-tours') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">Study tours &rarr;</a>
                <a href="{{ route('services.education.english') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">English programmes &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §7 CTA --}}
    <x-cta-banner title="Limited places each intake."
                  subtitle="Contact us to confirm availability for the upcoming intake and receive programme dates, costs, and enrolment details."
                  primaryText="Enquire About the Buddy Programme"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
