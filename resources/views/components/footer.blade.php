<footer class="bg-[#150958] text-slate-400" role="contentinfo">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-white/10">

            {{-- Brand Column --}}
            <div class="lg:col-span-1 sm:col-span-2">
                <a href="{{ url('/') }}" class="inline-block mb-6" aria-label="Zerta">
                    <div class="bg-white rounded-lg px-3 py-2 inline-flex">
                        <img src="{{ asset('assets/image/logo.svg') }}" alt="Zerta" class="h-7 w-auto" width="112" height="28">
                    </div>
                </a>
                <p class="text-sm leading-relaxed mb-6 max-w-xs">
                    We deliver software projects end-to-end and embed senior engineers into growing teams — scoped clearly, shipped on time.
                </p>
                <div class="flex items-center gap-3">
                    <a href="http://linkedin.com/company/zertatechnology" target="_blank" rel="noopener" aria-label="LinkedIn" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center text-slate-400 hover:text-white transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 0H5C2.239 0 0 2.239 0 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5V5c0-2.761-2.238-5-5-5zM8 19H5V8h3v11zM6.5 6.732c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zM20 19h-3v-5.604c0-3.368-4-3.113-4 0V19h-3V8h3v1.765c1.396-2.586 7-2.777 7 2.476V19z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/ZertaHQ" target="_blank" rel="noopener" aria-label="Twitter / X" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center text-slate-400 hover:text-white transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/ZertaHQ" target="_blank" rel="noopener" aria-label="GitHub" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-white/20 flex items-center justify-center text-slate-400 hover:text-white transition-all duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="text-white font-semibold text-xs uppercase tracking-widest mb-5">Services</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">Staff Augmentation</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">Dedicated Teams</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">Talent Outsourcing</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">IT Consulting</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">Product Development</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div>
                <h3 class="text-white font-semibold text-xs uppercase tracking-widest mb-5">Company</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('about') }}"   class="hover:text-white transition-colors duration-200">About Us</a></li>
                    <li><a href="{{ route('careers') }}" class="hover:text-white transition-colors duration-200">Careers</a></li>
                    <li><a href="{{ route('blog') }}"    class="hover:text-white transition-colors duration-200">Blog</a></li>
                    <li><a href="{{ route('press') }}"   class="hover:text-white transition-colors duration-200">Press</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors duration-200">Contact</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="text-white font-semibold text-xs uppercase tracking-widest mb-5">Get in Touch</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#8dc63f] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:zertahq@gmail.com" class="hover:text-white transition-colors duration-200">zertahq@gmail.com</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#8dc63f] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <a href="tel:+2347013453936" class="hover:text-white transition-colors duration-200">+234 701 345 3936</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#8dc63f] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Lagos, Nigeria &amp; Remote</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-4 h-4 text-[#8dc63f] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <a href="https://calendly.com/zertahq/30min" target="_blank" rel="noopener" class="hover:text-white transition-colors duration-200">Book a 30-min call</a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-8 text-sm">
            <p>&copy; {{ date('Y') }} Zerta Inc. All rights reserved.</p>
            <nav class="flex items-center gap-6" aria-label="Legal navigation">
                <a href="{{ route('privacy') }}" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
                <a href="{{ route('terms') }}"   class="hover:text-white transition-colors duration-200">Terms of Service</a>
                <a href="{{ route('cookies') }}" class="hover:text-white transition-colors duration-200">Cookie Policy</a>
            </nav>
        </div>

    </div>
</footer>
