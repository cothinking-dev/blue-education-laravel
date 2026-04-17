<x-layout title="Career Services"
          description="From skills gap analysis and employer introductions to graduate work visa support — every step from study to employment in Australia.">

    {{-- §1 Hero --}}
    <x-hero title="Turn your Australian qualification into an Australian career."
            subtitle="Getting qualified is the start. From skills gap analysis and employer introductions to graduate work visa support — every step of the path from study to employment, handled by a dedicated team."
            :image="asset('images/heroes/services-career.webp')"
            alt="Japanese man and woman collaborating at a laptop in a modern office"
            variant="left"
            :breadcrumbs="true" />

    {{-- §2 Career Pathway --}}
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <h2 class="text-3xl font-bold text-base-900 mb-4 text-pretty" data-animate="fade-up">The Career Pathway</h2>
            <p class="text-base-600 mb-10 text-pretty">Six structured stages — from assessing your starting point to advancing your career in Australia.</p>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6" data-animate="stagger">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Assess & Plan', 'desc' => 'One-on-one session to map your skills against your goals. We identify gaps, outline realistic pathways, and review your resume before you start applying.'],
                        ['num' => '2', 'title' => 'Prepare', 'desc' => 'Interview techniques, professional networking, LinkedIn optimisation — plus the unwritten expectations that affect how you\'re perceived from day one.'],
                        ['num' => '3', 'title' => 'Build Experience', 'desc' => 'Industry-specific internships and work placements give you the Australian work history that makes your resume credible to local employers.'],
                        ['num' => '4', 'title' => 'Connect with Employers', 'desc' => 'Direct introductions to employers we work with — not job boards, not cold applications. Recruitment support guided by advisors who know your field.'],
                        ['num' => '5', 'title' => 'Secure Your Visa', 'desc' => 'Your career plan and your visa must align. We assess your work visa eligibility, prepare your application, and coordinate employer sponsorship where required.'],
                    ];
                @endphp
                @foreach($steps as $step)
                    <div class="border border-base-200 rounded-corner-lg p-6 bg-white">
                        <div class="w-8 h-8 rounded-full bg-primary-100 text-primary-800 flex items-center justify-center text-sm font-bold mb-4">{{ $step['num'] }}</div>
                        <h3 class="font-bold text-base-900 mb-2 text-pretty">{{ $step['title'] }}</h3>
                        <p class="text-base-600 text-sm leading-relaxed text-pretty">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
                <div class="border border-primary-200 rounded-corner-lg p-6 bg-primary-800 text-white">
                    <div class="w-8 h-8 rounded-full bg-white/20 text-white flex items-center justify-center text-sm font-bold mb-4">6</div>
                    <h3 class="font-bold mb-2 text-pretty">Advance Your Career</h3>
                    <p class="text-primary-200 text-sm leading-relaxed text-pretty">The Executive Internship Programme offers senior-level placements with executive mentorship for business graduates and experienced professionals. Limited places, twice a year.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visual break --}}
    <x-visual-break :images="[
        ['src' => 'images/services-career/perth-skyline.webp', 'alt' => 'Perth CBD skyline and Elizabeth Quay waterfront from across the Swan River'],
    ]" bg="bg-base-50" />

    {{-- §3 Executive Internship Highlight --}}
    <section class="bg-gradient-to-br from-primary-900 to-primary-700">
        <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="flex-1">
                    <x-badge variant="dark" size="md" :uppercase="false" class="mb-4">Premium Programme</x-badge>
                    <h2 class="text-3xl font-bold text-white mb-4 text-pretty" data-animate="fade-up">The Executive Internship Programme</h2>
                    <p class="text-primary-200 leading-relaxed mb-4 text-pretty">For business graduates and experienced professionals who want more than entry-level experience. Strategic placements with Australian employers, executive mentorship through our EIP partners, and a structured programme that runs twice a year.</p>
                    <p class="text-primary-200 leading-relaxed mb-6 text-pretty">Places are limited. Applications open before each intake.</p>
                    <a href="{{ route('programs.executive-internship') }}" class="inline-flex bg-white text-primary-800 font-semibold px-6 py-3 rounded-corner hover:bg-primary-50 transition-colors">Learn more about the Executive Internship Programme &rarr;</a>
                </div>
                <div class="flex-1 lg:max-w-[40%]">
                    <img src="{{ asset('images/services-career/internship-professional.webp') }}" alt="Group of Asian business professionals meeting in a modern office" class="rounded-corner-lg w-full h-auto object-cover aspect-[3/2] shadow-lg" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- §4 CTA --}}
    <x-cta-banner title="Your career in Australia starts with a plan."
                  subtitle="We map your skills against Australian employment pathways and identify your work visa options before you're under pressure to figure it out alone."
                  primaryText="Book a Career Assessment"
                  :primaryHref="route('contact')"
                  phone="+61 8 6381 0030" />

</x-layout>
