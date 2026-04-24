<x-layout title="Our Services"
          description="Education, migration, career, and student support services from Perth, Western Australia. One provider, every step of the journey.">

    {{-- §1 Hero --}}
    <x-hero title="Education, migration, and career services, under one roof."
            subtitle="From choosing the right course to securing permanent residence, Blue Education covers every step."
            :image="asset('images/heroes/services.webp')"
            alt="Education adviser meeting with East Asian students to discuss study options"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Service Areas --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What We Can Help With" :centered="false" class="mb-10" />

            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Education Services"
                        description="School, English, VET & TAFE, and university programmes. We match students to the right institution and course based on career goals and visa pathway."
                        :href="route('services.education.index')"
                        linkText="Explore education services">
                    <x-slot:icon>
                        <x-heroicon-o-academic-cap class="w-6 h-6" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Migration & Visas"
                        description="Student visas, graduate work visas, employer sponsorship, and permanent residence. Registered migration agents with 28 years of successful applications."
                        :href="route('services.migration.index')"
                        linkText="Explore migration services">
                    <x-slot:icon>
                        <x-heroicon-o-globe-alt class="w-6 h-6" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Career Services"
                        description="Skills gap analysis, employer introductions, CV preparation, and graduate work visa support. Turning Australian qualifications into Australian careers."
                        :href="route('services.career')"
                        linkText="Explore career services">
                    <x-slot:icon>
                        <x-heroicon-o-rocket-launch class="w-6 h-6" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Student Support"
                        description="Accommodation, guardianship, health cover, airport transfers, translation, and a 24/7 emergency line. Everything beyond the classroom."
                        :href="route('services.student-support')"
                        linkText="Explore student support">
                    <x-slot:icon>
                        <x-heroicon-o-shield-check class="w-6 h-6" />
                    </x-slot:icon>
                </x-card>
            </div>
        </div>
    </section>

    {{-- §3 CTA --}}
    <x-cta-banner title="Not sure which service you need?"
                  subtitle="Tell us your situation and we'll map out the right combination of education, migration, and career support."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')" />

</x-layout>
