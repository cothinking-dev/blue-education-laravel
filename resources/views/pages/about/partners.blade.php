<x-layout title="Our Partners"
          description="Blue Education's institutional partnerships with Australian universities, TAFEs, and professional accreditation bodies.">

    {{-- §1 Hero --}}
    <x-hero :title="(date('Y') - 1998) . ' years of institutional partnerships. Industry accredited.'"
            subtitle="Direct relationships with Australian universities, TAFEs, and RTOs. Professional credentials that back it up."
            variant="light"
            :breadcrumbs="true" />

    {{-- §2 Institutional Partners --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Institutional Partners" :centered="false" />

            <h3 class="text-xl font-semibold text-base-800 mb-4 mt-8">Universities</h3>
            <p class="text-base-600 mb-8 leading-relaxed text-pretty">Blue Education works with all five Western Australian universities and a broader network of partner institutions across Australia. Access to over 1,100 institutions and 20,000 programmes means your options aren't limited to what one agent happens to represent.</p>

            <div class="mb-6">
                <p class="text-xs font-bold text-base-400 uppercase tracking-widest mb-4">Western Australian Universities</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                    @php
                        $waUnis = [
                            ['src' => 'images/partners/uwa-logo.svg', 'name' => 'University of Western Australia'],
                            ['src' => 'images/partners/curtin-logo.webp', 'name' => 'Curtin University'],
                            ['src' => 'images/partners/murdoch-logo.svg', 'name' => 'Murdoch University'],
                            ['src' => 'images/partners/ecu-logo.png', 'name' => 'Edith Cowan University'],
                            ['src' => 'images/partners/notre-dame-logo.webp', 'name' => 'Notre Dame Australia'],
                        ];
                    @endphp
                    @foreach($waUnis as $uni)
                        <div class="bg-base-50 border border-base-200 rounded-corner-lg p-6 flex flex-col items-center justify-center text-center" style="min-height:100px;">
                            @if($uni['src'])
                                <img src="{{ asset($uni['src']) }}" alt="{{ $uni['name'] }}" class="h-12 w-auto object-contain" loading="lazy">
                            @else
                                <span class="text-xs text-base-400 font-medium">{{ $uni['name'] }}</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <h3 class="text-xl font-semibold text-base-800 mb-4 mt-10">TAFE & Training Providers</h3>
            <p class="text-base-600 mb-6 leading-relaxed text-pretty">Direct relationships with TAFE WA and registered training organisations across Western Australia and nationally. VET applications handled the same way as university placements — with the same advisor, start to finish.</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @php
                    $tafePartners = [
                        ['src' => 'images/partners/nmtafe-logo.svg', 'name' => 'North Metropolitan TAFE'],
                        ['src' => 'images/partners/smtafe-logo.svg', 'name' => 'South Metropolitan TAFE'],
                        ['src' => 'images/partners/tafe-qld-logo.png', 'name' => 'TAFE Queensland'],
                        ['src' => 'images/partners/tafe-nsw-logo.svg', 'name' => 'TAFE NSW'],
                        ['src' => 'images/partners/tafe-sa-logo.png', 'name' => 'TAFE SA'],
                        ['src' => 'images/partners/holmesglen-logo.svg', 'name' => 'Holmesglen Institute'],
                        ['src' => 'images/partners/boxhill-logo.svg', 'name' => 'Box Hill Institute'],
                        ['src' => 'images/partners/melbourne-poly-logo.png', 'name' => 'Melbourne Polytechnic'],
                    ];
                @endphp
                @foreach($tafePartners as $partner)
                    <div class="bg-base-50 border border-base-200 rounded-corner-lg p-6 flex items-center justify-center" style="min-height:90px;">
                        <img src="{{ asset($partner['src']) }}" alt="{{ $partner['name'] }} logo" class="h-10 w-auto object-contain" loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/about-partners/university-campus.webp', 'alt' => 'Aerial view of an Australian university campus'],
        ['src' => 'images/about-partners/partnership-signing.webp', 'alt' => 'Education partnership agreement signing ceremony'],
    ]" padding="py-10" />

    {{-- §3 Professional Credentials --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Professional Credentials" :centered="false" />
            <div class="space-y-5">
                @php
                    $credentials = [
                        ['name' => 'QEAC Certified', 'logo' => 'images/credentials/qeac.svg', 'desc' => 'Qualified Education Agent Counsellor — the premier professional qualification for education agents in Australia. QEAC S165.'],
                        ['name' => 'Migration Alliance', 'logo' => 'images/credentials/migration-alliance.svg', 'desc' => "Australia's largest professional body for migration agents. Access to current industry knowledge, professional development, and peer networks."],
                        ['name' => 'Migration Institute of Australia', 'logo' => 'images/credentials/mia.svg', 'desc' => 'The MIA represents the highest professional and ethical standards in migration advice and services.'],
                        ['name' => 'Australian Bar Association', 'logo' => 'images/credentials/australian-bar-association.svg', 'desc' => 'Access to legal expertise relevant to education and migration matters.'],
                    ];
                @endphp
                @foreach($credentials as $cred)
                    <div class="bg-white rounded-corner-lg border border-base-200 p-7 flex items-start gap-8">
                        <div class="bg-base-50 border border-base-200 rounded-corner-lg shrink-0 flex items-center justify-center w-[120px] h-[80px]">
                            <img src="{{ asset($cred['logo']) }}" alt="{{ $cred['name'] }}" class="h-14 w-auto object-contain" loading="lazy">
                        </div>
                        <div>
                            <h3 class="font-bold text-base-900 text-xl mb-2 text-pretty">{{ $cred['name'] }}</h3>
                            <p class="text-base-600 leading-relaxed text-pretty">{{ $cred['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- §4 International Offices --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="International Offices" :centered="false" />
            <div class="flex flex-col lg:flex-row gap-10 items-start">
                {{-- Map placeholder --}}
                <div class="lg:w-1/2">
                    <img src="{{ asset('images/about-partners/world-map.webp') }}" alt="World map showing Blue Education's global network of international offices" class="rounded-corner-lg w-full h-auto object-cover aspect-[16/10] shadow-lg" loading="lazy">
                </div>

                {{-- Location table --}}
                <div class="lg:w-1/2">
                    <x-data-table :headers="['Location', 'Representative', 'Coverage']"
                                  :rows="[
                                      ['Perth, WA (HQ)', 'Glen + core team', 'Australia-wide'],
                                      ['Japan', 'Minami Sakamoto', 'Northeast Asia'],
                                      ['New Zealand', 'Sherene Chan', 'Oceania'],
                                      ['Zambia', 'Elijah Chongo, Priscilla Mwansa', 'Southern Africa'],
                                      ['Indonesia', 'Hana Hursepuny', 'Southeast Asia'],
                                      ['Malaysia', 'Elaine Ho, Monica Low', 'Southeast Asia'],
                                      ['Ghana', 'Nino Sekyere-Boakye', 'West Africa, Africa-wide'],
                                  ]" />
                    <p class="text-base-500 text-sm mt-4">
                        <a href="{{ route('about.team') }}" class="text-primary-800 hover:underline font-medium">Meet the full team &rarr;</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 CTA Banner --}}
    <x-cta-banner title="Partner with Blue Education."
                  subtitle="We work with institutions and organisations committed to student outcomes. Contact us to start a conversation."
                  primaryText="Partner With Us"
                  :primaryHref="route('contact')"
                  secondaryText="Contact Our Team"
                  :secondaryHref="route('contact')" />

</x-layout>
