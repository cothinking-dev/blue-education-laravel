<x-layout title="Your Future in Australia Starts Here"
          description="Independent education, career, and migration advice from Perth, Western Australia; Since 1998.">

    {{-- §1 Hero --}}
    <section id="home-hero" class="relative min-h-[95dvh] flex flex-col items-center justify-center text-center overflow-hidden [clip-path:inset(0)]">
        {{-- Background image (fixed with subtle parallax drift) --}}
        <img data-hero-parallax
             src="{{ asset('images/heroes/home.webp') }}"
             alt="East Asian students walking across an Australian university campus"
             class="fixed inset-0 w-full h-full object-cover object-center">

        {{-- Overlay: black 90% at top → black 50% at bottom --}}
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgb(0 0 0 / 0.9), rgb(0 0 0 / 0.5));"></div>

        {{-- Content --}}
        <div class="relative z-10 px-8 max-w-3xl mx-auto">
            <h1 class="text-4xl lg:text-5xl font-bold text-white mb-5 leading-tight text-pretty">Your Future in Australia Starts Here</h1>
            <p class="text-xl text-base-200 mb-8 text-pretty">Independent education, career, and migration advice from Perth, Western Australia. Since 1998.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-btn href="{{ route('contact') }}" variant="primary" size="lg">Book a Consultation</x-btn>
                <x-btn href="{{ route('services.education.index') }}" variant="white" size="lg">Explore Our Services</x-btn>
            </div>
        </div>

        {{-- Bounce arrow --}}
        <div class="absolute bottom-24 left-1/2 -translate-x-1/2 z-10 animate-bounce">
            <x-heroicon-o-chevron-double-down class="w-8 h-8 text-white/70" />
        </div>

    </section>

    {{-- §2 Social Proof Bar --}}
    <x-stat-block :slant="true" :stats="[
        ['value' => (date('Y') - 1998) . '+', 'label' => 'Years of service'],
        ['value' => '40+', 'label' => 'Client countries'],
        ['value' => '1,100+', 'label' => 'Australian institutions'],
        ['value' => '7', 'label' => 'Top 100 universities'],
        ['value' => '24/7', 'label' => 'Emergency support'],
    ]" />

    {{-- §3 What We Do --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <x-section-heading title="What We Do" :centered="false" />
            <div class="grid sm:grid-cols-2 gap-6" data-animate="stagger">
                <x-card title="Education Services"
                        description="Primary school to PhD. We help you find the right institution and program for your goals."
                        :image="asset('images/home/education-services.webp')"
                        alt="East Asian education advisor discussing options with students"
                        :href="route('services.education.index')"
                        linkText="Explore education pathways" />

                <x-card title="Migration & Visas"
                        description="Not sure which visa you need? We'll assess your situation and help you handle the application."
                        :image="asset('images/home/migration-visas.webp')"
                        alt="Visa application documents and passport on a desk"
                        :href="route('services.migration.index')"
                        linkText="See visa options" />

                <x-card title="Career Services"
                        description="We help graduates build a career in Australia. Your Australian qualification is only useful if you can work with it."
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
                    <h2 class="text-3xl font-bold text-base-900 mb-6 text-pretty" data-animate="fade-up">{{ date('Y') - 1998 }} years of experience we stand behind.</h2>
                    <div class="text-base-600 leading-relaxed space-y-4 text-pretty">
                        <p class="text-sm">Since 1998, we've operated on one principle: give honest advice.</p>
                        <p class="text-sm">Every client is assigned a dedicated advisor who coordinates your education, visa, and career plan — start to finish. No handoffs between agencies means no need to re-explain your situation over and over again.</p>
                        <p class="text-sm">That means telling you when a visa application won't succeed, a course isn't the right fit, or a better path exists — before you commit to the wrong one.</p>
                        <p class="text-sm">That's earned the trust of clients from 40+ countries — scholars who came back, and brought others — for decisions that shaped their lives.</p>
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

    {{-- §5 Featured Programs --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-16">
            <x-section-heading title="Featured Programs" :centered="false" />
            <div class="grid md:grid-cols-2 gap-8" data-animate="stagger">
                <x-card variant="featured"
                        title="Buddy Programme"
                        description="14 days at an Australian homestay — classroom integration and cultural immersion. Built in partnership with Anglican Schools."
                        badge="14-Day Immersion"
                        :href="route('programs.buddy-programme')"
                        linkText="Discover the Buddy Programme">
                    <x-slot:icon>
                        <x-heroicon-o-user-group class="w-7 h-7" />
                    </x-slot:icon>
                </x-card>

                <x-card variant="featured"
                        title="SCSA Associate"
                        description="Complete the Western Australian Certificate of Education (WACE) from your home country. Officially recognised and globally respected."
                        badge="International Curriculum"
                        :href="route('programs.scsa-associate')"
                        linkText="Learn about SCSA">
                    <x-slot:icon>
                        <x-heroicon-o-academic-cap class="w-7 h-7" />
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
                <div class="md:col-span-2 rounded-corner-lg border border-base-200 bg-white overflow-hidden">
                    <div class="aspect-[21/9] bg-base-100 relative">
                        <img src="{{ asset('images/home/wa-perth-liveable.webp') }}"
                             alt="Perth CBD skyline viewed from Kings Park with Swan River and greenery"
                             class="w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-b from-transparent to-white"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Perth regularly features among the world's most liveable cities.</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Clean air, short commutes, a safe city, and a genuinely multicultural community. Students who come here tend to stay.</p>
                    </div>
                </div>
                <div class="rounded-corner-lg border border-base-200 bg-white overflow-hidden">
                    <div class="aspect-[4/3] bg-base-100">
                        <img src="{{ asset('images/home/wa-universities.webp') }}"
                             alt="Logos of UWA, Curtin, Murdoch, and Edith Cowan universities"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Four globally recognised universities. All in Perth.</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">UWA, Curtin, Murdoch, and ECU offer qualifications accepted by employers and institutions in every major market.</p>
                    </div>
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-6" data-animate="stagger">
                <div class="rounded-corner-lg border border-base-200 bg-white overflow-hidden">
                    <div class="aspect-[16/9] bg-base-100 relative">
                        <img src="{{ asset('images/home/wa-work-rights.webp') }}"
                             alt="Young Asian woman celebrating with a friend after receiving her graduation certificate"
                             class="w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-b from-transparent to-white"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">Your degree comes with time to use it.</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Graduates receive 2–4 years of unrestricted work rights — enough to build real experience, establish connections, and weigh your options properly.</p>
                    </div>
                </div>
                <div class="rounded-corner-lg border border-base-200 bg-white overflow-hidden">
                    <div class="aspect-[16/9] bg-base-100">
                        <img src="{{ asset('images/home/wa-job-market.webp') }}"
                             alt="Western Australia's growing job sectors: healthcare, resources, construction, professional services, and technology"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">A job market that needs skilled graduates.</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">Western Australia's resources, healthcare, construction, and professional services sectors are all expanding. The demand for qualified people is genuine and growing.</p>
                    </div>
                </div>
                <div class="rounded-corner-lg border border-base-200 bg-white overflow-hidden">
                    <div class="aspect-[16/9] bg-base-100">
                        <img src="{{ asset('images/home/wa-k-to-phd.webp') }}"
                             alt="Education pathway diagram from primary school through to PhD under WA's SCSA framework"
                             class="w-full h-full object-cover"
                             loading="lazy">
                    </div>
                    <div class="p-8">
                        <h3 class="text-lg font-bold text-base-900 mb-3 text-pretty">One curriculum. K to PhD.</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">WA's SCSA-governed framework covers every stage — from primary school through to doctoral research. Structured, regulated, and recognised internationally.</p>
                    </div>
                </div>
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
