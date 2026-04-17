<x-layout title="Our Partners"
          description="Blue Education's institutional partnerships with Australian universities, TAFEs, and professional accreditation bodies.">

    {{-- §1 Hero --}}
    <x-hero :title="(date('Y') - 1998) . ' years of institutional partnerships. Industry accredited.'"
            subtitle="Direct relationships with Australian universities, TAFEs, and RTOs, with professional credentials that back it up."
            :image="asset('images/about-partners/university-campus.webp')"
            alt="Aerial view of an Australian university campus"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Institutional Partners --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Institutional Partners" :centered="false" />

            @if(($partnersByCategory->get('university'))?->isNotEmpty())
                <h3 class="text-xl font-semibold text-base-800 mb-4 mt-8">Universities</h3>
                <p class="text-base-600 mb-8 leading-relaxed text-pretty">Blue Education works with Western Australia's leading universities and a broader network of partner institutions across Australia. Access to over 1,100 institutions and 20,000 programmes means your options aren't limited to what one agent happens to represent.</p>

                <div class="mb-6">
                    <p class="text-xs font-bold text-base-400 uppercase tracking-widest mb-4">Western Australian Universities</p>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                        @foreach($partnersByCategory->get('university') as $partner)
                            <div class="bg-base-50 border border-base-200 rounded-corner-lg p-6 flex flex-col items-center justify-center text-center shadow-md" style="min-height:100px;">
                                @if($partner->logo)
                                    <img src="{{ $partner->logoUrl() }}" alt="{{ $partner->name }}" class="h-12 w-auto object-contain" loading="lazy">
                                @else
                                    <span class="text-xs text-base-400 font-medium">{{ $partner->name }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-10">
                    <p class="text-xs font-bold text-base-400 uppercase tracking-widest mb-4">Additional National Partners</p>
                    <p class="text-sm text-base-500 italic">Full list of national partner institutions available on request.</p>
                </div>
            @endif

            <x-partner-grid :partners="$partnersByCategory->get('tafe_training', collect())" title="TAFE & Training Providers">
                <p class="text-base-600 mb-6 leading-relaxed text-pretty">Direct relationships with TAFE WA and registered training organisations across Western Australia and nationally. VET applications handled the same way as university placements — with the same advisor, start to finish.</p>
            </x-partner-grid>

            <x-partner-grid :partners="$partnersByCategory->get('english_language', collect())" title="English Language Schools" />
            <x-partner-grid :partners="$partnersByCategory->get('overeast_college', collect())" title="Overeast Colleges" />
            <x-partner-grid :partners="$partnersByCategory->get('other_college', collect())" title="Other Colleges" />
            <x-partner-grid :partners="$partnersByCategory->get('angli_school', collect())" title="AngliSchools" />
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/why-australia/perth-skyline.webp', 'alt' => 'Perth city skyline across the Swan River'],
    ]" padding="py-10" />

    {{-- §3 Professional Credentials --}}
    @if(($partnersByCategory->get('credential'))?->isNotEmpty())
        <section class="bg-base-50">
            <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
                <x-section-heading title="Professional Credentials" :centered="false" />
                <div class="space-y-5">
                    @foreach($partnersByCategory->get('credential') as $cred)
                        <div class="bg-white rounded-corner-lg border border-base-200 p-7 flex items-start gap-8 shadow-md">
                            @if($cred->logo)
                                <div class="bg-base-50 border border-base-200 rounded-corner-lg shrink-0 flex items-center justify-center w-[120px] h-[80px]">
                                    <img src="{{ $cred->logoUrl() }}" alt="{{ $cred->name }}" class="h-14 w-auto object-contain" loading="lazy">
                                </div>
                            @endif
                            <div>
                                <h3 class="font-bold text-base-900 text-xl mb-2 text-pretty">{{ $cred->name }}</h3>
                                @if($cred->description)
                                    <p class="text-base-600 leading-relaxed text-pretty">{{ $cred->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- §4 International Offices --}}
    @if(($partnersByCategory->get('international_office'))?->isNotEmpty())
        <section class="bg-white">
            <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
                <x-section-heading title="International Offices" :centered="false" />
                <div class="flex flex-col lg:flex-row gap-10 items-start">
                    {{-- Map --}}
                    <div class="lg:w-1/2">
                        <img src="{{ asset('images/about-partners/world-map.webp') }}" alt="World map showing Blue Education's global network of international offices" class="rounded-corner-lg w-full h-auto object-cover aspect-[16/10] shadow-xl" loading="lazy">
                    </div>

                    {{-- Location table --}}
                    <div class="lg:w-1/2">
                        <x-data-table class="shadow-xl" :headers="['Location', 'Representative', 'Coverage']"
                                      :rows="$partnersByCategory->get('international_office')->map(fn ($office) => [$office->name, $office->representative, $office->coverage])->toArray()" />
                        <p class="text-base-500 text-sm mt-4">
                            <a href="{{ route('about.team') }}" class="text-primary-800 hover:underline font-medium">Meet the full team &rarr;</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- §5 CTA Banner --}}
    <x-cta-banner title="Partner with Blue Education."
                  subtitle="We work with institutions and organisations committed to student outcomes. Contact us to start a conversation."
                  primaryText="Partner With Us"
                  :primaryHref="route('contact')" />
                  message="Hi, I'd like to discuss a partnership with Blue Education" />

</x-layout>
