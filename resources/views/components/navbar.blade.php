<header
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 40"
    :class="scrolled ? 'shadow-sm shadow-slate-200/80' : ''"
    class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-slate-100 transition-shadow duration-300"
    role="banner"
>
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Primary navigation">
        <div class="flex items-center justify-between h-16 lg:h-18">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="flex items-center shrink-0" aria-label="Zerta — Home">
                <img src="{{ asset('assets/image/logo.svg') }}" alt="Zerta" class="h-8 w-auto" width="128" height="32">
            </a>

            {{-- Desktop Navigation Links --}}
            <div class="hidden lg:flex items-center gap-0.5">
                @foreach ([
                    ['href' => '#services',  'label' => 'Services'],
                    ['href' => '#solutions', 'label' => 'Solutions'],
                    ['href' => '#about',     'label' => 'About'],
                    ['href' => '#blog',      'label' => 'Blog'],
                    ['href' => '#contact',   'label' => 'Contact'],
                ] as $link)
                <a
                    href="{{ $link['href'] }}"
                    class="nav-link px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                >{{ $link['label'] }}</a>
                @endforeach
            </div>

            {{-- CTA + Mobile Toggle --}}
            <div class="flex items-center gap-3">
                <a
                    href="#contact"
                    class="hidden lg:inline-flex items-center gap-2 bg-[#150958] hover:bg-[#0e0640] text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors duration-150"
                >
                    Hire Developers
                </a>

                <button
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-menu"
                    aria-label="Toggle navigation menu"
                    class="lg:hidden p-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-50 transition-colors duration-150"
                >
                    <svg x-show="!open" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div
            id="mobile-menu"
            x-show="open"
            x-cloak
            x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            class="lg:hidden border-t border-slate-100 py-3"
        >
            <div class="flex flex-col gap-0.5">
                <a @click="open = false" href="#services"  class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Services</a>
                <a @click="open = false" href="#solutions" class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Solutions</a>
                <a @click="open = false" href="#about"     class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">About</a>
                <a @click="open = false" href="#blog"      class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Blog</a>
                <a @click="open = false" href="#contact"   class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Contact</a>
                <div class="pt-2 border-t border-slate-100 mt-1">
                    <a href="#contact" @click="open = false" class="flex items-center justify-center w-full bg-[#150958] hover:bg-[#0e0640] text-white text-sm font-semibold px-4 py-3 rounded-lg transition-colors duration-150">
                        Hire Developers
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
