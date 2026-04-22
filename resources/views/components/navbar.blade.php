<header
    x-data="{ open: false, scrolled: false, solutions: false }"
    @scroll.window="scrolled = window.scrollY > 40"
    @keydown.escape.window="solutions = false; open = false"
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

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center gap-0.5">

                {{-- Services dropdown --}}
                <div class="relative" x-data @click.outside="solutions = false">
                    <button
                        @click="solutions = !solutions"
                        :aria-expanded="solutions.toString()"
                        class="nav-link inline-flex items-center gap-1 px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                    >
                        Services
                        <svg :class="solutions ? 'rotate-180' : ''"
                             class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div
                        x-show="solutions"
                        x-cloak
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-1"
                        class="absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-100 py-2 z-50"
                        role="menu"
                    >
                        @php
                        $solutionItems = [
                            ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                             'label' => 'Staff Augmentation',   'desc' => 'Embed engineers in your team'],
                            ['icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                             'label' => 'Dedicated Teams',       'desc' => 'A full squad, built for you'],
                            ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                             'label' => 'Software Outsourcing',  'desc' => 'End-to-end project delivery'],
                            ['icon' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                             'label' => 'Talent Outsourcing',    'desc' => 'Scale your team on demand'],
                            ['icon' => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                             'label' => 'IT Consulting',          'desc' => 'Architecture & technical advisory'],
                            ['icon' => 'M12 18h.01M8 21h8a2 2 0 002-2v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2a2 2 0 002 2zM12 3v9m0 0l-3-3m3 3l3-3',
                             'label' => 'Product Development',   'desc' => 'From MVP to full-scale launch'],
                        ];
                        @endphp
                        @foreach ($solutionItems as $si)
                        <div class="flex items-start gap-3 px-4 py-3 hover:bg-slate-50 cursor-default" role="menuitem">
                            <div class="w-8 h-8 rounded-lg flex items-center justify-center shrink-0 mt-0.5" style="background-color:#150958;">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="{{ $si['icon'] }}"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-slate-900">{{ $si['label'] }}</p>
                                <p class="text-xs text-slate-500">{{ $si['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- About --}}
                <a href="{{ route('about') }}"
                   class="nav-link px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                >About</a>

                {{-- Blog --}}
                <a href="{{ route('blog') }}"
                   class="nav-link px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                >Blog</a>

                {{-- Careers --}}
                <a href="{{ route('careers') }}"
                   class="nav-link px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                >Careers</a>

                {{-- Refer & Earn --}}
                <a href="{{ route('refer') }}"
                   class="nav-link px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                >Refer &amp; Earn</a>

                {{-- Contact --}}
                <a href="{{ route('contact') }}"
                   class="nav-link px-4 py-2 rounded-lg text-sm text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium transition-all duration-150"
                >Contact</a>

            </div>

            {{-- CTA + Mobile Toggle --}}
            <div class="flex items-center gap-3">
                <a
                    href="{{ route('contact') }}"
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

                {{-- Solutions accordion for mobile --}}
                <div x-data="{ mSolutions: false }">
                    <button
                        @click="mSolutions = !mSolutions"
                        class="w-full flex items-center justify-between px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors"
                    >
                        Services
                        <svg :class="mSolutions ? 'rotate-180' : ''"
                             class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="mSolutions" x-cloak class="pl-4 pb-1 space-y-0.5">
                        @foreach (['Staff Augmentation','Dedicated Teams','Software Outsourcing','Talent Outsourcing','IT Consulting','Product Development'] as $sol)
                        <div class="px-3 py-2 text-sm text-slate-500 cursor-default rounded-lg hover:bg-slate-50">{{ $sol }}</div>
                        @endforeach
                    </div>
                </div>

                <a @click="open = false" href="{{ route('about') }}"
                   class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">About</a>
                <a @click="open = false" href="{{ route('blog') }}"
                   class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Blog</a>
                <a @click="open = false" href="{{ route('careers') }}"
                   class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Careers</a>
                <a @click="open = false" href="{{ route('refer') }}"
                   class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Refer &amp; Earn</a>
                <a @click="open = false" href="{{ route('contact') }}"
                   class="px-3 py-2.5 text-slate-700 hover:text-slate-900 hover:bg-slate-50 rounded-lg text-sm font-medium transition-colors">Contact</a>

                <div class="pt-2 border-t border-slate-100 mt-1">
                    <a href="{{ route('contact') }}" @click="open = false"
                       class="flex items-center justify-center w-full bg-[#150958] hover:bg-[#0e0640] text-white text-sm font-semibold px-4 py-3 rounded-lg transition-colors duration-150">
                        Hire Developers
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
