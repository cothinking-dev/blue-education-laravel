<x-layout title="Component Showcase" description="Preview of all reusable UI components for Blue Education." robots="noindex, nofollow">

    {{-- ═══════════════════════════════════════════
         SHOWCASE: Section Index
    ═══════════════════════════════════════════ --}}
    <div class="bg-base-50 border-b border-base-200 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-8 py-3 flex flex-wrap items-center gap-3 text-xs font-medium">
            <span class="text-base-400 uppercase tracking-wider">Components:</span>
            <a href="#hero" class="text-primary-800 hover:underline">Hero</a>
            <a href="#breadcrumb" class="text-primary-800 hover:underline">Breadcrumb</a>
            <a href="#buttons" class="text-primary-800 hover:underline">Buttons</a>
            <a href="#cards" class="text-primary-800 hover:underline">Cards</a>
            <a href="#stats" class="text-primary-800 hover:underline">Stats</a>
            <a href="#content-split" class="text-primary-800 hover:underline">Content Split</a>
            <a href="#testimonials" class="text-primary-800 hover:underline">Testimonials</a>
            <a href="#timeline" class="text-primary-800 hover:underline">Timeline</a>
            <a href="#tables" class="text-primary-800 hover:underline">Tables</a>
            <a href="#accordion" class="text-primary-800 hover:underline">Accordion</a>
            <a href="#tabs" class="text-primary-800 hover:underline">Tabs</a>
            <a href="#callout" class="text-primary-800 hover:underline">Callout</a>
            <a href="#logo-grid" class="text-primary-800 hover:underline">Logo Grid</a>
            <a href="#newsletter" class="text-primary-800 hover:underline">Newsletter</a>
            <a href="#cta" class="text-primary-800 hover:underline">CTA Banner</a>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════
         §1 · HERO — Centered Overlay
    ═══════════════════════════════════════════ --}}
    <div id="hero" class="showcase-label">§1 · Hero — Centered (used on: Home, Contact, Why Australia)</div>
    <x-hero
        title="Your Future in Australia Starts Here"
        subtitle="Independent education, career, and migration advice from Perth, Western Australia. Since 1998."
    >
        <div class="flex gap-4 justify-center">
            <x-btn variant="white" href="#">Book a Consultation</x-btn>
            <x-btn variant="ghost" href="#" class="!text-white hover:!bg-white/10">Explore Services</x-btn>
        </div>
    </x-hero>

    {{-- Hero — Left aligned --}}
    <div class="showcase-label">§1b · Hero — Left Aligned (used on: Service overview pages)</div>
    <x-hero
        variant="left"
        title="Education Services"
        subtitle="From school programs to university degrees, we guide you through every step of your education journey in Australia."
        :breadcrumbs="[['label' => 'Services', 'href' => '#'], ['label' => 'Education']]"
        height="380px"
    >
        <x-btn variant="white" href="#">Get Started</x-btn>
    </x-hero>

    {{-- Hero — Split --}}
    <div class="showcase-label">§1c · Hero — Split Layout (used on: About, Programs, Career)</div>
    <x-hero
        variant="split"
        title="About Blue Education"
        subtitle="Since 1998, we've helped thousands of international students build their future in Australia."
        badge="Established 1998"
        :breadcrumbs="[['label' => 'About Us']]"
    >
        <div class="flex gap-3">
            <x-btn href="#">Our Story</x-btn>
            <x-btn variant="outline" href="#">Meet the Team</x-btn>
        </div>
    </x-hero>

    {{-- ═══════════════════════════════════════════
         §2 · BREADCRUMB
    ═══════════════════════════════════════════ --}}
    <div id="breadcrumb" class="showcase-label">§2 · Breadcrumb (used on: all pages)</div>
    <div class="max-w-7xl mx-auto px-8 py-8 space-y-4">
        <x-breadcrumb :items="[['label' => 'Services', 'href' => '#'], ['label' => 'Education', 'href' => '#'], ['label' => 'University Degrees']]" />
        <x-breadcrumb :items="[['label' => 'Programs', 'href' => '#'], ['label' => 'Buddy Programme']]" />
    </div>

    {{-- ═══════════════════════════════════════════
         §3 · BUTTONS
    ═══════════════════════════════════════════ --}}
    <div id="buttons" class="showcase-label">§3 · Buttons (used on: all pages)</div>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <div class="flex flex-wrap items-center gap-4 mb-6">
            <x-btn>Primary</x-btn>
            <x-btn variant="secondary">Secondary</x-btn>
            <x-btn variant="outline">Outline</x-btn>
            <x-btn variant="ghost">Ghost</x-btn>
        </div>
        <div class="flex flex-wrap items-center gap-4 mb-6">
            <x-btn size="sm">Small</x-btn>
            <x-btn size="md">Medium</x-btn>
            <x-btn size="lg">Large</x-btn>
        </div>
        <div class="bg-primary-800 inline-flex gap-4 p-6 rounded-corner-lg">
            <x-btn variant="white">White on Dark</x-btn>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════
         §4 · CARDS
    ═══════════════════════════════════════════ --}}
    <div id="cards" class="showcase-label">§4 · Cards — Icon variant (used on: Home "What We Do", Services overview)</div>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <x-section-heading title="What We Do" subtitle="Comprehensive services to support your Australian journey." class="mb-10" />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <x-card
                title="Education Services"
                description="From English courses to university degrees — we match you with the right institution and program for your goals."
                href="#"
                :icon="'<svg class=&quot;w-5 h-5&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; viewBox=&quot;0 0 24 24&quot;><path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; d=&quot;M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253&quot;/></svg>'"
            />
            <x-card
                title="Migration & Visas"
                description="Student visas, graduate work rights, and permanent residence — expert guidance through every pathway."
                href="#"
                :icon="'<svg class=&quot;w-5 h-5&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; viewBox=&quot;0 0 24 24&quot;><path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; d=&quot;M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z&quot;/></svg>'"
            />
            <x-card
                title="Career Services"
                description="Resume building, interview preparation, and job placement support to kickstart your career in Australia."
                href="#"
                :icon="'<svg class=&quot;w-5 h-5&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; viewBox=&quot;0 0 24 24&quot;><path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; d=&quot;M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z&quot;/></svg>'"
            />
            <x-card
                title="Student Support"
                description="Accommodation, airport pickup, health cover, and ongoing pastoral care throughout your stay."
                href="#"
                :icon="'<svg class=&quot;w-5 h-5&quot; fill=&quot;none&quot; stroke=&quot;currentColor&quot; viewBox=&quot;0 0 24 24&quot;><path stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2&quot; d=&quot;M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z&quot;/></svg>'"
            />
        </div>
    </div>

    {{-- Cards — Image variant --}}
    <div class="showcase-label">§4b · Cards — Image variant (used on: Programs, Blog, Featured)</div>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-card title="Buddy Programme" description="Get matched with a local student mentor who'll help you settle in, make friends, and navigate campus life." href="#" badge="Popular" linkText="Learn more" />
            <x-card title="Study Tours" description="Short-term study experiences that combine classroom learning with cultural immersion across Australia." href="#" badge="Groups" linkText="Learn more" />
            <x-card title="Executive Internship" description="Gain real-world experience with top Australian companies through our structured internship placements." href="#" badge="Premium" linkText="Learn more" />
        </div>
    </div>

    {{-- ═══════════════════════════════════════════
         §5 · STAT BLOCKS
    ═══════════════════════════════════════════ --}}
    <div id="stats" class="showcase-label">§5 · Stat Block — Dark (used on: Home)</div>
    <x-stat-block :stats="[
        ['value' => '25+', 'label' => 'Years Experience'],
        ['value' => '10,000+', 'label' => 'Students Helped'],
        ['value' => '50+', 'label' => 'Partner Institutions'],
        ['value' => '95%', 'label' => 'Visa Success Rate'],
        ['value' => '30+', 'label' => 'Countries Served'],
    ]" />

    <div class="showcase-label">§5b · Stat Block — Primary (used on: About)</div>
    <x-stat-block variant="primary" :stats="[
        ['value' => '1998', 'label' => 'Founded'],
        ['value' => '15', 'label' => 'Team Members'],
        ['value' => '4', 'label' => 'QEAC Counsellors'],
        ['value' => '24/7', 'label' => 'Support'],
    ]" />

    <div class="showcase-label">§5c · Stat Block — Light (used on: Service pages)</div>
    <x-stat-block variant="light" :stats="[
        ['value' => '200+', 'label' => 'Courses Available'],
        ['value' => '5', 'label' => 'University Partners'],
        ['value' => '98%', 'label' => 'Completion Rate'],
    ]" />

    {{-- ═══════════════════════════════════════════
         §6 · CONTENT SPLIT
    ═══════════════════════════════════════════ --}}
    <div id="content-split" class="showcase-label">§6 · Content Split — Text Left (used on: About, Fees, Education)</div>
    <x-content-split title="Our Approach to Education">
        <p>We believe every student deserves personalised guidance. Our qualified education counsellors take the time to understand your goals, budget, and background before recommending the right institution and program.</p>
        <p>With partnerships across 50+ institutions in Western Australia, we offer unbiased advice that puts your interests first.</p>
        <div class="pt-2">
            <x-btn href="#">Explore Programs</x-btn>
        </div>
    </x-content-split>

    <div class="showcase-label">§6b · Content Split — Reversed (used on: alternating sections)</div>
    <x-content-split title="Why Students Choose Perth" reverse>
        <p>Perth offers world-class education with a lower cost of living than Sydney or Melbourne. Its Mediterranean climate, safe streets, and welcoming multicultural community make it an ideal study destination.</p>
        <p>Our team lives and works in Perth, giving you on-the-ground support when you need it most.</p>
    </x-content-split>

    {{-- ═══════════════════════════════════════════
         §7 · TESTIMONIALS
    ═══════════════════════════════════════════ --}}
    <div id="testimonials" class="showcase-label">§7 · Testimonials (used on: Home, About)</div>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <x-section-heading title="What Our Students Say" subtitle="Hear from international students who trusted us with their Australian journey." class="mb-10" />
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-testimonial
                quote="Blue Education made the entire process stress-free. From my visa application to finding the perfect university, they were with me every step of the way."
                name="Priya Sharma"
                credential="India · Curtin University"
                initials="PS"
            />
            <x-testimonial
                quote="I was overwhelmed by the options until my counsellor helped me narrow it down. Now I'm studying exactly what I wanted at a fraction of the cost I expected."
                name="Wei Chen"
                credential="China · Murdoch University"
                initials="WC"
            />
            <x-testimonial
                quote="The buddy programme was a game-changer for my first semester. Having someone who understood what I was going through made all the difference."
                name="Amara Okafor"
                credential="Nigeria · ECU"
                initials="AO"
            />
        </div>
    </div>

    {{-- ═══════════════════════════════════════════
         §8 · TIMELINE / STEPS
    ═══════════════════════════════════════════ --}}
    <div id="timeline" class="showcase-label">§8 · Timeline / Process Steps (used on: Career, Migration, Executive Internship)</div>
    <div class="max-w-7xl mx-auto px-8 py-8">
        <x-section-heading title="Your Migration Journey" subtitle="A clear path from student visa to permanent residence." class="mb-10" />
        <x-timeline :steps="[
            ['title' => 'Free Consultation', 'description' => 'We assess your situation, goals, and eligibility for various visa pathways.'],
            ['title' => 'Course Enrolment', 'description' => 'We help you choose and enrol in a qualifying course at a registered institution.'],
            ['title' => 'Visa Lodgement', 'description' => 'Our registered migration agent prepares and lodges your visa application.'],
            ['title' => 'Ongoing Support', 'description' => 'From arrival to graduation — academic, career, and wellbeing support.'],
        ]" />
    </div>

    {{-- ═══════════════════════════════════════════
         §9 · TABLES
    ═══════════════════════════════════════════ --}}
    <div id="tables" class="showcase-label">§9 · Facts Table (used on: Buddy, Executive Internship, Programs)</div>
    <div class="max-w-2xl mx-auto px-8 py-8">
        <x-facts-table title="Buddy Programme — Key Facts" :rows="[
            ['key' => 'Duration', 'value' => 'First semester (approx. 14 weeks)'],
            ['key' => 'Eligibility', 'value' => 'All new international students'],
            ['key' => 'Cost', 'value' => 'Free of charge'],
            ['key' => 'Matching', 'value' => 'Based on interests, course, and language'],
            ['key' => 'Support', 'value' => 'Weekly check-ins with coordinator'],
        ]" />
    </div>

    <div class="showcase-label">§9b · Data Table (used on: Fees, Admission, Migration)</div>
    <div class="max-w-5xl mx-auto px-8 py-8">
        <x-data-table
            :headers="['Cost Category', 'Who Sets It', 'Paid To', 'Typical Range']"
            :rows="[
                ['Tuition Fees', 'Institution', 'University / College', 'AUD 20,000–45,000/yr'],
                ['OSHC (Health Cover)', 'Insurer', 'Health fund', 'AUD 500–700/yr'],
                ['Visa Application', 'Government', 'Dept. of Home Affairs', 'AUD 710'],
                ['English Test (IELTS)', 'Test provider', 'British Council / IDP', 'AUD 395'],
                ['Living Expenses', 'Student', 'Various', 'AUD 24,505/yr (min.)'],
            ]"
        />
    </div>

    {{-- ═══════════════════════════════════════════
         §10 · ACCORDION
    ═══════════════════════════════════════════ --}}
    <div id="accordion" class="showcase-label">§10 · Accordion / FAQ (used on: FAQ, Admission)</div>
    <div class="max-w-3xl mx-auto px-8 py-8">
        <x-section-heading title="Frequently Asked Questions" class="mb-8" />
        <x-accordion :items="[
            ['question' => 'Do I need an IELTS score to study in Australia?', 'answer' => 'Most institutions require an English proficiency test. IELTS is the most widely accepted, but PTE Academic, TOEFL iBT, and Cambridge are also recognised. Some institutions offer alternative pathways like English bridging courses.', 'open' => true],
            ['question' => 'How much does it cost to study in Australia?', 'answer' => 'Tuition fees vary by institution and course level. Undergraduate degrees typically range from AUD 20,000 to 45,000 per year. VET/TAFE courses are generally more affordable at AUD 6,000 to 22,000 per year.'],
            ['question' => 'Can I work while studying?', 'answer' => 'Yes. Student visa holders can work up to 48 hours per fortnight during semester and unlimited hours during scheduled breaks. This helps offset living costs while gaining valuable Australian work experience.'],
            ['question' => 'What is the Genuine Student requirement?', 'answer' => 'The Genuine Student (GS) requirement replaced the former GTE requirement. You must demonstrate that your primary purpose for coming to Australia is to study, and that you intend to comply with your visa conditions.'],
        ]" />
    </div>

    {{-- ═══════════════════════════════════════════
         §11 · TAB FILTER
    ═══════════════════════════════════════════ --}}
    <div id="tabs" class="showcase-label">§11 · Tab Filter / Category Pills (used on: Blog, FAQ)</div>
    <div class="max-w-3xl mx-auto px-8 py-8">
        <x-tab-filter
            :tabs="[
                ['label' => 'All'],
                ['label' => 'Education'],
                ['label' => 'Migration'],
                ['label' => 'Student Life'],
                ['label' => 'Career'],
            ]"
            active="All"
        />
    </div>

    {{-- ═══════════════════════════════════════════
         §12 · CALLOUT BOXES
    ═══════════════════════════════════════════ --}}
    <div id="callout" class="showcase-label">§12 · Callout Boxes (used on: Contact, Programs, Services)</div>
    <div class="max-w-3xl mx-auto px-8 py-8 space-y-4">
        <x-callout title="Free Initial Consultation" variant="primary">
            <p>Book a 30-minute session with one of our QEAC-qualified counsellors. We'll discuss your options and create a personalised study plan — no obligation, no cost.</p>
        </x-callout>
        <x-callout title="Important Visa Deadline" variant="warning">
            <p>Student visa processing times have increased. We recommend lodging your application at least 8 weeks before your course start date.</p>
        </x-callout>
        <x-callout title="SCSA Official Associate" variant="info">
            <p>Blue Education is an official associate of the School Curriculum and Standards Authority (SCSA), Western Australia's education standards body.</p>
        </x-callout>
    </div>

    {{-- ═══════════════════════════════════════════
         §13 · SECTION HEADING
    ═══════════════════════════════════════════ --}}
    <div class="showcase-label">§12b · Section Heading (used on: all pages)</div>
    <div class="max-w-7xl mx-auto px-8 py-8 space-y-8">
        <x-section-heading title="Centered with Subtitle" subtitle="This is the default section heading used to introduce content blocks throughout the site." />
        <x-section-heading title="Left Aligned Heading" subtitle="Used in contexts where content flows left-to-right." :centered="false" />
    </div>

    {{-- ═══════════════════════════════════════════
         §14 · LOGO GRID
    ═══════════════════════════════════════════ --}}
    <div id="logo-grid" class="showcase-label">§14 · Logo Grid (used on: Home, Partners)</div>
    <x-logo-grid
        title="Trusted by leading institutions"
        :logos="[
            ['src' => asset('images/partners/uwa-logo.svg'), 'alt' => 'UWA'],
            ['src' => asset('images/partners/curtin-logo.webp'), 'alt' => 'Curtin University'],
            ['src' => asset('images/partners/murdoch-logo.svg'), 'alt' => 'Murdoch University'],
            ['src' => asset('images/partners/ecu-logo.png'), 'alt' => 'ECU'],
            ['src' => asset('images/partners/nmtafe-logo.svg'), 'alt' => 'North Metro TAFE'],
        ]"
    />

    {{-- ═══════════════════════════════════════════
         §15 · CTA BANNER
    ═══════════════════════════════════════════ --}}
    <div id="cta" class="showcase-label">§16 · CTA Banner — Default (used on: every page footer)</div>
    <x-cta-banner />

    <div class="showcase-label">§16b · CTA Banner — Custom content</div>
    <x-cta-banner
        title="Need Help Choosing a Course?"
        subtitle="Our education counsellors have helped thousands of students find the right program. Let us help you too."
        primaryText="Explore Courses"
        secondaryText="Compare Institutions"
    />

    {{-- Showcase-specific styles --}}
    <x-slot:head>
        <style>
            .showcase-label {
                font-family: 'Courier New', monospace;
                font-size: 10px;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 0.12em;
                color: var(--color-primary-500);
                background: var(--color-primary-50);
                border-top: 1px solid var(--color-primary-200);
                border-bottom: 1px solid var(--color-primary-200);
                padding: 5px 32px;
            }
        </style>
    </x-slot:head>

    {{-- GSAP scroll animations --}}
    <x-slot:scripts>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                gsap.utils.toArray('[id]').forEach(section => {
                    gsap.from(section, {
                        scrollTrigger: {
                            trigger: section,
                            start: 'top 85%',
                            once: true,
                        },
                        y: 30,
                        opacity: 0,
                        duration: 0.6,
                        ease: 'power2.out',
                    });
                });
            });
        </script>
    </x-slot:scripts>

</x-layout>
