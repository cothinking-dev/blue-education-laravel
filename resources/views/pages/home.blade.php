<x-layout title="Your Future in Australia Starts Here"
          description="Independent education, career, and migration advice from Perth, Western Australia; Since 1998.">

    {{-- §1 Hero --}}
    <section id="home-hero" class="relative min-h-[95dvh] flex flex-col items-center justify-center text-center overflow-hidden [clip-path:inset(0)]">
        {{-- Background image (fixed with subtle parallax drift) --}}
        <img data-hero-parallax
             src="{{ asset('images/heroes/home.webp') }}"
             alt="East Asian students walking across an Australian university campus"
             class="fixed inset-0 w-full h-full object-cover object-center">

        {{-- Overlay: white 90% at top → white 65% at bottom --}}
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgb(255 255 255 / 1), rgb(255 255 255 / 0.55));"></div>

        {{-- Content --}}
        <div class="relative z-10 px-8 sm:px-10 py-10 sm:py-12 max-w-3xl mx-auto bg-white/10 backdrop-blur-md rounded-corner-lg shadow-lg">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-base-900 mb-2 leading-tight text-pretty">Start Your Journey to Australia with us today!</h1>
            <p class="text-xs sm:text-sm text-base-500 mb-8">Your trusted advisors since the 90s</p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4">
                <div class="relative w-full sm:w-auto">
                    <x-btn href="{{ route('services.education.index') }}" variant="primary" size="lg" class="w-full sm:w-auto">STUDY</x-btn>
                    <span class="absolute -top-2.5 -right-2 sm:-right-3 bg-amber-400 text-amber-950 text-[10px] font-bold uppercase tracking-wider px-1.5 py-0.5 rounded-full leading-none">Popular</span>
                </div>
                <x-btn href="{{ route('services.career') }}" variant="primary" size="lg" class="w-full sm:w-auto">WORK</x-btn>
                <x-btn href="{{ route('services.migration.index') }}" variant="primary" size="lg" class="w-full sm:w-auto">LIVE</x-btn>
            </div>
        </div>

    </section>

    {{-- §2 Social Proof Bar --}}
    <x-stat-block :slant="true" variant="light" :stats="[
                          ['value' => '25+', 'label' => 'Years of service'],
                          ['value' => '145+', 'label' => 'Client countries'],
                          ['value' => '100+', 'label' => 'Australian institutions'],
                          ['value' => '1000+', 'label' => 'Programmes'],
                          ['value' => '24/7', 'label' => 'Emergency support'],
                          ]" />

    {{-- §3 What We Do --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <x-section-heading title="What We Do" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Education Services"
                        description="Primary school to PhD — we help you choose the right institution and programme for your goals."
                        :image="asset('images/home/education-services.webp')"
                        alt="East Asian education advisor discussing options with students"
                        :href="route('services.education.index')"
                        linkText="Explore education pathways" />

                <x-card title="Migration & Visas"
                        description="Not sure which visa you need? We'll assess your situation and support you through the entire application process."
                        :image="asset('images/home/migration-visas.webp')"
                        alt="Visa application documents and passport on a desk"
                        :href="route('services.migration.index')"
                        linkText="See visa options" />

                <x-card title="Career Services"
                        description="We help graduates build a career in Australia. Your Australian qualification only has value if it leads to real work opportunities."
                        :image="asset('images/home/career-services.webp')"
                        alt="East Asian professional shaking hands with colleagues in an office"
                        :href="route('services.career')"
                        linkText="Build your career" />

                <x-card title="Student Support"
                        description="We cover everything a student needs. Accommodation, guardianship, health cover, airport transfers, and a 24/7 emergency line."
                        :image="asset('images/home/student-support.webp')"
                        alt="East Asian student advisor guiding a student at a laptop"
                        :href="route('services.student-support')"
                        linkText="See support services" />
            </div>
        </div>
    </section>

    {{-- §4 How We Care --}}
    <section class="bg-base-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                {{-- Text --}}
                <div class="lg:w-[42%] shrink-0">
                    <img src="{{ asset('brand/logo.webp') }}" alt="Blue Education — education, migration & career" class="h-16 w-auto mx-auto mb-6" loading="lazy">
                    <h2 class="text-3xl font-bold text-base-900 mb-6 text-pretty" data-animate="fade-up"> We stand behind more than half a century of collective experience.</h2>
                    <div class="text-base-600 leading-relaxed space-y-4 text-pretty">
                        <p class="text-sm">Since the beginning, we’ve operated on one principle: give honest advice. Every client is assigned a dedicated advisor who coordinates your education, visa, and career plan from start to finish, so you never have to re-explain your situation to multiple agencies.</p>
                        <p class="text-sm">We’ll tell you when a visa application is unlikely to succeed, when a course isn’t the right fit, or when a better pathway exists — before you commit to the wrong one. </p>
                        <p class="text-sm">We take this seriously because <b>we were once international students ourselves</b>, and <b>we are migrants too.</p>
                    </div>
                    <a href="{{ route('about.index') }}" class="inline-flex items-center gap-1 text-sm font-semibold text-primary-800 hover:text-primary-600 transition-colors mt-4">
                        Learn our story
                        <x-heroicon-o-chevron-right class="w-4 h-4" />
                    </a>
                </div>
                {{-- Team collage — bleeds past container into the gutter --}}
                @php
                $teamPhotos = [
                'images/team/glen-ong.webp',
                'images/team/monica-gaikwad.webp',
                'images/team/flora-wang.webp',
                'images/team/shen-sekhon.webp',
                'images/team/mansheel-kaur.webp',
                'images/team/arwinder-singh.webp',
                'images/team/sonia-ong.webp',
                'images/team/elaine-ho.webp',
                'images/team/monica-low.webp',
                'images/team/hana-hursepuny.webp',
                'images/team/minami-sakamoto.webp',
                'images/team/nino-sekyere-boakye.webp',
                'images/team/elijah-chongo.webp',
                'images/team/priscilla-mwansa.webp',
                'images/team/sherene-chan.webp',
                ];
                @endphp
                <div class="flex-1 lg:-mr-16 xl:-mr-24 2xl:-mr-32 min-w-0">
                    <div class="columns-3 sm:columns-4 lg:columns-5 gap-3">
                        @foreach($teamPhotos as $i => $photo)
                            <img src="{{ asset($photo) }}"
                                 alt="Blue Education team member"
                                 class="w-full object-cover rounded-corner-lg mb-3 {{ ['aspect-[4/5]', 'aspect-square', 'aspect-[3/4]'][$i % 3] }}"
                                 loading="lazy">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §5 SCSA Partnership — Trust Signal --}}
    <section class="bg-white border-y border-base-200">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-12">
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                {{-- Logos --}}
                <div class="flex items-center gap-6 shrink-0">
                    <img src="{{ asset('images/credentials/scsa-international-logo.png') }}" alt="SCSA International" class="h-14 w-auto object-contain" loading="lazy">
                    <img src="{{ asset('images/credentials/wa-dept-education-logo.svg') }}" alt="WA Department of Education" class="h-12 w-auto object-contain" loading="lazy">
                </div>
                {{-- Copy --}}
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-xl font-bold text-base-900 mb-2 text-pretty" data-animate="fade-up">Official SCSA Associate — recognised by the WA Government.</h2>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Blue Education is appointed by Western Australia's School Curriculum and Standards Authority to promote the Australian curriculum internationally — giving you access to government-backed education advice.</p>
                </div>
                {{-- Link --}}
                <a href="{{ route('about.scsa-partnership') }}" class="inline-flex items-center gap-1 text-sm font-semibold text-primary-800 hover:text-primary-600 transition-colors whitespace-nowrap shrink-0">
                    Learn about SCSA partnership
                    <x-heroicon-o-chevron-right class="w-4 h-4" />
                </a>
            </div>
        </div>
    </section>

    {{-- §6 Featured Programmes --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <x-section-heading title="Featured Programmes" :centered="false" />
            <div class="grid md:grid-cols-2 gap-8" data-animate="stagger">
                <x-card variant="featured"
                        title="Buddy Programme"
                        description="Join our Buddy Programme and experience Australian school life alongside a local student — a real preview of what it's like to be an Australian student."
                        badge="7 – 14 Day Immersion"
                        :href="route('programs.buddy-programme')"
                        linkText="Discover the Buddy Programme">
                    <x-slot:icon>
                        <x-heroicon-o-user-group class="w-7 h-7" />
                    </x-slot:icon>
                </x-card>

                <x-card variant="featured"
                        title="Study Tours"
                        description="Participate in a combination of English lessons with real-life skills and sightseeing fun — a great way to enjoy your break and discover Australia's culture and everyday life."
                        badge="1 – 4 Week Study & Tour"
                        :href="route('programs.study-tours')"
                        linkText="Explore Study Tours">
                    <x-slot:icon>
                        <x-heroicon-o-globe-alt class="w-7 h-7" />
                    </x-slot:icon>
                </x-card>
            </div>
            <div class="mt-8 text-center">
                <a href="{{ route('programs.index') }}" class="text-primary-800 font-semibold hover:text-primary-600 transition-colors">See all programmes &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §6 Why Western Australia --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <x-section-heading title="Why Western Australia" :centered="false" />
            <div class="grid md:grid-cols-3 gap-6 mb-6" data-animate="stagger">
                <x-card class="md:col-span-2"
                        title="Perth regularly features among the world's most liveable cities."
                        description="Clean air, short commutes, a safe city, and a genuinely multicultural community. Students who come here tend to stay."
                        :image="asset('images/home/wa-perth-liveable.webp')"
                        alt="Perth CBD skyline viewed from Kings Park with Swan River and greenery"
                        aspect="21/9"
                        :gradient="true" />

                <x-card title="Four globally recognised universities. All in Perth."
                        description="UWA, Curtin, Murdoch, and ECU offer qualifications accepted by employers and institutions in every major market."
                        :image="asset('images/home/wa-universities.webp')"
                        alt="Logos of UWA, Curtin, Murdoch, and Edith Cowan universities"
                        aspect="4/3" />
            </div>
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <x-card title="Your degree comes with time to use it."
                        description="Graduates receive 2–4 years of unrestricted work rights — enough to build real experience, establish connections, and weigh your options properly."
                        :image="asset('images/home/wa-work-rights.webp')"
                        alt="Young Asian woman celebrating with a friend after receiving her graduation certificate"
                        aspect="16/9"
                        :gradient="true" />

                <x-card title="A job market that needs skilled graduates."
                        description="Western Australia's resources, healthcare, construction, and professional services sectors are all expanding. The demand for qualified people is genuine and growing."
                        :image="asset('images/home/wa-job-market.webp')"
                        alt="Western Australia's growing job sectors: healthcare, resources, construction, professional services, and technology"
                        aspect="16/9" />

                <x-card title="One curriculum. K to PhD."
                        description="WA's SCSA-governed framework covers every stage — from primary school through to doctoral research. Structured, regulated, and recognised internationally."
                        :image="asset('images/home/wa-k-to-phd.webp')"
                        alt="Education pathway diagram from primary school through to PhD under WA's SCSA framework"
                        aspect="16/9" />
            </div>
            <div class="mt-8">
                <a href="{{ route('why-australia') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors">See why Western Australia &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §7 Testimonials --}}
    @if($testimonials->isNotEmpty())
        <section class="bg-white">
            <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
                <x-section-heading title="What Our Clients Say" :centered="false" />
                <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                    @foreach($testimonials->take(3) as $testimonial)
                        <x-testimonial :quote="$testimonial->quote"
                                       :name="$testimonial->name"
                                       :credential="$testimonial->country . ($testimonial->credential ? ' · ' . $testimonial->credential : '')"
                                       :initials="$testimonial->initials"
                                       :photo="$testimonial->photo" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- §8 Partners --}}
    <x-logo-grid title="Partnered with leading Western Australian institutions."
                 :marquee="true"
                 :logos="[
                        ['src' => asset('images/partners/uwa-logo.svg'), 'alt' => 'University of Western Australia'],
                        ['src' => asset('images/partners/curtin-logo.webp'), 'alt' => 'Curtin University'],
                        ['src' => asset('images/partners/murdoch-logo.svg'), 'alt' => 'Murdoch University'],
                        ['src' => asset('images/partners/ecu-logo.png'), 'alt' => 'Edith Cowan University'],
                        ['src' => asset('images/partners/notre-dame-logo.webp'), 'alt' => 'University of Notre Dame Australia'],
                        ['src' => asset('images/partners/nmtafe-logo.svg'), 'alt' => 'North Metropolitan TAFE'],
                        ['src' => asset('images/partners/smtafe-logo.svg'), 'alt' => 'South Metropolitan TAFE'],
                        ]" />

    {{-- §9 Latest From the Blog --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <div class="flex items-center justify-between mb-10">
                <h2 class="text-3xl font-bold text-base-900 text-pretty" data-animate="fade-up">Latest From the Blog</h2>
                <a href="{{ route('blog.index') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors hidden sm:inline">View all articles &rarr;</a>
            </div>
            @if($latestPosts->isNotEmpty())
                <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                    @foreach($latestPosts as $post)
                        <x-blog-card :title="$post->title"
                                     :excerpt="$post->excerpt"
                                     :image="$post->featured_image"
                                     :category="$post->category?->name"
                                     :categoryBadgeClass="$post->category?->badgeClass()"
                                     :date="$post->published_at"
                                     :readTime="$post->read_time"
                                     :href="route('blog.show', $post->slug)" />
                    @endforeach
                </div>
            @else
                <p class="text-base-500 text-center py-8">Blog posts coming soon.</p>
            @endif
            <div class="mt-6 text-center sm:hidden">
                <a href="{{ route('blog.index') }}" class="text-primary-800 font-semibold text-sm hover:text-primary-600 transition-colors">View all articles &rarr;</a>
            </div>
        </div>
    </section>

    {{-- §10 Final CTA --}}
    <x-cta-banner title="Not sure where to start?"
                  subtitle="Most people aren't. Book a conversation with us and we'll map out your options honestly — whatever they turn out to be."
                  primaryText="Book a Consultation"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
