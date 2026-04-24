<x-layout title="Overseas Student Health Cover (OSHC)"
          description="OSHC is mandatory for Australian student visas. We arrange your health cover through trusted partner platforms, so your policy is confirmed before you lodge.">

    {{-- §1 Hero --}}
    <x-hero title="Health cover sorted before you arrive"
            subtitle="Overseas Student Health Cover is mandatory for most student visas in Australia. We arrange your policy through trusted partner platforms, so your cover is confirmed and ready when you need it."
            :image="asset('images/heroes/services-student-support.webp')"
            alt="International student consulting with an adviser about health insurance documents"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 What Is OSHC? --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">What Is OSHC?</h2>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">Overseas Student Health Cover (OSHC) is health insurance designed specifically for international students in Australia. It covers essential medical costs while you study, and in most cases, you cannot lodge a student visa application without it.</p>
                    <p class="text-base-600 leading-relaxed mb-4 text-pretty">If you are travelling with dependants (a partner, spouse, or children), you will need couples cover or family cover to meet your visa requirements.</p>
                    <p class="text-xs text-base-500 text-pretty">Students from Norway, Sweden, and Belgium may be exempt from OSHC if covered under a reciprocal health care agreement with Australia. We can confirm whether an exemption applies to your situation.</p>
                </div>
                <div class="lg:w-[40%]">
                    <x-facts-table title="OSHC at a Glance"
                                   :rows="[
                                       ['key' => 'Who needs it', 'value' => 'Most Subclass 500 visa holders'],
                                       ['key' => 'When to arrange', 'value' => 'Before visa lodgement'],
                                       ['key' => 'Duration', 'value' => 'Full length of your visa'],
                                       ['key' => 'Dependants', 'value' => 'Couples or family cover required'],
                                   ]" />
                </div>
            </div>
        </div>
    </section>

    {{-- §3 What Does OSHC Cover? --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What does OSHC typically cover?" :centered="false" />
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4" data-animate="fade-up">
                <div class="flex items-start gap-3 p-5 rounded-corner-lg bg-white border border-base-200">
                    <x-heroicon-o-heart class="w-5 h-5 text-primary-800 shrink-0 mt-0.5" />
                    <div>
                        <h3 class="font-semibold text-base-900 text-sm">Doctor and specialist visits</h3>
                        <p class="text-base-500 text-xs mt-1">In-hospital and out-of-hospital medical consultations</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-5 rounded-corner-lg bg-white border border-base-200">
                    <x-heroicon-o-building-office-2 class="w-5 h-5 text-primary-800 shrink-0 mt-0.5" />
                    <div>
                        <h3 class="font-semibold text-base-900 text-sm">Hospital treatment and surgery</h3>
                        <p class="text-base-500 text-xs mt-1">Accommodation, theatre fees, and intensive care</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-5 rounded-corner-lg bg-white border border-base-200">
                    <x-heroicon-o-truck class="w-5 h-5 text-primary-800 shrink-0 mt-0.5" />
                    <div>
                        <h3 class="font-semibold text-base-900 text-sm">Ambulance services</h3>
                        <p class="text-base-500 text-xs mt-1">Emergency ambulance transport</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-5 rounded-corner-lg bg-white border border-base-200">
                    <x-heroicon-o-beaker class="w-5 h-5 text-primary-800 shrink-0 mt-0.5" />
                    <div>
                        <h3 class="font-semibold text-base-900 text-sm">Prescription medicines</h3>
                        <p class="text-base-500 text-xs mt-1">Limited pharmaceuticals, subject to co-payments</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-5 rounded-corner-lg bg-white border border-base-200">
                    <x-heroicon-o-magnifying-glass-circle class="w-5 h-5 text-primary-800 shrink-0 mt-0.5" />
                    <div>
                        <h3 class="font-semibold text-base-900 text-sm">Pathology and diagnostics</h3>
                        <p class="text-base-500 text-xs mt-1">Blood tests, X-rays, and imaging</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-5 rounded-corner-lg bg-white border border-base-200">
                    <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5 text-primary-800 shrink-0 mt-0.5" />
                    <div>
                        <h3 class="font-semibold text-base-900 text-sm">Mental health services</h3>
                        <p class="text-base-500 text-xs mt-1">Waiting periods may apply depending on provider</p>
                    </div>
                </div>
            </div>
            <p class="text-xs text-base-500 mt-4 text-pretty">Cover levels vary between providers and policies. We help you compare options so you understand exactly what your policy includes before you purchase.</p>
        </div>
    </section>

    {{-- §4 Arrange Your OSHC --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Arrange your OSHC" :centered="false" />
            <p class="text-base-600 leading-relaxed mb-8 text-pretty">OSHC policies are underwritten by approved insurers including Bupa, Medibank, nib, Allianz Care, AHM, and CBHS. You can compare and arrange your cover through any of our partner platforms below, and we will obtain your OSHC certificate promptly for your visa lodgement.</p>

            <div class="grid sm:grid-cols-3 gap-6">
                <div class="border border-base-200 rounded-corner-lg p-6 text-center flex flex-col items-center">
                    <div class="h-16 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/partners/oshc/oshc-australia.svg') }}" alt="OSHC Australia" class="h-8 w-auto max-w-[200px] object-contain" loading="lazy" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1">OSHC Australia</h3>
                    <p class="text-base-500 text-xs mb-4">Comparison platform</p>
                    <a href="https://oshcaustralia.com.au" target="_blank" rel="noopener" class="mt-auto inline-flex items-center justify-center px-5 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors">Get a Quote</a>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 text-center flex flex-col items-center">
                    <div class="h-16 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/partners/oshc/annalink.png') }}" alt="Annalink OSHC-Students" class="h-8 w-auto max-w-[200px] object-contain" loading="lazy" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1">Annalink OSHC-Students</h3>
                    <p class="text-base-500 text-xs mb-4">Comparison platform</p>
                    <a href="https://oshcstudents.com.au" target="_blank" rel="noopener" class="mt-auto inline-flex items-center justify-center px-5 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors">Get a Quote</a>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 text-center flex flex-col items-center">
                    <div class="h-16 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/partners/oshc/konpare.svg') }}" alt="Konpare" class="h-8 w-auto max-w-[200px] object-contain" loading="lazy" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1">Konpare</h3>
                    <p class="text-base-500 text-xs mb-4">Comparison platform</p>
                    <a href="https://konpare.com" target="_blank" rel="noopener" class="mt-auto inline-flex items-center justify-center px-5 py-2.5 rounded-corner bg-primary-800 text-white text-sm font-semibold hover:bg-primary-700 transition-colors">Get a Quote</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 Overseas Visitors Cover (OVC) --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Overseas Visitors Cover (OVC)" :centered="false" />
            <p class="text-base-600 leading-relaxed mb-8 text-pretty">If you hold a temporary visa other than a student visa (such as a Temporary Graduate (subclass 485), Working Holiday (subclass 417), or Temporary Skill Shortage (subclass 482) visa), you will need Overseas Visitors Health Cover (OVHC) rather than OSHC. Students who graduate and transition to a post-study work visa will also need to switch from OSHC to OVHC.</p>

            <div class="grid sm:grid-cols-3 gap-6">
                <div class="border border-base-200 rounded-corner-lg p-6 text-center flex flex-col items-center bg-white">
                    <div class="h-16 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/partners/oshc/allianz-care.png') }}" alt="Allianz Care" class="h-8 w-auto max-w-[200px] object-contain" loading="lazy" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1">Allianz Care</h3>
                    <p class="text-base-500 text-xs mb-4">Insurer</p>
                    <a href="https://www.allianzcare.com.au/en/visas/visitors-visa-ovhc.html" target="_blank" rel="noopener" class="mt-auto inline-flex items-center justify-center px-5 py-2.5 rounded-corner border border-primary-800 text-primary-800 text-sm font-semibold hover:bg-primary-50 transition-colors">Learn More</a>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 text-center flex flex-col items-center bg-white">
                    <div class="h-16 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/partners/oshc/annalink.png') }}" alt="Annalink OVHC" class="h-8 w-auto max-w-[200px] object-contain" loading="lazy" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1">Annalink OVHC</h3>
                    <p class="text-base-500 text-xs mb-4">Comparison platform</p>
                    <a href="https://annalink.com/overseas-visitor-health-cover-ovhc/" target="_blank" rel="noopener" class="mt-auto inline-flex items-center justify-center px-5 py-2.5 rounded-corner border border-primary-800 text-primary-800 text-sm font-semibold hover:bg-primary-50 transition-colors">Learn More</a>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 text-center flex flex-col items-center bg-white">
                    <div class="h-16 flex items-center justify-center mb-4">
                        <img src="{{ asset('images/partners/oshc/konpare.svg') }}" alt="Konpare OVHC" class="h-8 w-auto max-w-[200px] object-contain" loading="lazy" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-1">Konpare OVHC</h3>
                    <p class="text-base-500 text-xs mb-4">Comparison platform</p>
                    <a href="https://konpare.com" target="_blank" rel="noopener" class="mt-auto inline-flex items-center justify-center px-5 py-2.5 rounded-corner border border-primary-800 text-primary-800 text-sm font-semibold hover:bg-primary-50 transition-colors">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    {{-- §6 CTA --}}
    <x-cta-banner title="Not sure which cover you need?"
                  subtitle="We'll check your visa requirements and recommend the right policy for your situation."
                  primaryText="Talk to Us About Health Cover"
                  :primaryHref="route('contact')" />

</x-layout>
