<x-layout title="Our Team"
          description="Meet the Blue Education team — multilingual specialists across five countries, delivering education, migration, and career advice.">

    {{-- §1 Hero --}}
    <section class="py-20 px-8 text-center" style="background: linear-gradient(180deg, var(--color-primary-50) 0%, #ffffff 100%);">
        <div class="max-w-4xl mx-auto">
            <x-auto-breadcrumb class="mb-6 justify-center" />
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-5 leading-tight text-pretty">Multilingual specialists. Five countries. One mission.</h1>
            <p class="text-xl text-gray-600 mb-4 leading-relaxed text-pretty">Education, migration, and career experts — headquartered in Perth, represented across Asia, Africa, and the Pacific.</p>
            <p class="text-gray-600 leading-relaxed text-pretty max-w-3xl mx-auto">Our team spans continents, industries, and languages. From Registered Migration Agents to chartered accountants, solicitors to career counsellors — we bring real-world expertise to every consultation. Most of us are multilingual. All of us are committed to getting it right for you.</p>
        </div>
    </section>

    {{-- Visual context --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 pt-14">
            <div class="grid sm:grid-cols-3 gap-6">
                <img src="{{ asset('images/about-team/office-exterior.webp') }}" alt="Blue Education Perth office exterior" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/about-team/team-meeting.webp') }}" alt="Professional team meeting" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
                <img src="{{ asset('images/about-team/international-operations.webp') }}" alt="International operations network" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2]" loading="lazy">
            </div>
        </div>
    </section>

    {{-- §2 Australian Team --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-10 text-pretty" data-animate="fade-up">Australian Team</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-animate="stagger">
                @foreach($australianTeam as $member)
                    <x-team-member :name="$member->name"
                                   :role="$member->role"
                                   :photo="$member->photo"
                                   :bio="$member->bio"
                                   :credentials="$member->credentials"
                                   :languages="$member->languages" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §3 International Operations --}}
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-gray-900 mb-4 text-pretty" data-animate="fade-up">International Operations</h2>
            <p class="text-gray-600 mb-10 text-lg leading-relaxed max-w-3xl text-pretty">Blue's international reach is powered by a team of regional representatives who provide localised support — in your language, in your time zone, with on-the-ground knowledge of your country's education and migration landscape.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @foreach($internationalTeam as $member)
                    <x-team-member :name="$member->name"
                                   :role="$member->role"
                                   :photo="$member->photo"
                                   :bio="$member->bio"
                                   :credentials="$member->credentials"
                                   :languages="$member->languages" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 CTA Banner --}}
    <x-cta-banner title="Work with a team that understands your world."
                  subtitle="Book a consultation with an advisor who speaks your language and knows your market."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  secondaryText="Learn About Blue Education"
                  :secondaryHref="route('about.index')" />

</x-layout>
