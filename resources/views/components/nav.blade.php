<header role="banner" class="bg-white border-b border-gray-200 relative z-50">
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:bg-white focus:text-primary-800 focus:px-4 focus:py-2 focus:rounded focus:shadow-lg focus:text-sm focus:font-semibold" href="#main-content">Skip to content</a>

    <nav aria-label="Main navigation" class="px-8 py-4 flex items-center justify-between gap-6">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="shrink-0" aria-label="Blue Education — home">
            <picture>
                <source srcset="{{ asset('brand/logo-sm.webp') }}" type="image/webp">
                <img src="{{ asset('brand/logo-sm.png') }}" alt="Blue Education" class="h-10 w-auto">
            </picture>
        </a>

        {{-- Desktop nav links --}}
        <div class="hidden lg:flex items-center gap-6 text-sm font-medium text-gray-600 flex-1">

            {{-- Services dropdown --}}
            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <button type="button" @click="open = !open" :aria-expanded="open"
                        class="flex items-center gap-1 hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">
                    Services
                    <svg class="w-3 h-3 mt-0.5 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-64 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <div class="px-3 py-1 text-xs font-bold text-gray-400 uppercase tracking-wider">Education</div>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Education Overview</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">School Programs</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">English &amp; Foundation</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">VET &amp; TAFE</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">University Degrees</a>
                    <hr class="my-1 border-gray-100">
                    <div class="px-3 py-1 text-xs font-bold text-gray-400 uppercase tracking-wider">Migration</div>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Migration Overview</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">Student Visas</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">Graduate &amp; Work Visas</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8">Permanent Residence</a>
                    <hr class="my-1 border-gray-100">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Career Services</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Student Support</a>
                </div>
            </div>

            {{-- Programs dropdown --}}
            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <button type="button" @click="open = !open" :aria-expanded="open"
                        class="flex items-center gap-1 hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">
                    Programs
                    <svg class="w-3 h-3 mt-0.5 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Buddy Programme</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Study Tours</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">SCSA Associate</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Executive Internship</a>
                </div>
            </div>

            <a href="#" class="hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">Why Australia</a>

            {{-- About dropdown --}}
            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <button type="button" @click="open = !open" :aria-expanded="open"
                        class="flex items-center gap-1 hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">
                    About
                    <svg class="w-3 h-3 mt-0.5 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">About Us</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Our Team</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Our Partners</a>
                </div>
            </div>

            {{-- Resources dropdown --}}
            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                <button type="button" @click="open = !open" :aria-expanded="open"
                        class="flex items-center gap-1 hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">
                    Resources
                    <svg class="w-3 h-3 mt-0.5 transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="open" x-transition class="absolute top-full left-0 mt-2 w-52 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Blog</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">FAQ</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800">Admission Requirements</a>
                </div>
            </div>

            <a href="#" class="hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">Fees</a>
            <a href="#" class="hover:text-primary-800 focus:text-primary-800 focus:outline-none py-1">Contact</a>
        </div>

        {{-- CTA + Hamburger --}}
        <div class="flex items-center gap-3 shrink-0">
            <a href="#" class="hidden lg:inline-flex bg-primary-500 text-white text-sm font-semibold px-5 py-2 rounded-corner hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300">Book a Consultation</a>

            {{-- Mobile hamburger --}}
            <button type="button" x-data @click="$dispatch('toggle-mobile-nav')" aria-label="Open navigation menu"
                    class="lg:hidden p-2 rounded text-gray-600 hover:text-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

    </nav>

    {{-- Mobile drawer --}}
    <div x-data="{ open: false }" @toggle-mobile-nav.window="open = !open" x-show="open" x-transition
         class="lg:hidden border-t border-gray-200 bg-white px-6 py-4 space-y-1">
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">Services</a>
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">Programs</a>
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">Why Australia</a>
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">About</a>
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">Resources</a>
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">Fees</a>
        <a href="#" class="block py-2 text-sm text-gray-700 hover:text-primary-800 font-medium">Contact</a>
        <div class="pt-4 pb-2">
            <a href="#" class="block w-full text-center bg-primary-500 text-white text-sm font-semibold px-5 py-3 rounded-corner hover:bg-primary-600">Book a Consultation</a>
        </div>
    </div>

</header>
