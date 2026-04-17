<x-layout title="Migration & Visas"
          :description="'Registered migration agents with ' . (date('Y') - 1998) . ' years of successful applications. From student visas to permanent residence, we manage the process end to end.'">

    {{-- §1 Hero --}}
    <x-hero title="Visa applications that get it right the first time."
            :subtitle="'Registered migration agents with ' . (date('Y') - 1998) . ' years of successful applications. From student visas to permanent residence, we manage the process end to end.'"
            :image="asset('images/heroes/services-migration.webp')"
            alt="East Asian woman advisor in a professional consultation meeting"
            :breadcrumbs="true" />

    {{-- §2 The Migration Pathway --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="The Migration Pathway" :centered="false" />
            <div class="grid md:grid-cols-4 gap-6 relative" data-animate="stagger">
                {{-- Connecting line (desktop) --}}
                <div class="hidden md:block absolute top-8 left-[12.5%] right-[12.5%] h-0.5 bg-base-200"></div>

                <div class="text-center relative">
                    <div class="w-16 h-16 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center mx-auto mb-4 relative z-10 border-4 border-white">
                        <x-heroicon-o-book-open class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-1">Study</h3>
                    <p class="text-xs font-semibold text-primary-800 mb-2">Student Visa — Subclass 500</p>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Enrol in a CRICOS-registered course, study full-time, and work up to 48 hours per fortnight.</p>
                </div>

                <div class="text-center relative">
                    <div class="w-16 h-16 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center mx-auto mb-4 relative z-10 border-4 border-white">
                        <x-heroicon-o-check-circle class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-1">Graduate</h3>
                    <p class="text-xs font-semibold text-primary-800 mb-2">Graduate Work Visa — Subclass 485</p>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Remain in Australia for 18 months to 4 years after graduation — depending on your qualification level and visa stream.</p>
                </div>

                <div class="text-center relative">
                    <div class="w-16 h-16 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center mx-auto mb-4 relative z-10 border-4 border-white">
                        <x-heroicon-o-briefcase class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-1">Work</h3>
                    <p class="text-xs font-semibold text-primary-800 mb-2">Subclass 482 or Skilled Migration</p>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Your Australian work experience becomes the foundation for the next step.</p>
                    <a href="{{ route('services.career') }}" class="text-primary-800 font-medium text-sm hover:underline mt-2 inline-block">Career services &rarr;</a>
                </div>

                <div class="text-center relative">
                    <div class="w-16 h-16 rounded-full bg-green-100 text-green-700 flex items-center justify-center mx-auto mb-4 relative z-10 border-4 border-white">
                        <x-heroicon-o-home class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-bold text-base-900 mb-1">Settle</h3>
                    <p class="text-xs font-semibold text-primary-800 mb-2">Permanent Residence</p>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Points-based, employer-sponsored, business, or family pathways — each with different requirements and timelines.</p>
                </div>
            </div>
            <p class="text-sm text-base-500 italic mt-8 text-center text-pretty">Your path may skip steps or combine them. We plan around your specific situation.</p>
        </div>
    </section>

    {{-- §3 Visa Services --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Visa Services" :centered="false" />
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Student Visas"
                        description="Subclass 500 applications for international students enrolling in registered Australian courses. We handle GTE statements, document compilation, and lodgement."
                        :href="route('services.migration.student-visas')"
                        linkText="Student visa details">
                    <x-slot:icon>
                        <x-heroicon-o-book-open class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Graduate & Work Visas"
                        description="Post-study work visas (Subclass 485), employer-sponsored visas (TSS/482), and Standard Business Sponsor applications."
                        :href="route('services.migration.graduate-work')"
                        linkText="Graduate & work visas">
                    <x-slot:icon>
                        <x-heroicon-o-briefcase class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>

                <x-card title="Permanent Residence"
                        description="Skilled migration, business migration, family & partner visas, and resident return visas. Multiple pathways to calling Australia home. We also assist with visa refusals, cancellations, and appeals."
                        :href="route('services.migration.permanent-residence')"
                        linkText="Permanent residence pathways">
                    <x-slot:icon>
                        <x-heroicon-o-home class="w-5 h-5" />
                    </x-slot:icon>
                </x-card>
            </div>
            <p class="text-sm text-base-500 italic mt-6 text-pretty">Also available: Visitor Visas (Subclass 600) for family members and short-term visits to Australia. <a href="{{ route('contact') }}" class="text-primary-800 font-medium hover:underline">Speak to an advisor &rarr;</a></p>
        </div>
    </section>

    {{-- Visual separator --}}
    <x-visual-break :images="[
        ['src' => 'images/services-migration/perth-skyline.webp', 'alt' => 'Perth city skyline and Elizabeth Quay waterfront'],
    ]" />

    {{-- §4 Why Trust Us --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row gap-14 items-start">
                <div class="flex-1">
                    <x-section-heading title="Why Trust Us With Your Visa" :centered="false" />
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">Visa mistakes cost time and money. We tell you what's realistic before you apply — not after something goes wrong.</p>
                    <div class="grid sm:grid-cols-2 gap-x-6 gap-y-4">
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <div>
                                <p class="font-semibold text-base-900 text-sm">Registered agents</p>
                                <p class="text-base-500 text-xs">Migration Alliance, MIA, QEAC</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <div>
                                <p class="font-semibold text-base-900 text-sm">{{ date('Y') - 1998 }} years experience</p>
                                <p class="text-base-500 text-xs">Nearly every visa category</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <div>
                                <p class="font-semibold text-base-900 text-sm">Honest assessments</p>
                                <p class="text-base-500 text-xs">We tell you if it won't work</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <div>
                                <p class="font-semibold text-base-900 text-sm">End-to-end</p>
                                <p class="text-base-500 text-xs">Education, career & migration</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                            <div>
                                <p class="font-semibold text-base-900 text-sm">Transparent fees</p>
                                <p class="text-base-500 text-xs">Communicated upfront</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-[40%]">
                    <h3 class="font-semibold text-base-700 mb-4 text-sm">Credentials & Memberships</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <x-credential-card name="Migration Alliance" logo="images/credentials/migration-alliance.svg" description="" />
                        <x-credential-card name="Migration Institute of Australia" logo="images/credentials/mia.svg" description="" />
                        <x-credential-card name="QEAC Certified" logo="images/credentials/qeac.svg" description="" />
                        <div class="border border-base-200 rounded-corner-lg p-5 flex flex-col items-center justify-center text-center bg-white">
                            <span class="text-3xl font-bold text-primary-800">{{ date('Y') - 1998 }}<span class="text-lg">yr</span></span>
                            <p class="text-base-500 text-xs mt-1">{{ date('Y') - 1998 }} years &middot; 40+ countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 CTA --}}
    <x-cta-banner title="Get an honest read on your visa options."
                  subtitle="A registered migration agent will assess your situation, identify the right pathway, and tell you if something won't work — before it costs you."
                  primaryText="Book a Migration Assessment"
                  :primaryHref="route('contact')" />

</x-layout>
