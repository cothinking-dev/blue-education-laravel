<x-layout title="Why Australia"
          description="Globally recognised degrees, post-study work rights, and a quality of life that consistently ranks among the world's best.">

    {{-- §1 Hero --}}
    <x-hero title="Five things Australia gets right for international students."
            subtitle="Globally recognised degrees, post-study work rights, and a quality of life that consistently ranks among the world's best. Western Australia included."
            :image="asset('images/heroes/why-australia.webp')"
            alt="Perth Elizabeth Quay waterfront and city skyline"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 Five Reasons --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14 space-y-14">

            {{-- 01 --}}
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <span class="text-6xl font-bold text-primary-100">01</span>
                    <h3 class="text-2xl font-bold text-base-900 mt-2 mb-4 text-pretty">Globally recognised qualifications</h3>
                    <p class="text-base-600 leading-relaxed mb-3 text-pretty">Seven Australian universities rank in the QS World University Rankings top 100. Every institution is regulated by TEQSA, Australia's national quality assurance framework, ensuring standards that employers and institutions worldwide recognise.</p>
                    <p class="text-base-500 text-sm italic text-pretty">An Australian degree travels well. That's the point.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/why-australia/globally-recognised-qualifications.webp') }}" alt="East Asian students studying together on a university campus" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            {{-- 02 --}}
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
                <div class="flex-1">
                    <span class="text-6xl font-bold text-primary-100">02</span>
                    <h3 class="text-2xl font-bold text-base-900 mt-2 mb-4 text-pretty">More choice than almost anywhere</h3>
                    <p class="text-base-600 leading-relaxed text-pretty">1,100+ institutions. 20,000+ programs. From 10-week English language courses to doctoral research, vocational training to executive education — Australia offers a pathway for every ambition, every level, every budget.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/why-australia/education-choice.webp') }}" alt="East Asian students studying in a university library" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            {{-- 03 --}}
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <span class="text-6xl font-bold text-primary-100">03</span>
                    <h3 class="text-2xl font-bold text-base-900 mt-2 mb-4 text-pretty">Work while you study — and after</h3>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Australia actively encourages international students to work. After graduation, the Post-Study Work Visa (Subclass 485) gives you real time to build your career:</p>
                    <x-data-table :headers="['Qualification', 'Visa Duration']"
                                  :rows="[
                                      ['Bachelor Degree', '2 years'],
                                      ['Master Degree', '3 years'],
                                      ['Doctoral Degree', '4 years'],
                                  ]" />
                    <p class="text-base-600 leading-relaxed mt-4 text-pretty">The Graduate Work Stream provides 18 months for graduates with skills on the relevant occupation lists. Either way, it's a genuine career launchpad.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/why-australia/post-study-work.webp') }}" alt="East Asian professional woman working on a laptop in a modern office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            {{-- 04 --}}
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12">
                <div class="flex-1">
                    <span class="text-6xl font-bold text-primary-100">04</span>
                    <h3 class="text-2xl font-bold text-base-900 mt-2 mb-4 text-pretty">A lifestyle that's hard to beat</h3>
                    <p class="text-base-600 leading-relaxed text-pretty">The 2025 EIU Global Liveability Index placed three Australian cities in the world's top 10. Melbourne fourth. Sydney sixth. Adelaide ninth. The factors assessed: stability, healthcare, culture, education, and infrastructure. Australia performs well across all of them.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/why-australia/quality-of-life.webp') }}" alt="Melbourne city skyline with lush green parklands in the foreground" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            {{-- 05 --}}
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <span class="text-6xl font-bold text-primary-100">05</span>
                    <h3 class="text-2xl font-bold text-base-900 mt-2 mb-4 text-pretty">Affordable compared to the alternatives</h3>
                    <p class="text-base-600 leading-relaxed text-pretty">Australia offers competitive tuition fees across its university sector — from AUD $20,000 per year for many undergraduate programs. Perth and regional cities offer a lower cost of living than Australia's east coast capitals. The combination makes a meaningful difference over a two to four year degree.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/why-australia/affordable-living.webp') }}" alt="East Asian student working on a laptop at an outdoor cafe" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §3 Perth & Western Australia --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <p class="text-sm font-semibold text-primary-800 mb-2">The Golden State of Education</p>
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">Why Perth.</h2>
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <p class="text-base-600 leading-relaxed text-pretty">Perth is Western Australia's capital and Blue Education's home base. It's also one of the most underrated study destinations in Australia — four globally ranked universities, a thriving job market across mining, technology, healthcare, and education, and a liveability ranking that consistently places it among the world's top 15 cities.</p>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="Perth Advantage"
                                   :rows="[
                                       ['key' => 'Cost of living', 'value' => 'Lower than Sydney and Melbourne'],
                                       ['key' => 'Class sizes', 'value' => 'Smaller, more personal attention'],
                                       ['key' => 'Safety', 'value' => 'Lower crime rate than most eastern capitals'],
                                       ['key' => 'Job market', 'value' => 'Mining, technology, healthcare, education'],
                                       ['key' => 'Climate', 'value' => 'Year-round sunshine'],
                                       ['key' => 'Blue Education HQ', 'value' => 'On-ground support and local expertise'],
                                   ]" />
                </div>
            </div>
        </div>
    </section>

    {{-- §4 Multicultural by Design --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid sm:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Culturally diverse</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">One of the most multicultural countries on earth.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">English immersion</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Full daily immersion in the global language of business and science.</p>
                </div>
                <div class="border-l-4 border-primary-600 pl-6">
                    <h3 class="font-bold text-base-900 mb-2">Legal protections</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Strong anti-discrimination laws. International student rights protected at every level.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 CTA --}}
    <x-cta-banner title="Talk to someone who knows Western Australia."
                  :subtitle="'Perth-based advisors with ' . (date('Y') - 1998) . ' years of experience, serving clients from 40+ countries. We\'ll tell you what fits your situation — no guesswork.'"
                  primaryText="Book an Education Assessment"
                  :primaryHref="route('contact')"
                  secondaryText="Explore Education Services"
                  :secondaryHref="route('services.education.index')" />

</x-layout>
