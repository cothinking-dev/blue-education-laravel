<x-layout title="Programmes"
          description="Immersive programmes for international students. Structured experiences that accelerate integration, learning, and career readiness.">

    {{-- §1 Hero --}}
    <x-hero title="Immersive Programmes for International Students"
            subtitle="Beyond standard enrolment. Structured experiences that accelerate integration, learning, and career readiness."
            :image="asset('images/heroes/programs.webp')"
            alt="East Asian and international students walking on campus"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 Programmes Grid --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Programmes" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Study Tours"
                        badge="7 – 14 Day Immersion"
                        description="Short-term study tours for high school students in Western Australia. The Buddy Programme, culinary experiences, and custom group tours, fully supervised and supported by our Perth team."
                        :image="asset('images/programs-index/buddy-programme.webp')"
                        alt="East Asian teenager with laptop in a diverse high school classroom"
                        :href="route('programs.study-tours')"
                        linkText="Explore Study Tours" />

                <x-card title="Study Abroad"
                        badge="Semester or Year"
                        description="Spend a semester or year at a Western Australian university while counting credit back to your degree. We work with Murdoch, ECU and Curtin to structure your time in Perth."
                        :image="asset('images/programs-index/study-tours.webp')"
                        alt="Two Asian students with backpacks walking and laughing on a university campus"
                        :href="route('programs.study-abroad')"
                        linkText="Explore Study Abroad" />

                <x-card title="Executive Internship"
                        badge="Premium Programme"
                        description="Strategic work experience for business graduates. The Executive Internship Programme (EIP) runs twice a year with limited places. A six-phase structured programme with real employer placements and executive mentorship."
                        :image="asset('images/programs-index/executive-internship.webp')"
                        alt="Asian professionals collaborating over documents in a modern office"
                        :href="route('programs.executive-internship')"
                        linkText="Explore Executive Internship" />
            </div>
        </div>
    </section>

    {{-- §3 CTA --}}
    <x-cta-banner title="Not sure which programme fits?"
                  subtitle="Tell us your goals and we'll match you to the right programme, or build a pathway that covers all of them."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')" />

</x-layout>
