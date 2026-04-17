<footer role="contentinfo" class="bg-base-100 text-base-600">

    {{-- Main footer grid --}}
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">

            {{-- Brand column --}}
            <div class="lg:col-span-1">
                <picture class="block mb-4">
                    <source srcset="{{ asset('brand/logo-sm.webp') }}" type="image/webp">
                    <img src="{{ asset('brand/logo-sm.png') }}" alt="Blue Education" class="h-8 w-auto" loading="lazy">
                </picture>
                <p class="text-base-500 text-sm leading-relaxed mb-4">Independent education, career, and migration advice from Perth, Western Australia; Since 1998.</p>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="text-base-900 font-semibold text-sm mb-4 uppercase tracking-wider">Services</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('services.education.index') }}" class="text-base-500 hover:text-primary-700 transition-colors">Education Services</a></li>
                    <li><a href="{{ route('services.migration.index') }}" class="text-base-500 hover:text-primary-700 transition-colors">Migration &amp; Visas</a></li>
                    <li><a href="{{ route('services.career') }}" class="text-base-500 hover:text-primary-700 transition-colors">Career Services</a></li>
                    <li><a href="{{ route('services.student-support') }}" class="text-base-500 hover:text-primary-700 transition-colors">Student Support</a></li>
                </ul>
            </div>

            {{-- Programmes --}}
            <div>
                <h3 class="text-base-900 font-semibold text-sm mb-4 uppercase tracking-wider">Programmes</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('programs.buddy-programme') }}" class="text-base-500 hover:text-primary-700 transition-colors">Buddy Programme</a></li>
                    <li><a href="{{ route('programs.study-tours') }}" class="text-base-500 hover:text-primary-700 transition-colors">Study Tours</a></li>
                    <li><a href="{{ route('programs.executive-internship') }}" class="text-base-500 hover:text-primary-700 transition-colors">Executive Internship</a></li>
                </ul>
            </div>

            {{-- About --}}
            <div>
                <h3 class="text-base-900 font-semibold text-sm mb-4 uppercase tracking-wider">About</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('about.index') }}" class="text-base-500 hover:text-primary-700 transition-colors">About Us</a></li>
                    <li><a href="{{ route('about.team') }}" class="text-base-500 hover:text-primary-700 transition-colors">Our Team</a></li>
                    <li><a href="{{ route('about.partners') }}" class="text-base-500 hover:text-primary-700 transition-colors">Our Partners</a></li>
                    <li><a href="{{ route('about.scsa-partnership') }}" class="text-base-500 hover:text-primary-700 transition-colors">SCSA Partnership</a></li>
                    <li><a href="{{ route('why-australia') }}" class="text-base-500 hover:text-primary-700 transition-colors">Why Australia</a></li>
                </ul>
            </div>

            {{-- Resources + Contact --}}
            <div>
                <h3 class="text-base-900 font-semibold text-sm mb-4 uppercase tracking-wider">Resources</h3>
                <ul class="space-y-2 text-sm mb-6">
                    <li><a href="{{ route('blog.index') }}" class="text-base-500 hover:text-primary-700 transition-colors">Blog</a></li>
                    <li><a href="{{ route('faq') }}" class="text-base-500 hover:text-primary-700 transition-colors">FAQ</a></li>
                    <li><a href="{{ route('admission-requirements') }}" class="text-base-500 hover:text-primary-700 transition-colors">Admission Requirements</a></li>
                    <li><a href="{{ route('fees') }}" class="text-base-500 hover:text-primary-700 transition-colors">Fees &amp; Investment</a></li>
                </ul>
                <h3 class="text-base-900 font-semibold text-sm mb-3 uppercase tracking-wider">Contact</h3>
                <address class="not-italic text-sm space-y-1">
                    <p class="text-base-500">33 Barrack St, GF Unit 2</p>
                    <p class="text-base-500">Perth WA 6000</p>
                    <p><a href="https://wa.me/{{ config('seo.organization.whatsapp') }}" target="_blank" rel="noopener noreferrer" class="text-primary-700 hover:text-primary-800 font-medium transition-colors">WhatsApp: {{ config('seo.organization.phone_mobile') }}</a></p>
                    <p><a href="tel:+61863810030" class="text-base-500 hover:text-primary-700 transition-colors">+61 8 6381 0030</a></p>
                    <p><a href="mailto:info@blueeducation.com.au" class="text-base-500 hover:text-primary-700 transition-colors">info@blueeducation.com.au</a></p>
                </address>
            </div>

        </div>

        {{-- Credentials --}}
        <div class="mt-10 pt-8 border-t border-base-200 flex flex-wrap items-center gap-4 lg:gap-8">
            <span class="text-base-500 text-xs font-medium">Professional credentials:</span>
            <div class="flex gap-8 items-center text-base-700">
                <div class="text-center">
                    <p class="text-sm font-bold tracking-wide">QEAC</p>
                    <p class="text-[10px] text-base-500 leading-tight">Qualified Education<br>Agent Counsellor</p>
                </div>
                <div class="text-center">
                    <p class="text-sm font-bold tracking-wide leading-tight">Migration<br>Alliance</p>
                    <p class="text-[10px] text-base-500 leading-tight">Professional Member</p>
                </div>
                <div class="text-center">
                    <p class="text-sm font-bold tracking-wide">MIA</p>
                    <p class="text-[10px] text-base-500 leading-tight">Migration Institute<br>of Australia</p>
                </div>
                <div class="text-center">
                    <p class="text-sm font-bold tracking-wide leading-tight">Australian Bar<br>Association</p>
                    <p class="text-[10px] text-base-500 leading-tight">Legal Practitioner Member</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Legal row --}}
    <div class="border-t border-base-200 px-8 lg:px-16 py-4 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-base-500">
        <span>&copy; {{ date('Y') }} Blue Education Pty Ltd. All rights reserved.</span>
        <div class="flex gap-6">
            <a href="{{ route('privacy') }}" class="hover:text-base-700 transition-colors">Privacy Policy</a>
            <a href="{{ route('terms') }}" class="hover:text-base-700 transition-colors">Terms of Use</a>
        </div>
    </div>

</footer>
