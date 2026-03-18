<x-layout title="Our Team"
          description="Meet the Blue Education team — multilingual specialists across five countries, delivering education, migration, and career advice.">

    {{-- §1 Hero --}}
    <x-hero title="Multilingual specialists. Five countries. One mission."
            subtitle="Education, migration, and career experts — headquartered in Perth, represented across Asia, Africa, and the Pacific."
            variant="light"
            :breadcrumbs="true">
        <p class="text-base-600 leading-relaxed text-pretty max-w-3xl mx-auto">Our team spans continents, industries, and languages. From Registered Migration Agents to chartered accountants, solicitors to career counsellors — we bring real-world expertise to every consultation. Most of us are multilingual. All of us are committed to getting it right for you.</p>
    </x-hero>

    {{-- Visual context --}}
    <x-visual-break :images="[
        ['src' => 'images/about-team/office-exterior.webp', 'alt' => 'Blue Education Perth office exterior'],
        ['src' => 'images/about-team/team-meeting.webp', 'alt' => 'Blue Education team in a professional meeting'],
        ['src' => 'images/about-team/international-operations.webp', 'alt' => 'Blue Education international operations and global network'],
    ]" padding="pt-14" />

    {{-- §2 Australian Team --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Australian Team" :centered="false" />
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
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Operations" :centered="false" />
            <p class="text-base-600 mb-10 text-lg leading-relaxed max-w-3xl text-pretty">Blue's international reach is powered by a team of regional representatives who provide localised support — in your language, in your time zone, with on-the-ground knowledge of your country's education and migration landscape.</p>
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
