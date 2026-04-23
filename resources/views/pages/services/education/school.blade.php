<x-layout title="School Programmes"
          description="A quality Australian education with a safety net built around every student. We handle placement, visa, accommodation, and guardianship.">

    {{-- §1 Hero --}}
    <x-hero title="A quality Australian education with a safety net built around every student — from primary school children to mature-aged learners."
            subtitle="We handle placement, visa, accommodation, and guardianship, so families and adult students aren't left worrying from the other side of the world."
            :image="asset('images/heroes/services-education-school.webp')"
            alt="East Asian children in school uniforms in an Australian classroom"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Questions that need answers --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-8 text-pretty" data-animate="fade-up">Questions that need answers...</h2>
            <div class="relative border border-base-200 rounded-corner-lg overflow-hidden shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <caption class="sr-only">Common questions from families about school placement in Australia</caption>
                        <thead>
                            <tr class="bg-base-50 border-b border-base-200 text-left">
                                <th scope="col" class="px-6 py-4 font-semibold text-sm text-base-700 whitespace-nowrap">Area</th>
                                <th scope="col" class="px-6 py-4 font-semibold text-sm text-base-700 whitespace-nowrap">What families want to know</th>
                                <th scope="col" class="px-6 py-4 font-semibold text-sm text-base-700 whitespace-nowrap">How we assist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-t border-base-100">
                                <td class="px-6 py-4 text-base-700 align-top">
                                    <div class="flex items-center gap-2.5">
                                        <x-heroicon-o-academic-cap class="w-5 h-5 text-primary-600 shrink-0" />
                                        <span class="font-medium text-base-900">Choosing the right school</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Public vs private</strong>, IB vs local curriculum, co-ed vs single-sex, location and ethos.</td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Shortlist suitable schools</strong>, explain key differences, and match options to your child's goals and family priorities.</td>
                            </tr>
                            <tr class="bg-base-50 border-t border-base-100">
                                <td class="px-6 py-4 text-base-700 align-top">
                                    <div class="flex items-center gap-2.5">
                                        <x-heroicon-o-map class="w-5 h-5 text-primary-600 shrink-0" />
                                        <span class="font-medium text-base-900">Pathways to university and migration</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-base-700 align-top">How <strong>Years 10–12 subjects</strong> affect university entry and future visa options.</td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Map subject choices</strong> and school pathways to potential university courses and longer-term migration strategies.</td>
                            </tr>
                            <tr class="bg-white border-t border-base-100">
                                <td class="px-6 py-4 text-base-700 align-top">
                                    <div class="flex items-center gap-2.5">
                                        <x-heroicon-o-heart class="w-5 h-5 text-primary-600 shrink-0" />
                                        <span class="font-medium text-base-900">Pastoral care, safety and wellbeing</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Homestay quality</strong>, guardianship, safety, bullying policies, mental health support.</td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Arrange vetted homestays</strong> and guardianship, and brief families on each school's wellbeing and duty-of-care framework.</td>
                            </tr>
                            <tr class="bg-base-50 border-t border-base-100">
                                <td class="px-6 py-4 text-base-700 align-top">
                                    <div class="flex items-center gap-2.5">
                                        <x-heroicon-o-document-check class="w-5 h-5 text-primary-600 shrink-0" />
                                        <span class="font-medium text-base-900">End-to-end support for school-age students</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-base-700 align-top">Who manages <strong>placement, paperwork</strong>, and ongoing contact with the school.</td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Manage school applications</strong>, COEs, student and guardian visas, arrivals, and ongoing liaison with schools and hosts.</td>
                            </tr>
                            <tr class="bg-white border-t border-base-100">
                                <td class="px-6 py-4 text-base-700 align-top">
                                    <div class="flex items-center gap-2.5">
                                        <x-heroicon-o-banknotes class="w-5 h-5 text-primary-600 shrink-0" />
                                        <span class="font-medium text-base-900">Cost planning for schooling</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Tuition, uniforms, books</strong>, activities, homestay, insurance, and living costs.</td>
                                <td class="px-6 py-4 text-base-700 align-top"><strong>Provide high-level cost guidance</strong> and scenarios, then prepare a tailored estimate for your chosen schools and visa pathway.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p class="text-sm text-base-500 mt-4 text-pretty">Blue Education is an <a href="{{ route('about.scsa-partnership') }}" class="text-primary-800 font-medium hover:underline">SCSA Associate</a> — officially named by the School Curriculum and Standards Authority to promote the Western Australian curriculum internationally.</p>
        </div>
    </section>

    {{-- §3 What We Handle — Before Arrival --}}
    <section class="bg-primary-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What We Handle</h2>
            <p class="text-base-600 mb-10 text-pretty">Everything we facilitate before the student arrives in Australia.</p>
            <x-timeline :steps="[
                ['title' => 'School Selection & Placement', 'icon' => 'academic-cap', 'summary' => 'We match each student with the right school based on their goals and family priorities.', 'description' => 'Location, curriculum, fees, learning profile and long-term goals assessed across both public and private options in Australia.'],
                ['title' => 'Student Visa (Subclass 500)', 'icon' => 'document-text', 'summary' => 'Comprehensive visa application management for students over and under 18.', 'description' => 'Documentation, health examinations, character requirements and online lodgement — coordinated end-to-end so the student and their family are fully supported.'],
                ['title' => 'Arrival & Accommodation', 'icon' => 'home', 'summary' => 'Pre-arrival orientation and settling-in support so there is less to manage on day one.', 'description' => 'Coordinated airport pickup, Australian bank account, and accommodation through the Blue Education Homestay Network — trusted host families for almost two decades in a safe, welcoming home with warm meals.'],
            ]" />
        </div>
    </section>

    {{-- §4 Arriving in Australia --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="mb-8">
                <x-visual-break :images="[
                    ['src' => 'images/services-education-school/school-campus.webp', 'alt' => 'East Asian students at an Australian school campus'],
                ]" :inline="true" />
            </div>
            <h2 class="text-3xl font-bold text-base-900 mb-3 text-pretty" data-animate="fade-up">Arriving in Australia...</h2>
            <p class="text-base-600 mb-3 text-pretty">Our support continues after the student arrives in Australia. We remain available to assist with school transition, student wellbeing, communication with families, and practical matters that may arise during the student's time here.</p>
            <p class="text-base-600 mb-3 text-pretty">Remember, our team is here. So, feel free to drop in for a cuppa and let us help you.</p>
            <p class="text-base-800 font-semibold mb-8">Supporting students to adapt to life and study in Australia:</p>
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Settling Into Australian Daily Life"
                        description="Practical tips on local customs, communication style, transport, banking and everyday etiquette so students feel at home more quickly."
                        :href="route('services.student-support')"
                        linkText="Student support services">
                    <x-slot:icon><x-heroicon-o-home class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="Understanding the Australian Learning Approach"
                        description="Guidance on interactive learning, asking questions, group work and academic expectations to help students adapt to school and university culture."
                        :href="route('programs.study-tours')"
                        linkText="Explore the Buddy Programme">
                    <x-slot:icon><x-heroicon-o-book-open class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="Making Friends and Building Networks"
                        description="Advice on joining clubs, sports, community activities and homestay life to develop friendships and supportive relationships."
                        :href="route('programs.study-tours')"
                        linkText="Explore the Buddy Programme">
                    <x-slot:icon><x-heroicon-o-user-group class="w-5 h-5" /></x-slot:icon>
                </x-card>
                <x-card title="Staying Well: Balance, Safety and Support"
                        description="Information on staying healthy, knowing where to get help, balancing study and downtime, and feeling confident and safe in Australia."
                        :href="route('services.student-support')"
                        linkText="Wellbeing and safety support">
                    <x-slot:icon><x-heroicon-o-heart class="w-5 h-5" /></x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §5 For Parents --}}
    <x-content-split title="For Parents" :image="asset('images/services-education-school/parent-child-school.webp')" alt="Young East Asian student smiling at airport terminal with luggage" class="bg-base-50">
        <p>Sending your child overseas is a significant decision and can feel daunting at times. We focus on keeping both you and your child supported and informed throughout their journey.</p>
        <h3 class="text-lg font-semibold text-base-800 mt-4 mb-2">How we keep you informed:</h3>
        <x-icon-list>
            <x-icon-list.item>Regular welfare updates, including school progress and feedback on wellbeing</x-icon-list.item>
            <x-icon-list.item>Facilitate direct communication with the school and homestay hosts</x-icon-list.item>
            <x-icon-list.item>Local support in Perth and other major Australian cities</x-icon-list.item>
        </x-icon-list>
        <p class="font-semibold text-base-700 mt-4">Your child is never on their own — and neither are you.</p>
    </x-content-split>

    {{-- §6 CTA --}}
    <x-cta-banner title="Start with a conversation."
                  subtitle="Book a free education consultation. Tell us the student's age, year level, and preferences — we'll recommend schools and walk you through exactly what the process involves."
                  primaryText="Enquire About School Placements"
                  :primaryHref="route('contact')"
                  secondaryText="Explore the Buddy Programme"
                  :secondaryHref="route('programs.study-tours')" />

</x-layout>
