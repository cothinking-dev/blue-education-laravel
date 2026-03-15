<header role="banner" class="bg-white/95 backdrop-blur-sm border-b border-gray-200 sticky top-0 z-50">
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:bg-white focus:text-primary-800 focus:px-4 focus:py-2 focus:rounded focus:shadow-lg focus:text-sm focus:font-semibold" href="#main-content">Skip to content</a>

    <nav aria-label="Main navigation" class="px-8 py-4 flex items-center justify-between gap-6" x-data="{ openMenu: null }">

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="shrink-0" aria-label="Blue Education — home">
            <picture>
                <source srcset="{{ asset('brand/logo-sm.webp') }}" type="image/webp">
                <img src="{{ asset('brand/logo-sm.png') }}" alt="Blue Education" class="h-10 w-auto">
            </picture>
        </a>

        {{-- Desktop nav links --}}
        <div class="hidden lg:flex items-center gap-6 text-sm font-medium text-gray-600 flex-1">

            {{-- Services dropdown --}}
            <div class="relative" @click.away="openMenu = openMenu === 'services' ? null : openMenu">
                <button type="button" @click="openMenu = openMenu === 'services' ? null : 'services'" :aria-expanded="openMenu === 'services'"
                        class="flex items-center gap-1 py-1 transition-colors focus:outline-none {{ request()->routeIs('services.*') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">
                    Services
                    <x-heroicon-m-chevron-down class="w-3 h-3 mt-0.5 transition-transform" ::class="{ 'rotate-180': openMenu === 'services' }" aria-hidden="true" />
                </button>
                <div x-show="openMenu === 'services'" x-transition @click.away="openMenu = null" class="absolute top-full left-0 mt-2 w-64 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <div class="px-3 py-1 text-xs font-bold text-gray-400 uppercase tracking-wider">Education</div>
                    <a href="{{ route('services.education.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('services.education.index') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Education Overview</a>
                    <a href="{{ route('services.education.school') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.education.school') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">School Programs</a>
                    <a href="{{ route('services.education.english') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.education.english') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">English &amp; Foundation</a>
                    <a href="{{ route('services.education.vet-tafe') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.education.vet-tafe') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">VET &amp; TAFE</a>
                    <a href="{{ route('services.education.degrees') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.education.degrees') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">University Degrees</a>
                    <hr class="my-1 border-gray-100">
                    <div class="px-3 py-1 text-xs font-bold text-gray-400 uppercase tracking-wider">Migration</div>
                    <a href="{{ route('services.migration.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('services.migration.index') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Migration Overview</a>
                    <a href="{{ route('services.migration.student-visas') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.migration.student-visas') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Student Visas</a>
                    <a href="{{ route('services.migration.graduate-work') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.migration.graduate-work') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Graduate &amp; Work Visas</a>
                    <a href="{{ route('services.migration.permanent-residence') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 pl-8 {{ request()->routeIs('services.migration.permanent-residence') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Permanent Residence</a>
                    <hr class="my-1 border-gray-100">
                    <a href="{{ route('services.career') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('services.career') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Career Services</a>
                    <a href="{{ route('services.student-support') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('services.student-support') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Student Support</a>
                </div>
            </div>

            {{-- Programs dropdown --}}
            <div class="relative" @click.away="openMenu = openMenu === 'programs' ? null : openMenu">
                <button type="button" @click="openMenu = openMenu === 'programs' ? null : 'programs'" :aria-expanded="openMenu === 'programs'"
                        class="flex items-center gap-1 py-1 transition-colors focus:outline-none {{ request()->routeIs('programs.*') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">
                    Programs
                    <x-heroicon-m-chevron-down class="w-3 h-3 mt-0.5 transition-transform" ::class="{ 'rotate-180': openMenu === 'programs' }" aria-hidden="true" />
                </button>
                <div x-show="openMenu === 'programs'" x-transition @click.away="openMenu = null" class="absolute top-full left-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <a href="{{ route('programs.buddy-programme') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('programs.buddy-programme') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Buddy Programme</a>
                    <a href="{{ route('programs.study-tours') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('programs.study-tours') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Study Tours</a>
                    <a href="{{ route('programs.scsa-associate') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('programs.scsa-associate') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">SCSA Associate</a>
                    <a href="{{ route('programs.executive-internship') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('programs.executive-internship') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Executive Internship</a>
                </div>
            </div>

            <a href="{{ route('why-australia') }}" class="py-1 transition-colors focus:outline-none {{ request()->routeIs('why-australia') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">Why Australia</a>

            {{-- About dropdown --}}
            <div class="relative" @click.away="openMenu = openMenu === 'about' ? null : openMenu">
                <button type="button" @click="openMenu = openMenu === 'about' ? null : 'about'" :aria-expanded="openMenu === 'about'"
                        class="flex items-center gap-1 py-1 transition-colors focus:outline-none {{ request()->routeIs('about.*') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">
                    About
                    <x-heroicon-m-chevron-down class="w-3 h-3 mt-0.5 transition-transform" ::class="{ 'rotate-180': openMenu === 'about' }" aria-hidden="true" />
                </button>
                <div x-show="openMenu === 'about'" x-transition @click.away="openMenu = null" class="absolute top-full left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <a href="{{ route('about.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('about.index') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">About Us</a>
                    <a href="{{ route('about.team') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('about.team') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Our Team</a>
                    <a href="{{ route('about.partners') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('about.partners') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Our Partners</a>
                </div>
            </div>

            {{-- Resources dropdown --}}
            <div class="relative" @click.away="openMenu = openMenu === 'resources' ? null : openMenu">
                <button type="button" @click="openMenu = openMenu === 'resources' ? null : 'resources'" :aria-expanded="openMenu === 'resources'"
                        class="flex items-center gap-1 py-1 transition-colors focus:outline-none {{ request()->routeIs('blog.*', 'faq', 'admission-requirements') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">
                    Resources
                    <x-heroicon-m-chevron-down class="w-3 h-3 mt-0.5 transition-transform" ::class="{ 'rotate-180': openMenu === 'resources' }" aria-hidden="true" />
                </button>
                <div x-show="openMenu === 'resources'" x-transition @click.away="openMenu = null" class="absolute top-full left-0 mt-2 w-52 bg-white border border-gray-200 rounded-lg shadow-lg py-2 z-50">
                    <a href="{{ route('blog.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('blog.*') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Blog</a>
                    <a href="{{ route('faq') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('faq') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">FAQ</a>
                    <a href="{{ route('admission-requirements') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-800 {{ request()->routeIs('admission-requirements') ? 'bg-primary-50 text-primary-800 font-semibold' : '' }}">Admission Requirements</a>
                </div>
            </div>

            <a href="{{ route('fees') }}" class="py-1 transition-colors focus:outline-none {{ request()->routeIs('fees') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">Fees</a>
            <a href="{{ route('contact') }}" class="py-1 transition-colors focus:outline-none {{ request()->routeIs('contact') ? 'text-primary-800 font-semibold' : 'hover:text-primary-800 focus:text-primary-800' }}">Contact</a>
        </div>

        {{-- CTA + Hamburger --}}
        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('contact') }}" class="hidden lg:inline-flex bg-primary-500 text-white text-sm font-semibold px-5 py-2 rounded-corner hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-300">Book a Consultation</a>

            {{-- Mobile hamburger --}}
            <button type="button" x-data @click="$dispatch('toggle-mobile-nav')" aria-label="Open navigation menu"
                    class="lg:hidden p-2 rounded text-gray-600 hover:text-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-300">
                <x-heroicon-o-bars-3 class="w-6 h-6" aria-hidden="true" />
            </button>
        </div>

    </nav>

    {{-- Mobile drawer --}}
    <div x-data="{ open: false, openSection: null }" @toggle-mobile-nav.window="open = !open" x-show="open" x-transition
         class="lg:hidden border-t border-gray-200 bg-white px-6 py-4 space-y-1">

        {{-- Services accordion --}}
        <div>
            <button type="button" @click="openSection = openSection === 'services' ? null : 'services'"
                    class="flex items-center justify-between w-full py-2 text-sm font-medium {{ request()->routeIs('services.*') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">
                Services
                <x-heroicon-m-chevron-down class="w-4 h-4 transition-transform" ::class="{ 'rotate-180': openSection === 'services' }" aria-hidden="true" />
            </button>
            <div x-show="openSection === 'services'" x-transition class="pl-4 space-y-0.5 pb-2">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider py-1">Education</p>
                <a href="{{ route('services.education.index') }}" class="block py-1.5 text-sm {{ request()->routeIs('services.education.index') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Education Overview</a>
                <a href="{{ route('services.education.school') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.education.school') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">School Programs</a>
                <a href="{{ route('services.education.english') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.education.english') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">English & Foundation</a>
                <a href="{{ route('services.education.vet-tafe') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.education.vet-tafe') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">VET & TAFE</a>
                <a href="{{ route('services.education.degrees') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.education.degrees') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">University Degrees</a>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider py-1 mt-1">Migration</p>
                <a href="{{ route('services.migration.index') }}" class="block py-1.5 text-sm {{ request()->routeIs('services.migration.index') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Migration Overview</a>
                <a href="{{ route('services.migration.student-visas') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.migration.student-visas') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Student Visas</a>
                <a href="{{ route('services.migration.graduate-work') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.migration.graduate-work') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Graduate & Work Visas</a>
                <a href="{{ route('services.migration.permanent-residence') }}" class="block py-1.5 text-sm pl-3 {{ request()->routeIs('services.migration.permanent-residence') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Permanent Residence</a>
                <hr class="my-1 border-gray-100">
                <a href="{{ route('services.career') }}" class="block py-1.5 text-sm {{ request()->routeIs('services.career') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Career Services</a>
                <a href="{{ route('services.student-support') }}" class="block py-1.5 text-sm {{ request()->routeIs('services.student-support') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Student Support</a>
            </div>
        </div>

        {{-- Programs accordion --}}
        <div>
            <button type="button" @click="openSection = openSection === 'programs' ? null : 'programs'"
                    class="flex items-center justify-between w-full py-2 text-sm font-medium {{ request()->routeIs('programs.*') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">
                Programs
                <x-heroicon-m-chevron-down class="w-4 h-4 transition-transform" ::class="{ 'rotate-180': openSection === 'programs' }" aria-hidden="true" />
            </button>
            <div x-show="openSection === 'programs'" x-transition class="pl-4 space-y-0.5 pb-2">
                <a href="{{ route('programs.buddy-programme') }}" class="block py-1.5 text-sm {{ request()->routeIs('programs.buddy-programme') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Buddy Programme</a>
                <a href="{{ route('programs.study-tours') }}" class="block py-1.5 text-sm {{ request()->routeIs('programs.study-tours') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Study Tours</a>
                <a href="{{ route('programs.scsa-associate') }}" class="block py-1.5 text-sm {{ request()->routeIs('programs.scsa-associate') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">SCSA Associate</a>
                <a href="{{ route('programs.executive-internship') }}" class="block py-1.5 text-sm {{ request()->routeIs('programs.executive-internship') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Executive Internship</a>
            </div>
        </div>

        <a href="{{ route('why-australia') }}" class="block py-2 text-sm font-medium {{ request()->routeIs('why-australia') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">Why Australia</a>

        {{-- About accordion --}}
        <div>
            <button type="button" @click="openSection = openSection === 'about' ? null : 'about'"
                    class="flex items-center justify-between w-full py-2 text-sm font-medium {{ request()->routeIs('about.*') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">
                About
                <x-heroicon-m-chevron-down class="w-4 h-4 transition-transform" ::class="{ 'rotate-180': openSection === 'about' }" aria-hidden="true" />
            </button>
            <div x-show="openSection === 'about'" x-transition class="pl-4 space-y-0.5 pb-2">
                <a href="{{ route('about.index') }}" class="block py-1.5 text-sm {{ request()->routeIs('about.index') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">About Us</a>
                <a href="{{ route('about.team') }}" class="block py-1.5 text-sm {{ request()->routeIs('about.team') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Our Team</a>
                <a href="{{ route('about.partners') }}" class="block py-1.5 text-sm {{ request()->routeIs('about.partners') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Our Partners</a>
            </div>
        </div>

        {{-- Resources accordion --}}
        <div>
            <button type="button" @click="openSection = openSection === 'resources' ? null : 'resources'"
                    class="flex items-center justify-between w-full py-2 text-sm font-medium {{ request()->routeIs('blog.*', 'faq', 'admission-requirements') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">
                Resources
                <x-heroicon-m-chevron-down class="w-4 h-4 transition-transform" ::class="{ 'rotate-180': openSection === 'resources' }" aria-hidden="true" />
            </button>
            <div x-show="openSection === 'resources'" x-transition class="pl-4 space-y-0.5 pb-2">
                <a href="{{ route('blog.index') }}" class="block py-1.5 text-sm {{ request()->routeIs('blog.*') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Blog</a>
                <a href="{{ route('faq') }}" class="block py-1.5 text-sm {{ request()->routeIs('faq') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">FAQ</a>
                <a href="{{ route('admission-requirements') }}" class="block py-1.5 text-sm {{ request()->routeIs('admission-requirements') ? 'text-primary-800 font-semibold' : 'text-gray-600 hover:text-primary-800' }}">Admission Requirements</a>
            </div>
        </div>

        <a href="{{ route('fees') }}" class="block py-2 text-sm font-medium {{ request()->routeIs('fees') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">Fees</a>
        <a href="{{ route('contact') }}" class="block py-2 text-sm font-medium {{ request()->routeIs('contact') ? 'text-primary-800' : 'text-gray-700 hover:text-primary-800' }}">Contact</a>

        <div class="pt-4 pb-2">
            <a href="{{ route('contact') }}" class="block w-full text-center bg-primary-500 text-white text-sm font-semibold px-5 py-3 rounded-corner hover:bg-primary-600">Book a Consultation</a>
        </div>
    </div>

</header>
