@extends('layouts.app')

@section('title', 'Zerta — Software Outsourcing & Dedicated Engineering Teams')
@section('description', 'Zerta delivers end-to-end software projects and embeds senior engineers into your team. From MVP to full-scale products — scoped, built, and shipped on time.')
@section('keywords', 'software outsourcing, project delivery, dedicated development teams, staff augmentation, remote engineers, MVP development, PHP, React, Laravel, Node.js')

@section('content')

{{-- ============================================================
     HERO
============================================================ --}}
<section
    id="hero"
    aria-labelledby="hero-heading"
    class="bg-white pt-24 pb-0 lg:pt-28 overflow-hidden"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            {{-- Text --}}
            <div class="pb-16 lg:pb-24">
                <p class="hero-line text-sm font-semibold tracking-wide mb-5" style="color:#8dc63f;">Software outsourcing — done right</p>

                <h1 id="hero-heading" class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-6">
                    <span class="hero-line block">We build your</span>
                    <span class="hero-line block">product.</span>
                    <span class="hero-line block text-slate-400">You keep</span>
                    <span class="hero-line block text-slate-400">the focus.</span>
                </h1>

                <p class="hero-line text-lg text-slate-500 leading-relaxed mb-10 max-w-md">
                    Zerta delivers end-to-end software projects and embeds senior engineers into your team — scoped clearly, built in sprints, and shipped on time.
                </p>

                <div class="flex flex-wrap gap-3">
                    <a
                        href="#contact"
                        class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors duration-150 text-sm bg-[#150958] hover:bg-[#0e0640]"
                    >
                        Start a project
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a
                        href="#contact"
                        class="inline-flex items-center gap-2 border border-slate-200 hover:border-slate-300 hover:bg-slate-50 text-slate-700 font-semibold px-7 py-3.5 rounded-lg transition-colors duration-150 text-sm"
                    >
                        Hire developers
                    </a>
                </div>

                {{-- Social proof strip --}}
                <div class="flex flex-wrap gap-x-8 gap-y-4 mt-12 pt-10 border-t border-slate-100">
                    <div class="reveal">
                        <span class="block text-2xl font-black text-slate-900">350+</span>
                        <span class="text-xs text-slate-400 font-medium">Projects delivered</span>
                    </div>
                    <div class="reveal" data-delay="200">
                        <span class="block text-2xl font-black text-slate-900">98%</span>
                        <span class="text-xs text-slate-400 font-medium">On-time delivery rate</span>
                    </div>
                    <div class="reveal" data-delay="400">
                        <span class="block text-2xl font-black text-slate-900">200+</span>
                        <span class="text-xs text-slate-400 font-medium">Clients worldwide</span>
                    </div>
                </div>
            </div>

            {{-- Globe Animation --}}
            <div class="flex relative self-center items-center justify-center hero-image mt-8 lg:mt-0" aria-hidden="true">
                <div class="relative flex items-center justify-center w-full">
                    {{-- Outer glow ring --}}
                    <div class="absolute rounded-full pointer-events-none"
                         style="width:100%;max-width:640px;aspect-ratio:1;background:radial-gradient(circle,rgba(141,198,63,0.09) 0%,transparent 68%);top:50%;left:50%;transform:translate(-50%,-50%);"></div>
                    <canvas id="globe-canvas" style="width:100%;max-width:520px;aspect-ratio:1;display:block;"></canvas>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SERVICES
============================================================ --}}
<section id="services" aria-labelledby="services-heading" class="bg-white py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-12 xl:gap-20">

            {{-- Sticky header --}}
            <div class="lg:col-span-4 lg:sticky lg:top-24 lg:self-start">
                <p class="reveal text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">What we offer</p>
                <h2 id="services-heading" class="reveal text-4xl font-black text-slate-900 leading-tight tracking-tight mb-5" data-delay="100">
                    Three ways to work with us
                </h2>
                <p class="reveal text-slate-500 leading-relaxed text-sm" data-delay="200">
                    Pick the model that fits your situation. Many clients start with one and switch as they grow.
                </p>
                <a href="#contact" class="inline-flex items-center gap-1.5 text-sm font-semibold text-slate-900 mt-8 hover:text-[#8dc63f] transition-colors duration-150 group">
                    Talk to our team
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            {{-- Accordion rows --}}
            <div class="lg:col-span-8">
                <div class="divide-y divide-slate-100">

                    @php
                    $services = [
                        [
                            'num'   => '01',
                            'title' => 'Staff Augmentation',
                            'desc'  => 'You run the work — we supply the people. We embed senior developers directly into your existing team. They use your tools, join your standups, and report to you. Scale up or down as the project demands.',
                            'tags'  => ['Quick to start', 'You stay in control', 'Flexible scale'],
                        ],
                        [
                            'num'   => '02',
                            'title' => 'Dedicated Teams',
                            'desc'  => 'Need more than one hire? We build you a complete engineering unit — frontend, backend, QA, and a tech lead — focused exclusively on your product. We handle HR, tooling, and retention.',
                            'tags'  => ['Full team', 'Long-term', 'We handle HR'],
                        ],
                        [
                            'num'   => '03',
                            'title' => 'Software Outsourcing',
                            'desc'  => 'Hand us a brief and we deliver working software. From MVP to production launch, our team owns delivery end-to-end. You get regular demos, agreed milestones, and no guesswork on pricing.',
                            'tags'  => ['End-to-end delivery', 'Fixed milestones', 'Transparent pricing'],
                        ],
                    ];
                    @endphp

                    @foreach ($services as $service)
                    <div x-data="{ open: @json($loop->first) }" class="py-8 group">
                        <button
                            @click="open = !open"
                            class="w-full flex items-start gap-6 text-left"
                            :aria-expanded="open.toString()"
                        >
                            <span class="text-xs font-mono text-slate-300 mt-1 shrink-0 w-6">{{ $service['num'] }}</span>
                            <h3 class="flex-1 text-xl font-bold text-slate-900 group-hover:text-[#150958] transition-colors duration-150 min-w-0">{{ $service['title'] }}</h3>
                            <svg
                                :class="open ? 'rotate-45' : ''"
                                class="w-5 h-5 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" class="pl-12">
                            <p class="text-slate-500 leading-relaxed mt-4 mb-5 text-sm">{{ $service['desc'] }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($service['tags'] as $tag)
                                <span class="text-xs font-semibold text-slate-600 bg-slate-100 px-3 py-1.5 rounded-md">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     NUMBERS BAR
============================================================ --}}
<section aria-label="Key metrics" class="py-20" style="background-color:#150958;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-white/[0.08] rounded-2xl overflow-hidden" data-stats-section>
            @php
            $numbers = [
                ['stat' => '350+',  'label' => 'Projects delivered',        'note' => 'Across 30+ industries'],
                ['stat' => '98%',   'label' => 'On-time delivery rate',      'note' => 'Industry avg is 71%'],
                ['stat' => '200+',  'label' => 'Clients worldwide',          'note' => 'From startups to enterprise'],
                ['stat' => '5 yrs','label' => 'In business',                'note' => 'Profitable from year one'],
            ];
            @endphp
            @foreach ($numbers as $n)
            <div class="bg-[#150958] p-8 lg:p-10">
                <div class="text-4xl lg:text-5xl font-black mb-2" style="color:#8dc63f;">{{ $n['stat'] }}</div>
                <div class="text-slate-300 font-semibold text-sm mb-1">{{ $n['label'] }}</div>
                <div class="text-slate-500 text-xs">{{ $n['note'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     PROCESS
============================================================ --}}
<section id="solutions" aria-labelledby="process-heading" class="bg-white py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-xl mb-16">
            <p class="reveal text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">How it works</p>
            <h2 id="process-heading" class="reveal text-4xl font-black text-slate-900 leading-tight tracking-tight" data-delay="100">
                From brief to launch in four steps
            </h2>
        </div>

        @php
        $steps = [
            [
                'label' => 'Discovery call',
                'desc'  => 'A focused 30-minute session where we learn your product goals, technical landscape, timeline, and success criteria — no generic intake forms.',
            ],
            [
                'label' => 'Scope & proposal',
                'desc'  => 'Within 48 hours we deliver a clear project scope, milestone plan, and transparent fixed-price or T&M quote. No hidden fees, no vague estimates.',
            ],
            [
                'label' => 'Build & iterate',
                'desc'  => 'Our team works in two-week sprints with live demos after each cycle. You have full visibility into progress, blockers, and what ships next.',
            ],
            [
                'label' => 'Launch & support',
                'desc'  => 'We deploy to production, run QA, and hand over full documentation. Post-launch support is included — because shipping is only half the job.',
            ],
        ];
        @endphp

        <div class="grid sm:grid-cols-2 gap-x-16 gap-y-12">
            @foreach ($steps as $step)
            <div class="reveal" data-delay="{{ ($loop->index % 2) * 150 }}">
                <div class="text-xs font-mono text-slate-300 mb-4 tracking-widest">0{{ $loop->index + 1 }}</div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $step['label'] }}</h3>
                <p class="text-slate-500 leading-relaxed text-sm">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ============================================================
     TECH STACK
============================================================ --}}
<section id="technologies" aria-labelledby="tech-heading" class="bg-slate-50 py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-12 xl:gap-20 items-start">

            <div class="lg:col-span-4">
                <p class="reveal text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Technology coverage</p>
                <h2 id="tech-heading" class="reveal text-4xl font-black text-slate-900 leading-tight tracking-tight mb-5" data-delay="100">
                    Whatever your stack, we know it.
                </h2>
                <p class="reveal text-slate-500 leading-relaxed text-sm" data-delay="200">
                    Our network is wide enough that you probably won't stump us. If a technology is in active production somewhere, we have people who work in it daily.
                </p>
            </div>

            <div class="lg:col-span-8">
                @php
                $techCategories = [
                    'Backend'       => ['PHP', 'Laravel', 'Node.js', 'Python', 'Go', 'Java', 'Rails'],
                    'Frontend'      => ['React', 'Vue', 'Angular', 'TypeScript', 'Next.js', 'Nuxt', 'Svelte'],
                    'Mobile'        => ['React Native', 'Flutter', 'Swift', 'Kotlin'],
                    'Cloud & Infra' => ['AWS', 'GCP', 'Azure', 'Docker', 'Kubernetes', 'Terraform'],
                    'Data'          => ['PostgreSQL', 'MySQL', 'MongoDB', 'Redis', 'Elasticsearch'],
                ];
                @endphp
                <div class="space-y-7">
                    @foreach ($techCategories as $category => $techs)
                    <div class="flex flex-col sm:flex-row sm:items-baseline gap-3 sm:gap-6">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest w-28 shrink-0">{{ $category }}</span>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($techs as $tech)
                            <span class="tech-badge text-sm font-medium text-slate-600 bg-white border border-slate-200 hover:border-slate-400 hover:text-slate-900 px-3 py-1.5 rounded-md cursor-default">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     TESTIMONIALS
============================================================ --}}
<section id="about" aria-labelledby="testimonials-heading" class="bg-white py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <p class="reveal text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Client stories</p>
        <h2 id="testimonials-heading" class="reveal text-4xl font-black text-slate-900 leading-tight tracking-tight mb-16" data-delay="100">
            In their words
        </h2>

        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Featured --}}
            <div class="reveal rounded-2xl p-10 lg:p-12 flex flex-col justify-between row-span-2" style="background-color:#150958;">
                <blockquote>
                    <p class="text-white text-xl leading-relaxed font-medium">
                        "We needed a Laravel specialist who could jump straight into a complex billing migration we'd been putting off for two years. Zerta sent three candidates. We interviewed two, hired one, and the migration shipped in six weeks. The developer is still with us 14 months later."
                    </p>
                </blockquote>
                <div class="flex items-center gap-4 mt-10 pt-8 border-t border-white/10">
                    <img
                        src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&w=100&q=80"
                        alt="Marcus Rivera"
                        class="w-12 h-12 rounded-full object-cover ring-2 ring-white/10 shrink-0"
                        loading="lazy" width="48" height="48"
                    >
                    <div>
                        <cite class="not-italic font-bold text-white text-sm block">Marcus Rivera</cite>
                        <span class="text-slate-400 text-xs">VP of Engineering, FinEdge Labs</span>
                    </div>
                </div>
            </div>

            {{-- Second --}}
            <div class="reveal bg-slate-50 border border-slate-100 rounded-2xl p-8 flex flex-col justify-between" data-delay="150">
                <blockquote>
                    <p class="text-slate-700 leading-relaxed text-sm">
                        "I was skeptical after two bad experiences with other agencies. Zerta is different — they match on working style, not just a skill checklist. Our dedicated team has been together 18 months and operates like a close-knit in-office group."
                    </p>
                </blockquote>
                <div class="flex items-center gap-3 mt-6 pt-6 border-t border-slate-200">
                    <img
                        src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&w=100&q=80"
                        alt="Sarah Chen"
                        class="w-10 h-10 rounded-full object-cover shrink-0"
                        loading="lazy" width="40" height="40"
                    >
                    <div>
                        <cite class="not-italic font-bold text-slate-900 text-sm block">Sarah Chen</cite>
                        <span class="text-slate-400 text-xs">CTO, Buildify AI</span>
                    </div>
                </div>
            </div>

            {{-- Third --}}
            <div class="reveal bg-slate-50 border border-slate-100 rounded-2xl p-8 flex flex-col justify-between" data-delay="300">
                <blockquote>
                    <p class="text-slate-700 leading-relaxed text-sm">
                        "We outsourced our entire mobile rewrite — React Native, new design system, three third-party integrations. Shipped on time, within the quoted budget. I've referred two other founders since."
                    </p>
                </blockquote>
                <div class="flex items-center gap-3 mt-6 pt-6 border-t border-slate-200">
                    <img
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&w=100&q=80"
                        alt="James O'Brien"
                        class="w-10 h-10 rounded-full object-cover shrink-0"
                        loading="lazy" width="40" height="40"
                    >
                    <div>
                        <cite class="not-italic font-bold text-slate-900 text-sm block">James O'Brien</cite>
                        <span class="text-slate-400 text-xs">Founder, ShopLocal</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     CTA
============================================================ --}}
<section id="contact" aria-labelledby="cta-heading" class="py-24 lg:py-28" style="background-color:#150958;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">

            <div class="reveal">
                <h2 id="cta-heading" class="text-4xl sm:text-5xl font-black text-white leading-tight tracking-tight mb-5">
                    Ready to ship?<br>Let's scope it.
                </h2>
                <p class="reveal text-slate-300 text-lg leading-relaxed max-w-md" data-delay="150">
                    Book a free 30-minute discovery call. We'll map out your project and give you a clear scope and budget — no obligation.
                </p>
            </div>

            <div class="reveal flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4 lg:justify-end" data-delay="200">
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center gap-2 bg-white text-slate-900 hover:bg-slate-50 font-bold px-8 py-4 rounded-xl transition-colors duration-150 text-sm"
                >
                    Start a project
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a
                    href="#contact"
                    class="inline-flex items-center justify-center border-2 border-white/30 hover:border-white/60 text-white font-bold px-8 py-4 rounded-xl transition-colors duration-150 text-sm"
                >
                    Hire developers
                </a>
            </div>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
(function () {
    'use strict';
    var canvas = document.getElementById('globe-canvas');
    if (!canvas) return;

    var SIZE = canvas.offsetWidth || 480;
    var DPR  = window.devicePixelRatio || 1;
    canvas.width  = SIZE * DPR;
    canvas.height = SIZE * DPR;
    var ctx = canvas.getContext('2d');
    ctx.scale(DPR, DPR);

    var cx = SIZE / 2, cy = SIZE / 2;
    var R         = Math.round(SIZE * 0.318);
    var CARD_DIST = R * 1.30;
    var AR        = SIZE < 400 ? 13 : 20;
    var LFONT     = SIZE < 400 ?  7 :  9.5;
    var DOT_R     = Math.max(1.5, SIZE * 0.0054);

    /* ── simplified land detection ── */
    function isLand(lat, lng) {
        while (lng >  180) lng -= 360;
        while (lng < -180) lng += 360;
        if (lat > 24  && lat < 70  && lng > -130 && lng < -52)  return true; /* N America      */
        if (lat > 14  && lat < 24  && lng > -118 && lng < -87)  return true; /* Mexico         */
        if (lat > 7   && lat < 21  && lng > -92  && lng < -77)  return true; /* C America      */
        if (lat > 64  && lat < 84  && lng > -57  && lng < -17)  return true; /* Greenland      */
        if (lat > -5  && lat < 12  && lng > -80  && lng < -60)  return true; /* N S.America    */
        if (lat > -35 && lat < -5  && lng > -76  && lng < -34)  return true; /* S.America      */
        if (lat > -56 && lat < -35 && lng > -76  && lng < -64)  return true; /* S.Cone         */
        if (lat > 35  && lat < 72  && lng > -11  && lng < 40)   return true; /* Europe         */
        if (lat > 28  && lat < 38  && lng > -6   && lng < 37)   return true; /* N Africa       */
        if (lat > -5  && lat < 28  && lng > -18  && lng < 52)   return true; /* W/C Africa     */
        if (lat > -35 && lat < -5  && lng > 12   && lng < 40)   return true; /* S Africa       */
        if (lat > -26 && lat < -12 && lng > 43   && lng < 51)   return true; /* Madagascar     */
        if (lat > 12  && lat < 38  && lng > 34   && lng < 62)   return true; /* Middle East    */
        if (lat > 48  && lat < 78  && lng > 30   && lng < 170)  return true; /* Russia         */
        if (lat > 5   && lat < 38  && lng > 60   && lng < 100)  return true; /* S Asia         */
        if (lat > -8  && lat < 38  && lng > 95   && lng < 145)  return true; /* SE/E Asia      */
        if (lat > 30  && lat < 46  && lng > 129  && lng < 146)  return true; /* Japan          */
        if (lat > -44 && lat < -10 && lng > 113  && lng < 154)  return true; /* Australia      */
        if (lat > -47 && lat < -34 && lng > 166  && lng < 179)  return true; /* New Zealand    */
        return false;
    }

    /* Pre-compute land dot positions */
    var landDots = [];
    var STEP = 4;
    for (var la = -85; la <= 85; la += STEP) {
        var cosL    = Math.max(0.12, Math.abs(Math.cos(la * Math.PI / 180)));
        var lngStep = Math.min(Math.max(STEP / cosL, STEP), 18);
        for (var lo = -180; lo < 180; lo += lngStep) {
            if (isLand(la, lo)) landDots.push([la, lo]);
        }
    }

    /* 10 devs spread ~45° apart in longitude so ≥2 are always visible */
    var devs = [
        { lat: 37.8,  lng: -122.4, role: 'React Developer',  initials: 'KM', color: '#8dc63f' }, /* San Francisco  */
        { lat: 40.7,  lng:  -74.0, role: 'Node.js Engineer',  initials: 'LT', color: '#150958' }, /* New York       */
        { lat: -23.5, lng:  -46.6, role: 'Python Developer',  initials: 'CF', color: '#150958' }, /* São Paulo      */
        { lat: 51.5,  lng:   -0.1, role: 'Java Engineer',     initials: 'JW', color: '#8dc63f' }, /* London         */
        { lat:  6.5,  lng:    3.4, role: 'Frontend Dev',      initials: 'AO', color: '#150958' }, /* Lagos          */
        { lat: -1.3,  lng:   36.8, role: 'Angular Developer', initials: 'WK', color: '#8dc63f' }, /* Nairobi        */
        { lat: 25.2,  lng:   55.3, role: '.NET Developer',    initials: 'SA', color: '#150958' }, /* Dubai          */
        { lat: 19.1,  lng:   72.9, role: 'Flutter Developer', initials: 'AR', color: '#8dc63f' }, /* Mumbai         */
        { lat:  1.4,  lng:  103.8, role: 'DevOps Engineer',   initials: 'HL', color: '#150958' }, /* Singapore      */
        { lat: 37.6,  lng:  126.9, role: 'Vue.js Developer',  initials: 'YT', color: '#8dc63f' }, /* Seoul          */
    ];

    var rotation = 0.12; /* start with Atlantic facing */

    function toRad(d) { return d * Math.PI / 180; }

    function project(lat, lng) {
        var phi = toRad(90 - lat);
        var th  = toRad(lng) + rotation;
        var sp  = Math.sin(phi);
        return {
            x: cx + R * sp * Math.cos(th),
            y: cy - R * Math.cos(phi),
            z:      R * sp * Math.sin(th)
        };
    }

    /* Rounded-rect path helper (no ctx.roundRect needed) */
    function rRect(x, y, w, h, r) {
        ctx.beginPath();
        ctx.moveTo(x + r, y);
        ctx.lineTo(x + w - r, y);
        ctx.quadraticCurveTo(x + w, y, x + w, y + r);
        ctx.lineTo(x + w, y + h - r);
        ctx.quadraticCurveTo(x + w, y + h, x + w - r, y + h);
        ctx.lineTo(x + r, y + h);
        ctx.quadraticCurveTo(x, y + h, x, y + h - r);
        ctx.lineTo(x, y + r);
        ctx.quadraticCurveTo(x, y, x + r, y);
        ctx.closePath();
    }

    function drawFrame() {
        ctx.clearRect(0, 0, SIZE, SIZE);

        /* ── Ocean sphere (very light, almost white) ── */
        var ocean = ctx.createRadialGradient(cx - R * 0.18, cy - R * 0.18, R * 0.06, cx, cy, R);
        ocean.addColorStop(0,    '#f4fbff');
        ocean.addColorStop(0.55, '#e6f4fd');
        ocean.addColorStop(1,    '#cce6f9');
        ctx.beginPath();
        ctx.arc(cx, cy, R, 0, Math.PI * 2);
        ctx.fillStyle = ocean;
        ctx.fill();

        /* ── Land dots (clipped to sphere) ── */
        ctx.save();
        ctx.beginPath();
        ctx.arc(cx, cy, R - 0.5, 0, Math.PI * 2);
        ctx.clip();

        for (var i = 0; i < landDots.length; i++) {
            var p = project(landDots[i][0], landDots[i][1]);
            if (p.z < 0) continue;
            var depth = p.z / R; /* 0..1 */

            /* Alternate brand green / dark brand-green by grid cell */
            var chk = ((landDots[i][0] / 4 | 0) + (landDots[i][1] / 4 | 0)) & 1;
            /* Brand green: #8dc63f = rgb(141,198,63)  Dark variant: rgb(98,138,44) */
            var dotColor = chk === 0
                ? 'rgba(141,198,63,' + (0.55 + 0.45 * depth) + ')'
                : 'rgba(98,138,44,'  + (0.50 + 0.50 * depth) + ')';

            ctx.beginPath();
            ctx.arc(p.x, p.y, 2.7, 0, Math.PI * 2);
            ctx.fillStyle = dotColor;
            ctx.fill();
        }
        ctx.restore();

        /* ── Sphere rim ── */
        ctx.beginPath();
        ctx.arc(cx, cy, R, 0, Math.PI * 2);
        ctx.strokeStyle = 'rgba(141,198,63,0.22)';
        ctx.lineWidth = 1.5;
        ctx.stroke();

        /* ── Highlight sheen ── */
        var sh = ctx.createRadialGradient(cx - R * 0.38, cy - R * 0.35, R * 0.03, cx, cy, R);
        sh.addColorStop(0,    'rgba(255,255,255,0.32)');
        sh.addColorStop(0.45, 'rgba(255,255,255,0.06)');
        sh.addColorStop(1,    'rgba(0,0,60,0.04)');
        ctx.beginPath();
        ctx.arc(cx, cy, R, 0, Math.PI * 2);
        ctx.fillStyle = sh;
        ctx.fill();

        /* ── Developer hub dots + cards ── */
        var now = performance.now() / 1000;

        /* Collect all front-facing devs, sort deepest-first; show cards for top 3 */
        var visible = [];
        for (var j = 0; j < devs.length; j++) {
            var hp = project(devs[j].lat, devs[j].lng);
            if (hp.z > 5) visible.push({ dev: devs[j], hp: hp });
        }
        visible.sort(function (a, b) { return b.hp.z - a.hp.z; });

        /* ── Draw hub dots for every visible dev ── */
        for (var k = 0; k < visible.length; k++) {
            var v     = visible[k];
            var hpk   = v.hp;
            var pulse = 0.5 + 0.5 * Math.sin(now * 2.4 + k * 1.1);
            var fade  = Math.min(1, (hpk.z - 5) / (R * 0.3));

            ctx.beginPath();
            ctx.arc(hpk.x, hpk.y, DOT_R * 1.2 + 5 * pulse, 0, Math.PI * 2);
            ctx.strokeStyle = 'rgba(141,198,63,' + (0.40 * (1 - pulse) * fade) + ')';
            ctx.lineWidth = 1;
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(hpk.x, hpk.y, DOT_R * 1.6, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(21,9,88,' + fade + ')';
            ctx.fill();
            ctx.beginPath();
            ctx.arc(hpk.x, hpk.y, DOT_R * 0.72, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(141,198,63,' + fade + ')';
            ctx.fill();
        }

        /* ── Draw cards for top 3 (always at least 2 since devs span all longitudes) ── */
        var cardCount = Math.min(3, visible.length);
        for (var m = 0; m < cardCount; m++) {
            var vc   = visible[m];
            var hpc  = vc.hp;
            var dev  = vc.dev;
            var fade2 = Math.min(1, (hpc.z - 5) / (R * 0.3));

            /* Radial card position – naturally avoids overlap */
            var dir   = Math.atan2(hpc.y - cy, hpc.x - cx);
            var cardX = cx + Math.cos(dir) * CARD_DIST;
            var cardY = cy + Math.sin(dir) * CARD_DIST;

            /* ── Curved connecting line ── */
            ctx.save();
            ctx.globalAlpha = 0.60 * fade2;
            ctx.beginPath();
            ctx.moveTo(hpc.x, hpc.y);
            var ddx = cardX - hpc.x, ddy = cardY - hpc.y;
            var mx  = (hpc.x + cardX) / 2;
            var my  = (hpc.y + cardY) / 2;
            ctx.quadraticCurveTo(mx - ddy * 0.18, my + ddx * 0.18, cardX, cardY);
            ctx.strokeStyle = 'rgba(21,9,88,0.65)';
            ctx.lineWidth   = 1.2;
            ctx.stroke();
            ctx.restore();

            /* ── Avatar ── */
            ctx.globalAlpha = fade2;

            ctx.beginPath();
            ctx.arc(cardX, cardY, AR + 2.5, 0, Math.PI * 2);
            ctx.fillStyle = '#ffffff';
            ctx.fill();

            ctx.beginPath();
            ctx.arc(cardX, cardY, AR, 0, Math.PI * 2);
            ctx.fillStyle = dev.color;
            ctx.fill();

            ctx.fillStyle    = '#ffffff';
            ctx.font         = 'bold ' + Math.round(AR * 0.53) + 'px Inter,system-ui,sans-serif';
            ctx.textAlign    = 'center';
            ctx.textBaseline = 'middle';
            ctx.fillText(dev.initials, cardX, cardY);

            /* ── Role label pill ── */
            ctx.font = LFONT + 'px Inter,system-ui,sans-serif';
            var lw  = ctx.measureText(dev.role).width + 12;
            var lh  = LFONT + 7;
            var lx  = cardX - lw / 2;
            var ly  = cardY + AR + 4;

            rRect(lx, ly, lw, lh, 4);
            ctx.fillStyle   = 'rgba(255,255,255,0.97)';
            ctx.fill();
            ctx.strokeStyle = 'rgba(0,0,0,0.09)';
            ctx.lineWidth   = 0.8;
            ctx.stroke();

            ctx.fillStyle    = 'rgba(21,9,88,0.88)';
            ctx.textBaseline = 'top';
            ctx.fillText(dev.role, cardX, ly + 3);

            ctx.globalAlpha = 1;
        }

        rotation += 0.003;
        requestAnimationFrame(drawFrame);
    }

    drawFrame();
})();
</script>
@endpush
