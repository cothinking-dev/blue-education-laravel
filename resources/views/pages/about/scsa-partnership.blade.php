<x-layout title="SCSA Partnership"
          description="Blue Education is officially recognised by the WA Government's School Curriculum and Standards Authority (SCSA) — appointed to promote the Western Australian curriculum internationally.">

    {{-- §1 Hero --}}
    <x-hero title="Officially recognised by the WA Government to promote Australian education internationally."
            subtitle="Blue Education is an appointed SCSA Associate — recognised by the School Curriculum and Standards Authority under the WA Department of Education. This means we can provide direct support to students and schools seeking access to the Western Australian curriculum."
            :image="asset('images/heroes/programs-scsa-associate.webp')"
            alt="Students at an international school delivering the Australian curriculum"
            badge="Official SCSA Associate · WA Government"
            variant="left"
            :breadcrumbs="true">
        <div class="flex items-center gap-6 mt-8">
            <img src="{{ asset('images/credentials/scsa-international-logo.png') }}" alt="SCSA International" class="h-12 w-auto object-contain" width="180" height="48">
            <img src="{{ asset('images/credentials/wa-dept-education-logo.svg') }}" alt="WA Department of Education" class="h-10 w-auto object-contain" width="120" height="40">
        </div>
    </x-hero>

    {{-- §2 What Is SCSA --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What Is SCSA?" :centered="false" />
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="flex-1">
                    <p class="text-base-600 leading-relaxed mb-6 text-pretty">The School Curriculum and Standards Authority is a Western Australian Government statutory authority responsible for the curriculum, assessment, standards, and reporting for all schools — from Kindergarten to Year 12. Since 1987, SCSA has licensed international schools to deliver its curriculum programmes overseas, producing graduates with the same qualification as domestic Australian students.</p>
                    <x-facts-table :rows="[
                        ['key' => 'Full name', 'value' => 'School Curriculum and Standards Authority'],
                        ['key' => 'Jurisdiction', 'value' => 'Western Australia'],
                        ['key' => 'Scope', 'value' => 'Kindergarten to Year 12'],
                        ['key' => 'Key qualification', 'value' => 'Western Australian Certificate of Education (WACE)'],
                        ['key' => 'International programme', 'value' => 'Western Australian Matriculation International (WAM International) — since 1987'],
                        ['key' => 'Recognition', 'value' => 'Accepted for direct entry to all Australian universities'],
                    ]" />
                </div>
                <div class="lg:w-[35%] space-y-4">
                    <div class="relative border-2 border-purple-200 rounded-corner-lg p-5 flex flex-col items-center text-center overflow-hidden">
                        <svg class="absolute -right-4 -bottom-4 w-28 h-28 opacity-[0.06]" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M50 5 L55 20 L70 10 L65 28 L85 25 L72 38 L90 45 L72 50 L85 65 L68 58 L70 78 L55 65 L50 85 L45 65 L30 78 L32 58 L15 65 L28 50 L10 45 L28 38 L15 25 L35 28 L30 10 L45 20 Z" class="fill-purple-900" />
                        </svg>
                        <img src="{{ asset('images/credentials/scsa-logo.png') }}" alt="School Curriculum and Standards Authority — Government of Western Australia" class="relative h-16 w-auto object-contain mb-3" loading="lazy">
                        <p class="relative font-bold text-base-900 mb-1">Official SCSA Associate</p>
                        <p class="relative text-base-600 text-sm text-pretty">Appointed to promote the Western Australian curriculum programme internationally.</p>
                    </div>
                    <div class="border border-base-200 rounded-corner-lg p-5 flex flex-col items-center text-center">
                        <img src="{{ asset('images/credentials/wa-dept-education-logo.svg') }}" alt="Western Australian Department of Education" class="h-14 w-auto object-contain mb-3" loading="lazy">
                        <p class="font-bold text-base-900 mb-1">WA Department of Education</p>
                        <p class="text-base-600 text-sm text-pretty">Recognised under the Western Australian Department of Education's international programme.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- §3 What This Means For You --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="What This Means For You" :centered="false" />
            <p class="text-base-600 leading-relaxed mb-8 max-w-3xl text-pretty">Our SCSA appointment means Blue Education has direct, government-backed authority in Australian education. When you work with us, you're working with a team that the WA Government trusts to represent its education system internationally.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-shield-check class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Government-Recognised Advice</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Our guidance on the Western Australian education system comes with the backing of the government authority responsible for it. Not every education agent can say that.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-globe-alt class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Access WACE From Home</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">Through SCSA-accredited schools, students can earn the Western Australian Certificate of Education (WACE) from their home country — the same qualification Australian Year 12 students receive.</p>
                </div>
                <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                    <div class="w-10 h-10 rounded-corner bg-primary-50 text-primary-800 flex items-center justify-center mb-4">
                        <x-heroicon-o-academic-cap class="w-5 h-5" />
                    </div>
                    <h3 class="font-bold text-base-900 mb-2 text-pretty">Direct University Entry</h3>
                    <p class="text-base-600 text-sm leading-relaxed text-pretty">WACE graduates are assessed on the same criteria as domestic Australian students. No bridging courses, no additional testing — direct entry to Western Australian universities.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §4 Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/programs-scsa-associate/classroom.webp', 'alt' => 'Students in an international school classroom following the Australian curriculum'],
        ['src' => 'images/programs-scsa-associate/curriculum-materials.webp', 'alt' => 'Western Australian curriculum materials and education resources'],
    ]" padding="pt-14 pb-0" />

    {{-- §5 Where We Promote the WA Curriculum --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <x-section-heading title="Where We Promote the WA Curriculum" :centered="false" />
            <p class="text-base-600 leading-relaxed mb-8 max-w-3xl text-pretty">Blue Education is appointed to promote the Western Australian curriculum in these markets — connecting students and families with SCSA-accredited schools delivering the Australian education system.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6" data-animate="stagger">
                @php
                    $countries = [
                        ['name' => 'Malaysia', 'flag' => '🇲🇾'],
                        ['name' => 'Indonesia', 'flag' => '🇮🇩'],
                        ['name' => 'Bhutan', 'flag' => '🇧🇹'],
                        ['name' => 'South Korea', 'flag' => '🇰🇷'],
                    ];
                @endphp
                @foreach($countries as $country)
                    <div class="bg-base-50 rounded-corner-lg border border-base-200 p-6 text-center">
                        <span class="text-4xl mb-3 block" aria-hidden="true">{{ $country['flag'] }}</span>
                        <h3 class="font-bold text-base-900">{{ $country['name'] }}</h3>
                    </div>
                @endforeach
            </div>
            <p class="text-base-500 text-sm mt-6 text-center">And more — our reach extends across 145+ countries worldwide.</p>
        </div>
    </section>

    {{-- §6 Premier's WACE Bursary --}}
    <section class="bg-base-50">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="relative overflow-hidden border-2 border-amber-300 rounded-corner-lg bg-gradient-to-r from-amber-50 to-white p-8 lg:flex lg:items-center lg:gap-10" data-animate="fade-up">
                <div class="hidden lg:flex items-center justify-center shrink-0 w-28 h-28" aria-hidden="true">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="50,20 80,35 50,50 20,35" class="fill-amber-400" />
                        <polygon points="50,50 80,35 80,42 50,57" class="fill-amber-500" />
                        <polygon points="50,50 20,35 20,42 50,57" class="fill-amber-300" />
                        <line x1="80" y1="35" x2="80" y2="60" class="stroke-amber-600" stroke-width="2" />
                        <circle cx="80" cy="62" r="3" class="fill-amber-500" />
                        <circle cx="50" cy="75" r="16" class="fill-amber-200 stroke-amber-400" stroke-width="2" />
                        <circle cx="50" cy="75" r="12" class="stroke-amber-400" stroke-width="1" fill="none" />
                        <text x="50" y="80" text-anchor="middle" class="fill-amber-700" font-size="16" font-weight="700" font-family="Inter, sans-serif">$</text>
                    </svg>
                </div>
                <div class="flex-1">
                    <x-badge variant="semantic" color="amber" size="md" :uppercase="false" class="mb-3">Premier's WACE Bursary</x-badge>
                    <h3 class="text-xl font-bold text-base-900 mb-2 text-pretty">AUD $20,000 towards a WA university degree</h3>
                    <p class="text-base-600 leading-relaxed mb-3 text-pretty">Students who complete the WACE programme overseas and enrol in a participating WA university may be eligible for the Premier's WACE Bursary — awarded to 50 applicants annually.</p>
                    <p class="text-base-500 text-sm text-pretty">Participating universities: UWA, Curtin, Murdoch, ECU, and Notre Dame.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- §7 Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/programs-scsa-associate/university-campus.webp', 'alt' => 'Modern university campus building with glass facade and autumn trees'],
    ]" aspect="aspect-[5/1]" />

    {{-- §8 Also Relevant --}}
    <x-next-steps variant="featured" bg="bg-white" :links="[
        ['href' => route('services.education.index'), 'title' => 'Education Pathways', 'label' => 'Explore', 'description' => 'From school programmes to postgraduate degrees — see the full range of education options we support for students coming to Western Australia.'],
        ['href' => route('about.partners'), 'title' => 'Our Partner Institutions', 'label' => 'Network', 'description' => 'See the universities, schools, and organisations Blue Education works with across Australia.'],
    ]" />

    {{-- §9 CTA --}}
    <x-cta-banner title="Want to know more about studying the Australian curriculum?"
                  subtitle="Whether you're a student, a parent, or a school — we can explain how the WA curriculum works and what your options are."
                  primaryText="Talk to Us"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
