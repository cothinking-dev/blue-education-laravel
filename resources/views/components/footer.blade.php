<footer role="contentinfo" class="bg-gray-900 text-gray-300">

    {{-- Main footer grid --}}
    <div class="max-w-7xl mx-auto px-8 lg:px-16 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">

            {{-- Brand column --}}
            <div class="lg:col-span-1">
                <picture class="block mb-4">
                    <source srcset="{{ asset('brand/logo-sm.webp') }}" type="image/webp">
                    <img src="{{ asset('brand/logo-sm.png') }}" alt="Blue Education" class="h-8 w-auto brightness-0 invert">
                </picture>
                <p class="text-gray-400 text-sm leading-relaxed mb-4">Independent education, career, and migration advice from Perth, Western Australia. Since 1998.</p>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Services</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Education Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Migration &amp; Visas</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Career Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Student Support</a></li>
                </ul>
            </div>

            {{-- Programs --}}
            <div>
                <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Programs</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Buddy Programme</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Study Tours</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">SCSA Associate</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Executive Internship</a></li>
                </ul>
            </div>

            {{-- About --}}
            <div>
                <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">About</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Team</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Our Partners</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Why Australia</a></li>
                </ul>
            </div>

            {{-- Resources + Contact --}}
            <div>
                <h3 class="text-white font-semibold text-sm mb-4 uppercase tracking-wider">Resources</h3>
                <ul class="space-y-2 text-sm mb-6">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Admission Requirements</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Fees &amp; Investment</a></li>
                </ul>
                <h3 class="text-white font-semibold text-sm mb-3 uppercase tracking-wider">Contact</h3>
                <address class="not-italic text-sm space-y-1">
                    <p class="text-gray-400">33 Barrack St, GF Unit 2</p>
                    <p class="text-gray-400">Perth WA 6000</p>
                    <p><a href="tel:+61863810030" class="text-gray-400 hover:text-white transition-colors">+61 8 6381 0030</a></p>
                    <p><a href="mailto:info@blueeducation.com.au" class="text-gray-400 hover:text-white transition-colors">info@blueeducation.com.au</a></p>
                </address>
            </div>

        </div>

        {{-- Credentials --}}
        <div class="mt-10 pt-8 border-t border-gray-800 flex flex-wrap items-center gap-4 lg:gap-8">
            <span class="text-gray-500 text-xs font-medium">Professional credentials:</span>
            <div class="flex gap-4 items-center">
                <div class="border border-gray-700 rounded px-3 py-1 text-xs text-gray-400 font-mono">QEAC</div>
                <div class="border border-gray-700 rounded px-3 py-1 text-xs text-gray-400 font-mono">Migration Alliance</div>
                <div class="border border-gray-700 rounded px-3 py-1 text-xs text-gray-400 font-mono">MIA</div>
            </div>
        </div>
    </div>

    {{-- Legal row --}}
    <div class="border-t border-gray-800 px-8 lg:px-16 py-4 flex flex-col sm:flex-row items-center justify-between gap-2 text-xs text-gray-500">
        <span>&copy; {{ date('Y') }} Blue Education Pty Ltd. All rights reserved.</span>
        <div class="flex gap-6">
            <a href="#" class="hover:text-gray-300 transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-gray-300 transition-colors">Terms of Use</a>
        </div>
    </div>

</footer>
