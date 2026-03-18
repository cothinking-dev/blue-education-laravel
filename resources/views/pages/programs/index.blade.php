<x-layout title="Programs"
          description="Immersive programs for international students. Structured experiences that accelerate integration, learning, and career readiness.">

    {{-- §1 Hero --}}
    <x-hero title="Immersive Programs for International Students"
            subtitle="Beyond standard enrolment. Structured experiences that accelerate integration, learning, and career readiness."
            :image="asset('images/heroes/programs.webp')"
            alt="East Asian and international students walking on campus"
            variant="centered"
            :breadcrumbs="true" />

    {{-- §2 Programs Grid --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Programs" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Buddy Programme"
                        badge="14-Day Immersion"
                        description="High school students join Australian classrooms, live with vetted homestay families, and explore Western Australia through structured field trips — all within a supervised 14-day programme run in partnership with Anglican Schools."
                        :image="asset('images/programs-index/buddy-programme.webp')"
                        alt="East Asian teenager with laptop in a diverse high school classroom"
                        :href="route('programs.buddy-programme')"
                        linkText="Explore the Buddy Programme" />

                <x-card title="Study Tours"
                        badge="Flexible Duration"
                        description="Educational and cultural immersion programs. One week to several months. No long-term enrolment required. Custom tours for schools, universities, and organisations available on request."
                        :image="asset('images/programs-index/study-tours.webp')"
                        alt="Two Asian students with backpacks walking and laughing on a university campus"
                        :href="route('programs.study-tours')"
                        linkText="Explore Study Tours" />

                <x-card title="SCSA Associate"
                        badge="Official SCSA Partnership"
                        description="Blue Education is appointed by SCSA — the WA Government's curriculum authority — to help international schools implement the Western Australian curriculum, including the WACE programme, internationally."
                        :image="asset('images/programs-index/scsa-associate.webp')"
                        alt="Group of East Asian students brainstorming together in a classroom"
                        :href="route('programs.scsa-associate')"
                        linkText="Explore SCSA Associate" />

                <x-card title="Executive Internship"
                        badge="Premium Program"
                        description="Strategic work experience for business graduates. The Executive Internship Programme (EIP) runs twice a year with limited places. A six-phase structured programme with real employer placements and executive mentorship."
                        :image="asset('images/programs-index/executive-internship.webp')"
                        alt="Asian professionals collaborating over documents in a modern office"
                        :href="route('programs.executive-internship')"
                        linkText="Explore Executive Internship" />
            </div>
        </div>
    </section>

    {{-- §3 CTA --}}
    <x-cta-banner title="Not sure which program fits?"
                  subtitle="Tell us your goals and we'll match you to the right program — or build a pathway that covers all of them."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
