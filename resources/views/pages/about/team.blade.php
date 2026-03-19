<x-layout title="Our Team"
          description="Meet the Blue Education team — multilingual specialists across five countries, delivering education, migration, and career advice.">

    {{-- §1 Hero --}}
    <x-hero title="Multilingual specialists across five countries."
            subtitle="Education, migration, and career experts — headquartered in Perth, represented across Asia, Africa, and the Pacific."
            :image="asset('images/about-team/team-meeting.webp')"
            alt="Blue Education team in a professional meeting"
            variant="left"
            :breadcrumbs="true" />

    {{-- Intro --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <p class="text-base-600 text-lg leading-relaxed text-pretty max-w-3xl">Our team spans continents, industries, and languages. From Registered Migration Agents to chartered accountants, solicitors to career counsellors — we bring real-world expertise to every consultation. Most of us are multilingual, and we are committed to getting it right for you.</p>
        </div>
    </section>

    {{-- §2 Australian Team --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Australian Team" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-animate="stagger">
                @foreach($australianTeam as $member)
                    @php
                        $isLeader = str_contains($member->role, 'Managing Director');
                    @endphp
                    <x-team-member :name="$member->name"
                                   :role="$member->role"
                                   :photo="$member->photo"
                                   :bio="$member->bio"
                                   :credentials="$member->credentials"
                                   :languages="$member->languages"
                                   :badge="$isLeader ? 'Managing Director · MARN 1385471' : null"
                                   :leadership="$isLeader" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §3 International Operations --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Operations" :centered="false" />
            <p class="text-base-600 mb-10 text-lg leading-relaxed max-w-3xl text-pretty">Blue's international reach is powered by a team of regional representatives who provide localised support — in your language, in your time zone, with on-the-ground knowledge of your country's education and migration landscape.</p>

            {{-- Sonia Ong — featured full-width lead --}}
            @if($sonia)
                <x-team-member :name="$sonia->name"
                               :role="$sonia->role"
                               :photo="$sonia->photo"
                               :bio="$sonia->bio"
                               :credentials="$sonia->credentials"
                               :languages="$sonia->languages"
                               variant="featured"
                               badge="Executive Director · International Operations"
                               :leadership="true"
                               class="mb-6" />
            @endif

            {{-- Regional team grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5" data-animate="stagger">
                @foreach($internationalTeam as $member)
                    <x-team-member :name="$member->name"
                                   :role="$member->role"
                                   :photo="$member->photo"
                                   :bio="$member->bio"
                                   :credentials="$member->credentials"
                                   :languages="$member->languages"
                                   :badge="$member->region ? $member->role : null"
                                   :leadership="str_contains($member->role, 'Director')" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 Migration & Legal Specialists --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Migration & Legal Specialists" :centered="false" />
            <p class="text-base-600 mb-10 leading-relaxed max-w-3xl text-pretty">Blue's migration and legal specialists are fully registered and credentialled. Whether you need visa advice, migration strategy, or legal representation — we have qualified professionals on the team.</p>
            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6" data-animate="stagger">
                @foreach($legalTeam as $member)
                    <x-team-member :name="$member->name"
                                   :role="$member->role"
                                   :photo="$member->photo"
                                   :bio="$member->bio"
                                   :credentials="$member->credentials"
                                   :languages="$member->languages"
                                   variant="legal"
                                   :badge="$member->role" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- §5 Our Expertise --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Our Expertise" />
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-8" data-animate="stagger">
                @foreach([
                    ['icon' => 'academic-cap', 'title' => 'Education Specialists', 'desc' => 'Institution matching. Pathway planning. Course selection. We know the Australian education system inside out — from English language programmes to postgraduate degrees.'],
                    ['icon' => 'briefcase', 'title' => 'Career Specialists', 'desc' => 'Job readiness. Employer connections. Career mapping. We bridge the gap between qualification and employment, with real-world insight into the Australian job market.'],
                    ['icon' => 'globe-alt', 'title' => 'Migration Specialists', 'desc' => 'Registered agents. Visa applications. Legal compliance. Blue holds MARN 1385471 and QEAC S165. We navigate the system so you don\'t have to.'],
                ] as $item)
                    <article class="bg-white rounded-corner-lg p-8 border border-base-200 text-center shadow-md">
                        <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-5">
                            <x-dynamic-component :component="'heroicon-o-' . $item['icon']" class="w-7 h-7 text-primary-700" />
                        </div>
                        <h3 class="font-bold text-base-900 text-lg mb-3">{{ $item['title'] }}</h3>
                        <p class="text-base-600 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §6 International Offices --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Offices" :centered="false" />
            <x-data-table class="shadow-xl" :headers="['Location', 'Representative(s)', 'Market Coverage']"
                          :rows="$offices" />
        </div>
    </section>

    {{-- §7 Credentials & Registrations --}}
    <section class="bg-base-50 border-y border-base-200">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-8">
            <h2 class="sr-only">Credentials and registrations</h2>
            <div class="flex items-center gap-4 flex-wrap">
                <span class="text-base-500 text-xs font-medium uppercase tracking-wider">Registrations:</span>
                @foreach([
                    'MARN 1385471 — Glen Ong',
                    'MARN 0959773 — Nino Sekyere-Boakye',
                    'MARN 1574550 — Arwinder Pal Singh',
                    'QEAC S165',
                    'MARA Registered',
                ] as $credential)
                    <span class="font-mono text-xs bg-white border border-base-200 rounded px-3 py-1.5 text-base-600">{{ $credential }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §8 CTA Banner --}}
    <x-cta-banner title="Work with a team that understands your world."
                  subtitle="Book a consultation with an advisor who speaks your language and knows your market."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  secondaryText="Learn About Blue Education"
                  :secondaryHref="route('about.index')" />

</x-layout>
