<x-layout title="Buddy Programme"
          description="Two weeks inside Australian school life. High school students join classrooms, live with homestay families, and explore Western Australia.">

    {{-- §1 Hero --}}
    <x-hero title="Fourteen days inside an Australian school with a homestay family"
            subtitle="High school students join Australian classrooms, live with vetted homestay families, and explore Western Australia through structured field trips — all within a supervised 14-day programme run in partnership with Anglican Schools."
            :image="asset('images/heroes/programs-buddy-programme.webp')"
            alt="East Asian students exploring nature in Western Australia"
            badge="14-Day Immersion · Anglican Schools"
            variant="left"
            height="90dvh"
            :breadcrumbs="true" />

    {{-- §2 What Is the Buddy Programme --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What Is the Buddy Programme?</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Two weeks inside Australian school life. Morning sessions focus on English and Australian culture. Afternoons are spent in regular high school classes, alongside local students.</p>
                    <p class="text-base-600 leading-relaxed text-pretty">Homestay accommodation — with meals provided and homestay families approved through police background checks — ensures the experience is safe, supported, and authentic.</p>
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
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Your 14 Days" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <div class="bg-primary-50 border border-primary-200 rounded-corner-lg overflow-hidden">
                    {{-- Morning illustration — sunrise with open book --}}
                    <div class="relative h-32 bg-gradient-to-b from-primary-100 to-primary-50 overflow-hidden" aria-hidden="true">
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 600 128" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax slice">
                            <circle cx="300" cy="108" r="36" class="fill-primary-300/60" />
                            <circle cx="300" cy="108" r="24" class="fill-primary-200" />
                            <g class="stroke-primary-300/40" stroke-width="2">
                                <line x1="300" y1="60" x2="300" y2="48" />
                                <line x1="340" y1="72" x2="350" y2="62" />
                                <line x1="260" y1="72" x2="250" y2="62" />
                                <line x1="356" y1="100" x2="370" y2="96" />
                                <line x1="244" y1="100" x2="230" y2="96" />
                            </g>
                            <line x1="0" y1="110" x2="600" y2="110" class="stroke-primary-200" stroke-width="1.5" />
                            <g transform="translate(255, 56)">
                                <path d="M45 24 C45 16, 35 10, 20 10 C10 10, 2 14, 0 18 L0 52 C2 48, 10 44, 20 44 C35 44, 45 50, 45 50 Z" class="fill-white/70 stroke-primary-400" stroke-width="1.5" />
                                <path d="M45 24 C45 16, 55 10, 70 10 C80 10, 88 14, 90 18 L90 52 C88 48, 80 44, 70 44 C55 44, 45 50, 45 50 Z" class="fill-white/50 stroke-primary-400" stroke-width="1.5" />
                                <line x1="10" y1="22" x2="36" y2="22" class="stroke-primary-300" stroke-width="1" />
                                <line x1="10" y1="28" x2="32" y2="28" class="stroke-primary-300" stroke-width="1" />
                                <line x1="10" y1="34" x2="34" y2="34" class="stroke-primary-300" stroke-width="1" />
                                <line x1="54" y1="22" x2="80" y2="22" class="stroke-primary-300" stroke-width="1" />
                                <line x1="54" y1="28" x2="76" y2="28" class="stroke-primary-300" stroke-width="1" />
                                <line x1="54" y1="34" x2="78" y2="34" class="stroke-primary-300" stroke-width="1" />
                            </g>
                            <g class="fill-white/50">
                                <ellipse cx="120" cy="40" rx="28" ry="12" />
                                <ellipse cx="140" cy="36" rx="20" ry="10" />
                                <ellipse cx="480" cy="50" rx="24" ry="10" />
                                <ellipse cx="500" cy="46" rx="18" ry="9" />
                            </g>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Mornings: English Language & Culture</h3>
                        <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">Structured lessons built around Australian context — history, culture, geography, and wildlife. Grammar, vocabulary, and sentence structure taught practically, not in isolation.</p>
                        <ul class="space-y-2 text-sm text-base-600">
                            <li class="flex items-start gap-2"><span class="text-primary-600 mt-0.5">&#8226;</span> Australian history, geography, and wildlife as lesson themes</li>
                            <li class="flex items-start gap-2"><span class="text-primary-600 mt-0.5">&#8226;</span> Vocabulary, grammar, and sentence structure</li>
                            <li class="flex items-start gap-2"><span class="text-primary-600 mt-0.5">&#8226;</span> Communication skills through interactive class discussion</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-white border border-base-200 rounded-corner-lg overflow-hidden">
                    {{-- Afternoon illustration — school building scene --}}
                    <div class="relative h-32 bg-gradient-to-b from-primary-800 to-primary-900 overflow-hidden" aria-hidden="true">
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 600 128" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax slice">
                            <circle cx="500" cy="50" r="28" class="fill-primary-400/30" />
                            <circle cx="500" cy="50" r="18" class="fill-primary-300/50" />
                            <g transform="translate(180, 38)">
                                <rect x="20" y="30" width="160" height="60" rx="2" class="fill-primary-700 stroke-primary-500/40" stroke-width="1" />
                                <rect x="80" y="14" width="40" height="76" rx="2" class="fill-primary-600 stroke-primary-500/40" stroke-width="1" />
                                <polygon points="76,14 100,0 124,14" class="fill-primary-500/60 stroke-primary-400/50" stroke-width="1" />
                                <rect x="92" y="60" width="16" height="30" rx="2" class="fill-primary-800" />
                                <circle cx="105" cy="76" r="1.5" class="fill-primary-400" />
                                <rect x="34" y="40" width="12" height="14" rx="1" class="fill-primary-300/30" />
                                <rect x="54" y="40" width="12" height="14" rx="1" class="fill-primary-300/30" />
                                <rect x="134" y="40" width="12" height="14" rx="1" class="fill-primary-300/30" />
                                <rect x="154" y="40" width="12" height="14" rx="1" class="fill-primary-300/30" />
                                <rect x="34" y="62" width="12" height="14" rx="1" class="fill-primary-300/20" />
                                <rect x="54" y="62" width="12" height="14" rx="1" class="fill-primary-300/20" />
                                <rect x="134" y="62" width="12" height="14" rx="1" class="fill-primary-300/20" />
                                <rect x="154" y="62" width="12" height="14" rx="1" class="fill-primary-300/20" />
                                <rect x="86" y="26" width="10" height="12" rx="1" class="fill-primary-300/30" />
                                <rect x="104" y="26" width="10" height="12" rx="1" class="fill-primary-300/30" />
                                <rect x="86" y="44" width="10" height="12" rx="1" class="fill-primary-300/30" />
                                <rect x="104" y="44" width="10" height="12" rx="1" class="fill-primary-300/30" />
                                <line x1="100" y1="0" x2="100" y2="-14" class="stroke-primary-400/60" stroke-width="1.5" />
                                <polygon points="100,-14 114,-10 100,-6" class="fill-primary-400/50" />
                            </g>
                            <rect x="0" y="118" width="600" height="10" class="fill-primary-950/40" />
                            <g class="fill-primary-500/40">
                                <ellipse cx="140" cy="105" rx="16" ry="20" />
                                <rect x="137" y="110" width="6" height="12" class="fill-primary-700/50" />
                                <ellipse cx="460" cy="108" rx="14" ry="16" />
                                <rect x="457" y="112" width="6" height="10" class="fill-primary-700/50" />
                            </g>
                            <g class="fill-primary-300/30">
                                <circle cx="100" cy="100" r="5" />
                                <rect x="96" y="105" width="8" height="14" rx="3" />
                                <circle cx="116" cy="102" r="4.5" />
                                <rect x="112.5" y="107" width="7" height="12" rx="3" />
                                <circle cx="475" cy="101" r="4.5" />
                                <rect x="471.5" y="106" width="7" height="13" rx="3" />
                            </g>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Afternoons: High School Integration</h3>
                        <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">Students join regular Australian high school classes — Science, Maths, and other subjects, all in English. The point is participation, not observation: same lessons, same teachers, same expectations as local students.</p>
                        <ul class="space-y-2 text-sm text-base-600">
                            <li class="flex items-start gap-2"><span class="text-base-500 mt-0.5">&#8226;</span> Standard academic classes alongside Australian peers</li>
                            <li class="flex items-start gap-2"><span class="text-base-500 mt-0.5">&#8226;</span> All subjects taught in English (including Science, Maths)</li>
                            <li class="flex items-start gap-2"><span class="text-base-500 mt-0.5">&#8226;</span> Social and cross-cultural skills in a real school environment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §4 Beyond the Classroom --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Beyond the Classroom" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/homestay-experience.webp') }}" alt="Australian homestay family welcoming an East Asian student at their front door" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-base-900 mb-2">Homestay Experience</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Police-cleared homestay families provide meals, emotional support, and a genuine share of Australian family life — including weekend activities. Students are looked after, not just housed.</p>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/local-field-trips.webp') }}" alt="East Asian students examining a tree on an outdoor field trip with notebooks" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-base-900 mb-2">Local Field Trips</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Caversham Wildlife Park, Rottnest Island, The Pinnacles, King's Park, Fremantle Market, and a Penguin and Sea Lion Cruise — each chosen to connect to the cultural and environmental themes taught in class.</p>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/voluntary-work.webp') }}" alt="East Asian young women volunteers planting trees together in a park" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-base-900 mb-2">Voluntary Work</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Students who want to go further can arrange voluntary work with local councils. The voluntary work certificate has practical value — it strengthens CV and scholarship applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 Why It Matters --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why It Matters" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                {{-- 1. Test before you commit — compass/map icon --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14" cy="14" r="12" class="stroke-primary-300" stroke-width="1.5" fill="none" />
                            <circle cx="14" cy="14" r="2" class="fill-primary-500" />
                            <polygon points="14,4 16,12 14,10 12,12" class="fill-primary-600" />
                            <polygon points="14,24 12,16 14,18 16,16" class="fill-primary-300" />
                            <polygon points="4,14 12,12 10,14 12,16" class="fill-primary-300" />
                            <polygon points="24,14 16,16 18,14 16,12" class="fill-primary-600" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Test before you commit</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Experience Australian education without a multi-year enrolment.</p>
                </div>

                {{-- 2. Build real English skills — speech bubble with A --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6 C4 4.5, 5.5 3, 7 3 L21 3 C22.5 3, 24 4.5, 24 6 L24 16 C24 17.5, 22.5 19, 21 19 L12 19 L7 23 L7 19 L7 19 C5.5 19, 4 17.5, 4 16 Z" class="fill-primary-100 stroke-primary-400" stroke-width="1.5" />
                            <text x="14" y="14.5" text-anchor="middle" dominant-baseline="central" class="fill-primary-700" font-size="10" font-weight="700" font-family="Inter, sans-serif">Aa</text>
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Build real English skills</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Practical, immersive language development in 14 days of genuine classroom use.</p>
                </div>

                {{-- 3. Strengthen applications — certificate/ribbon --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="2" width="20" height="16" rx="2" class="fill-primary-100 stroke-primary-400" stroke-width="1.5" />
                            <line x1="8" y1="7" x2="20" y2="7" class="stroke-primary-300" stroke-width="1.5" />
                            <line x1="8" y1="10.5" x2="17" y2="10.5" class="stroke-primary-300" stroke-width="1.5" />
                            <line x1="8" y1="14" x2="13" y2="14" class="stroke-primary-300" stroke-width="1.5" />
                            <circle cx="20" cy="18" r="5" class="fill-primary-500" />
                            <path d="M18 18 L19.5 19.5 L22.5 16" class="stroke-white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <path d="M17 23 L18.5 21 L20 24 L21.5 21 L23 23" class="fill-primary-400" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Strengthen applications</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Voluntary work certificate and programme certificate support future university and scholarship submissions.</p>
                </div>

                {{-- 4. Adapt, not just observe — person stepping forward --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="14" cy="5" r="3" class="fill-primary-500" />
                            <path d="M10 11 L14 9 L18 11 L16 17 L18 24" class="stroke-primary-600" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <path d="M14 9 L14 18 L10 24" class="stroke-primary-600" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                            <path d="M14 13 L19 10" class="stroke-primary-400" stroke-width="1.8" stroke-linecap="round" fill="none" />
                            <path d="M14 13 L9 15" class="stroke-primary-400" stroke-width="1.8" stroke-linecap="round" fill="none" />
                            <path d="M20 7 L24 5" class="stroke-primary-300" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M21 10 L25 10" class="stroke-primary-300" stroke-width="1.2" stroke-linecap="round" />
                            <path d="M20 13 L24 15" class="stroke-primary-300" stroke-width="1.2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Adapt, not just observe</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Participating as a student, not a visitor, builds the kind of independence that carries forward.</p>
                </div>

                {{-- 5. Make connections that last — linked people --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="8" cy="8" r="3.5" class="fill-primary-400" />
                            <path d="M3 18 C3 14.5, 5.5 13, 8 13 C10.5 13, 13 14.5, 13 18" class="stroke-primary-400" stroke-width="1.5" fill="none" />
                            <circle cx="20" cy="8" r="3.5" class="fill-primary-600" />
                            <path d="M15 18 C15 14.5, 17.5 13, 20 13 C22.5 13, 25 14.5, 25 18" class="stroke-primary-600" stroke-width="1.5" fill="none" />
                            <path d="M10 14 C11 12, 13 11, 14 11 C15 11, 17 12, 18 14" class="stroke-primary-300" stroke-width="1.5" stroke-dasharray="2 2" fill="none" />
                            <circle cx="14" cy="22" r="2" class="fill-primary-300" />
                            <line x1="8" y1="18" x2="12" y2="21" class="stroke-primary-300" stroke-width="1" />
                            <line x1="20" y1="18" x2="16" y2="21" class="stroke-primary-300" stroke-width="1" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Make connections that last</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">With Australian classmates and homestay families in a supervised environment.</p>
                </div>

                {{-- 6. Anglican Schools partnership — shield/crest --}}
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2 L24 6 L24 14 C24 20, 20 24, 14 26 C8 24, 4 20, 4 14 L4 6 Z" class="fill-primary-100 stroke-primary-400" stroke-width="1.5" />
                            <path d="M14 6 L20 8.5 L20 14 C20 18, 17.5 21, 14 22.5 C10.5 21, 8 18, 8 14 L8 8.5 Z" class="fill-primary-200/60" />
                            <line x1="14" y1="9" x2="14" y2="19" class="stroke-primary-500" stroke-width="1.8" />
                            <line x1="10" y1="13" x2="18" y2="13" class="stroke-primary-500" stroke-width="1.8" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Anglican Schools partnership</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Established pastoral care, vetted homestay families, and a programme that has run with the same school network since its founding.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §6 Also Relevant --}}
    <x-next-steps variant="links" bg="bg-white" :links="[
        ['href' => route('services.student-support'), 'title' => 'Student support services'],
        ['href' => route('programs.study-tours'), 'title' => 'Study tours'],
        ['href' => route('services.education.english'), 'title' => 'English programmes'],
    ]" />

    {{-- §7 CTA --}}
    <x-cta-banner title="Limited slots each intake."
                  subtitle="Contact us to confirm availability for the upcoming intake and receive programme dates, costs, and enrolment details."
                  primaryText="Enquire About the Buddy Programme"
                  :primaryHref="route('contact')" />

</x-layout>
