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
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Buddy Programme"
                        badge="14-Day Immersion"
                        description="High school students join Australian classrooms, live with vetted homestay families, and explore Western Australia through structured field trips — all within a supervised 14-day programme run in partnership with Anglican Schools."
                        :image="asset('images/programs-index/buddy-programme.webp')"
                        alt="Diverse group of students studying together outdoors on campus"
                        :href="route('programs.buddy-programme')"
                        linkText="Explore the Buddy Programme" />

                <x-card title="Study Tours"
                        badge="Flexible Duration"
                        description="Educational and cultural immersion programs. One week to several months. No long-term enrolment required. Custom tours for schools, universities, and organisations available on request."
                        :image="asset('images/programs-index/study-tours.webp')"
                        alt="East Asian students exploring a city with a map while traveling"
                        :href="route('programs.study-tours')"
                        linkText="Explore Study Tours" />

                <x-card title="SCSA Associate"
                        badge="Official SCSA Partnership"
                        description="Blue Education is appointed by SCSA — the WA Government's curriculum authority — to help international schools implement the Western Australian curriculum, including the WACE programme, internationally."
                        :image="asset('images/programs-index/scsa-associate.webp')"
                        alt="Diverse team of students collaborating on curriculum documents"
                        :href="route('programs.scsa-associate')"
                        linkText="Explore SCSA Associate" />

                <div class="border-2 border-primary-200 rounded-corner-lg p-6 bg-primary-50/30">
                    <span class="inline-block bg-primary-100 text-primary-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mb-3">Premium Program</span>
                    <h3 class="text-lg font-bold text-gray-900 mb-2 text-pretty">Executive Internship</h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 text-pretty">Strategic work experience for business graduates. The Executive Internship Programme (EIP) runs twice a year with limited places. A six-phase structured programme with real employer placements and executive mentorship.</p>
                    <a href="{{ route('programs.executive-internship') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors">Explore Executive Internship &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="grid sm:grid-cols-2 gap-6">
                <img src="{{ asset('images/programs/program-activity.webp') }}" alt="East Asian students learning about nature during an outdoor field trip" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/programs/student-event.webp') }}" alt="Diverse graduates celebrating with diplomas at graduation ceremony" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
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
