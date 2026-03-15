<x-layout title="About Blue Education"
          description="Independent education, career, and migration advice from Perth, Western Australia since 1998. Trusted by clients from 40+ countries.">

    {{-- §1 Hero --}}
    <x-hero title="Independent education and migration advice. Since 1998."
            subtitle="Most education consultancies cover one thing. We've covered all three — education, career, and migration — from a single Perth office for 28 years. Clients from 40+ countries trust us with decisions that don't have a do-over."
            :image="asset('images/heroes/about.webp')"
            alt="Professional team collaborating in a modern office environment"
            variant="left"
            height="440px"
            :breadcrumbs="true" />

    {{-- §2 Our Story --}}
    <x-content-split title="Our Story" :image="asset('images/home/history-perth-office.webp')" alt="Blue Education's Perth office heritage">
        <p>In 1998, a small group of education and migration professionals in Perth identified a critical need: international students required independent, unbiased guidance — not generic advice driven by institutional partnerships.</p>
        <p>They founded Blue Education on a principle that still defines us: give honest advice — including when that means redirecting someone away from the wrong path.</p>
        <p>28 years later, we've helped thousands of students from 40+ countries navigate Australia's education system, launch careers, and build permanent lives here. We've done it one student at a time — because that's the only way to do it properly.</p>
        <p class="font-semibold text-gray-700">Still in Perth. Same principle since day one.</p>
    </x-content-split>

    {{-- §3 Our Values --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Values" :centered="false" />
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5" data-animate="stagger">
                @php
                    $values = [
                        ['title' => 'Client-Centric', 'desc' => "Your goals drive every recommendation. We listen, assess, and advise based on what's right for you.", 'icon' => 'identification'],
                        ['title' => 'Honest', 'desc' => "We tell you what you need to hear. If a pathway won't work, we say so — and find one that will.", 'icon' => 'check-circle'],
                        ['title' => 'Quality-Driven', 'desc' => "Every interaction — from first consultation to visa approval — meets a standard we'd set for our own family.", 'icon' => 'star'],
                        ['title' => 'Professionally Qualified', 'desc' => 'QEAC certified. Migration Alliance. MIA affiliated. Australian Bar Association. Qualified, accredited, current.', 'icon' => 'shield-check'],
                        ['title' => 'Personalised', 'desc' => 'Your situation is unique. Your circumstances, goals, and timeline are yours alone — and your advice should match.', 'icon' => 'identification'],
                    ];
                @endphp
                @foreach($values as $value)
                    <div class="bg-white rounded-corner-lg p-6 border border-gray-200 text-center">
                        <div class="w-12 h-12 bg-primary-100 rounded-corner-lg flex items-center justify-center mx-auto mb-4 text-primary-800">
                            <x-dynamic-component :component="'heroicon-o-' . $value['icon']" class="w-6 h-6" />
                        </div>
                        <h3 class="font-bold text-gray-900 mb-2 text-sm text-pretty">{{ $value['title'] }}</h3>
                        <p class="text-gray-600 text-xs leading-relaxed text-pretty">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 By the Numbers --}}
    <x-stat-block variant="primary" :stats="[
        ['value' => '1998', 'label' => 'Founded'],
        ['value' => '40+', 'label' => 'Countries served'],
        ['value' => '3', 'label' => 'Registered Migration Agents'],
        ['value' => '5+', 'label' => 'Team languages'],
    ]" />

    {{-- §5 Why Choose Blue Education --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Why Choose Blue Education" :centered="false" />

            {{-- Row 1: text left, image right --}}
            <div class="flex flex-col lg:flex-row items-center gap-12 mb-14">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-pretty">Education + Career + Migration. One provider.</h3>
                    <p class="text-gray-600 leading-relaxed text-pretty">Most agencies cover one domain. We cover all three — coordinated into a single, seamless plan. One team. No handoffs between providers.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/about/education-consulting.webp') }}" alt="Education consultant reviewing options with a client in front of a world map" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            {{-- Row 2: image left, text right --}}
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 mb-14">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-pretty">Perth HQ. Representatives in 5 countries.</h3>
                    <p class="text-gray-600 leading-relaxed text-pretty">Headquarters in Perth, Western Australia. Partners in every major Australian city. International representatives in Japan, Indonesia, New Zealand, Zambia, and Malaysia. Your language. Your timezone.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/about/perth-office.webp') }}" alt="Diverse professional team collaborating in a modern office environment" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>

            {{-- Row 3: text left, image right --}}
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-pretty">Support from enrolment to permanent residence.</h3>
                    <p class="text-gray-600 leading-relaxed text-pretty">Our relationship doesn't end at enrollment. Study support. Career development. Migration pathways. 24/7 emergency hotline. We stay with you through every stage.</p>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/about/student-support.webp') }}" alt="Mentor guiding a student through study materials at a desk" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §6 Professional Credentials --}}
    <section class="bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-12">
            <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-8 text-center" data-animate="fade-up">Professional Credentials</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6" data-animate="stagger">
                <x-credential-card name="QEAC Certified"
                                   logo="images/credentials/qeac.svg"
                                   description="Qualified Education Agent Counsellor — premier professional qualification" />
                <x-credential-card name="Migration Alliance"
                                   logo="images/credentials/migration-alliance.svg"
                                   description="Australia's largest professional body for migration agents" />
                <x-credential-card name="MIA"
                                   logo="images/credentials/mia.svg"
                                   description="Migration Institute of Australia — highest ethical standards" />
                <x-credential-card name="Australian Bar Association"
                                   logo="images/credentials/australian-bar-association.svg"
                                   description="Legal expertise relevant to education and migration matters" />
            </div>
        </div>
    </section>

    {{-- §7 CTA Banner --}}
    <x-cta-banner title="Talk to us. We'll tell you where you stand."
                  subtitle="One session covers your education, career, and migration options — assessed together, not in separate conversations with separate agencies."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  secondaryText="Meet Our Team"
                  :secondaryHref="route('about.team')" />

</x-layout>
