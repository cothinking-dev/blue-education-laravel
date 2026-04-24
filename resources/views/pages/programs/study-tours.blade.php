<x-layout title="Study Tours"
          description="Short-term study tours for high school students in Western Australia. The Buddy Programme, culinary experiences, and custom group tours.">

    {{-- §1 Hero --}}
    <x-hero title="Study tours for high school students in Western Australia"
            subtitle="From structured school immersions to culinary experiences and bespoke group tours, our programmes give high school students a genuine taste of Australian education and culture, fully supervised and supported by our Perth team."
            :image="asset('images/heroes/programs-study-tours.webp')"
            alt="East Asian women friends exploring a city together"
            badge="7 – 14 Day Immersion"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Programme Overview --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Study Tour Programmes" :centered="false" />
            <p class="text-base-600 mb-8 -mt-2 text-pretty">Blue Education designs short-term educational and cultural immersion programmes in Western Australia. Every programme combines structured learning with real cultural experiences, and participants leave with a certificate of participation.</p>
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <a href="#buddy-programme" class="border border-base-200 rounded-corner-lg p-6 bg-white hover:border-primary-300 transition-colors group">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 group-hover:text-primary-700 transition-colors">Buddy Programme</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">7 to 14 days of school immersion with homestay families.</p>
                </a>
                <a href="#culinary-tour" class="border border-base-200 rounded-corner-lg p-6 bg-white hover:border-primary-300 transition-colors group">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-fire class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 group-hover:text-primary-700 transition-colors">Culinary Study Tour</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Hands-on culinary training and cultural immersion in Fremantle.</p>
                </a>
                <a href="#custom-tours" class="border border-base-200 rounded-corner-lg p-6 bg-white hover:border-primary-300 transition-colors group">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-puzzle-piece class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 group-hover:text-primary-700 transition-colors">Custom Group Tours</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Bespoke programmes designed around your group's goals and timeline.</p>
                </a>
            </div>
        </div>
    </section>

    {{-- §3 Buddy Programme --}}
    <section id="buddy-programme" class="bg-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What is the Buddy Programme?</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">The Buddy Programme is a two-week immersion into real Australian school life. Mornings focus on English language skills and Australian culture, while afternoons are spent in regular high school classes alongside local students.</p>
                    <p class="text-base-600 leading-relaxed text-pretty">Students stay in homestay accommodation with meals provided, living with carefully screened families who have completed police background checks. This creates a safe, supported and genuinely authentic experience of everyday life in Australia.</p>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="Programme Summary"
                                   :rows="[
                                       ['key' => 'Duration', 'value' => '7 – 14 days (customisable)'],
                                       ['key' => 'Age group', 'value' => 'High school students'],
                                       ['key' => 'Accommodation', 'value' => 'Homestay (meals included)'],
                                       ['key' => 'Certificate', 'value' => 'Certificate of completion'],
                                       ['key' => 'Voluntary work', 'value' => 'Yes, through local councils'],
                                   ]" />
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Your Programme --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Your Programme" :centered="false" />
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
                        <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">Structured lessons built around Australian context: history, culture, geography, and wildlife. Grammar, vocabulary, and sentence structure taught practically, not in isolation.</p>
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
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Afternoons: High School Integration or Field Trips</h3>
                        <p class="text-base-600 text-sm leading-relaxed mb-4 text-pretty">Students join regular Australian high school classes, or take part in field trips where learning is extended beyond the classroom. The point is participation, not observation: same lessons, same teachers, same expectations as local students.</p>
                        <ul class="space-y-2 text-sm text-base-600">
                            <li class="flex items-start gap-2"><span class="text-base-500 mt-0.5">&#8226;</span> Standard academic classes alongside Australian peers</li>
                            <li class="flex items-start gap-2"><span class="text-base-500 mt-0.5">&#8226;</span> All subjects taught in English (including Science, Maths)</li>
                            <li class="flex items-start gap-2"><span class="text-base-500 mt-0.5">&#8226;</span> Field trips connecting classroom themes to real-world experiences</li>
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
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Police-cleared homestay families provide meals, emotional support, and a genuine share of Australian family life, including weekend activities. Students are looked after, not just housed.</p>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/local-field-trips.webp') }}" alt="East Asian students examining a tree on an outdoor field trip with notebooks" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-base-900 mb-2">Local Field Trips</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Caversham Wildlife Park, Rottnest Island, The Pinnacles, King's Park, Fremantle Market, and a Penguin and Sea Lion Cruise, each chosen to connect to the cultural and environmental themes taught in class.</p>
                    </div>
                </div>
                <div class="border border-base-200 rounded-corner-lg overflow-hidden">
                    <img src="{{ asset('images/programs-buddy-programme/voluntary-work.webp') }}" alt="East Asian young women volunteers planting trees together in a park" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                    <div class="p-5">
                        <h3 class="font-bold text-base-900 mb-2">Voluntary Work</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Students who want to go further can arrange voluntary work with local councils. The voluntary work certificate has practical value: it strengthens CV and scholarship applications.</p>
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
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6 C4 4.5, 5.5 3, 7 3 L21 3 C22.5 3, 24 4.5, 24 6 L24 16 C24 17.5, 22.5 19, 21 19 L12 19 L7 23 L7 19 L7 19 C5.5 19, 4 17.5, 4 16 Z" class="fill-primary-100 stroke-primary-400" stroke-width="1.5" />
                            <text x="14" y="14.5" text-anchor="middle" dominant-baseline="central" class="fill-primary-700" font-size="10" font-weight="700" font-family="Inter, sans-serif">Aa</text>
                        </svg>
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Build real English skills</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Practical, immersive language development through genuine classroom use.</p>
                </div>
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
                <div class="bg-white rounded-corner-lg border border-base-200 p-6">
                    <div class="w-12 h-12 rounded-corner bg-primary-50 flex items-center justify-center mb-4" aria-hidden="true">
                        <x-heroicon-o-shield-check class="w-7 h-7 text-primary-600" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1 text-pretty">Partner school network</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Established pastoral care, vetted homestay families, and a programme that runs with selected partner schools in Western Australia.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §6 Culinary Study Tour --}}
    <section id="culinary-tour" class="bg-white scroll-mt-20">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1 lg:max-w-[45%]">
                    <img src="{{ asset('images/programs-study-tours/culinary-tour.webp') }}" alt="East Asian culinary students learning knife skills from a professional chef in a commercial kitchen" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
                <div class="flex-1">
                    <x-badge variant="semantic" color="green" :uppercase="false" class="mb-3">Fremantle, Western Australia</x-badge>
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Cook. Explore. Experience Western Australia.</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Hands-on culinary training and cultural immersion in Fremantle, one of Western Australia's most vibrant coastal cities. Australian cooking techniques, local food markets, and Perth's food culture firsthand.</p>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">For high school students with an interest in food, hospitality, or simply wanting to experience Australia through its cuisine.</p>
                    <x-btn href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to enquire about the Culinary Tour') }}" variant="primary" size="lg" target="_blank" rel="noopener noreferrer">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Enquire About the Culinary Tour
                    </x-btn>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 Custom Group Tours --}}
    <section id="custom-tours" class="bg-primary-50 scroll-mt-20">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Custom Group Tours</h2>
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">We design bespoke study tours for schools and educational institutions. Tell us your group size, interests, and timeline, and we build the programme.</p>
                    <x-btn href="https://wa.me/{{ config('seo.organization.whatsapp') }}?text={{ rawurlencode('Hi, I\'d like to enquire about a custom group tour') }}" variant="primary" size="lg" target="_blank" rel="noopener noreferrer">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Enquire About a Custom Tour
                    </x-btn>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/programs-study-tours/custom-group-tours.webp') }}" alt="East Asian students examining nature outdoors during an educational field activity" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §8 How It Works --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="How It Works" :centered="false" />
            <x-timeline :steps="[
                ['title' => 'Tell us what you need', 'description' => 'Describe your group size, interests, and preferred dates. Individual enquiries are welcome.'],
                ['title' => 'We design the programme', 'description' => 'Blue Education builds a tailored itinerary combining educational content, cultural experiences, and logistics.'],
                ['title' => 'Confirm and prepare', 'description' => 'Once the programme is agreed, we handle pre-arrival coordination: visa guidance, orientation materials, and host briefings.'],
                ['title' => 'Arrive and experience', 'description' => 'Your group arrives in Western Australia with everything organised. Blue Education provides on-the-ground support throughout.'],
            ]" />
        </div>
    </section>

    {{-- §9 Also Relevant --}}
    <x-next-steps variant="links" bg="bg-white" :links="[
        ['href' => route('programs.study-abroad'), 'title' => 'Study Abroad for university students'],
        ['href' => route('services.student-support'), 'title' => 'Student support services'],
        ['href' => route('services.education.english'), 'title' => 'English programmes'],
    ]" />

    {{-- §9 CTA --}}
    <x-cta-banner title="Limited slots each intake."
                  subtitle="Contact us to confirm availability for the upcoming intake and receive programme dates, costs, and enrolment details."
                  primaryText="Enquire About Study Tours"
                  :primaryHref="route('contact')" />

</x-layout>
