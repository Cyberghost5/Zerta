@extends('layouts.app')

@section('title', 'Zerta — Hire Senior Remote Developers')
@section('description', 'Find and hire experienced remote developers — for staff augmentation, dedicated teams, or full project outsourcing. Matched to your stack in days, not months.')
@section('keywords', 'hire remote developers, staff augmentation, dedicated development teams, software outsourcing, remote engineers, PHP, React, Laravel, Node.js')

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
                <p class="hero-line text-sm font-semibold tracking-wide mb-5" style="color:#8dc63f;">Remote engineering — without the headache</p>

                <h1 id="hero-heading" class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-6">
                    <span class="hero-line block">Good engineers</span>
                    <span class="hero-line block">are hard to find.</span>
                    <span class="hero-line block text-slate-400">We've already</span>
                    <span class="hero-line block text-slate-400">found them.</span>
                </h1>

                <p class="hero-line text-lg text-slate-500 leading-relaxed mb-10 max-w-md">
                    Zerta places senior, battle-tested developers into your team — in days. Whether you need one specialist or a full squad, we handle the search, vetting, and matching.
                </p>

                <div class="flex flex-wrap gap-3">
                    <a
                        href="#contact"
                        class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors duration-150 text-sm bg-[#150958] hover:bg-[#0e0640]"
                    >
                        Schedule a free call
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a
                        href="#services"
                        class="inline-flex items-center gap-2 border border-slate-200 hover:border-slate-300 hover:bg-slate-50 text-slate-700 font-semibold px-7 py-3.5 rounded-lg transition-colors duration-150 text-sm"
                    >
                        See how it works
                    </a>
                </div>

                {{-- Social proof strip --}}
                <div class="flex flex-wrap gap-x-8 gap-y-4 mt-12 pt-10 border-t border-slate-100">
                    <div class="reveal">
                        <span class="block text-2xl font-black text-slate-900">500+</span>
                        <span class="text-xs text-slate-400 font-medium">Companies served</span>
                    </div>
                    <div class="reveal" data-delay="200">
                        <span class="block text-2xl font-black text-slate-900">72 hrs</span>
                        <span class="text-xs text-slate-400 font-medium">Average first match</span>
                    </div>
                    <div class="reveal" data-delay="400">
                        <span class="block text-2xl font-black text-slate-900">94%</span>
                        <span class="text-xs text-slate-400 font-medium">Long-term retention rate</span>
                    </div>
                </div>
            </div>

            {{-- Image --}}
            <div class="hidden lg:block relative self-end hero-image" aria-hidden="true">
                <div class="absolute inset-x-8 top-8 bottom-0 bg-slate-100 rounded-t-2xl"></div>
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&w=800&q=80"
                        alt="Developers collaborating around a laptop"
                        class="relative w-full rounded-t-2xl object-cover object-top"
                        style="max-height: 500px;"
                        loading="eager"
                        width="800"
                        height="500"
                    >
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     TRUSTED BY
============================================================ --}}
<section id="trusted-by" aria-label="Companies that trust Zerta" class="border-y border-slate-100 bg-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-center gap-6 sm:gap-12">
            <p class="text-xs font-semibold text-slate-400 uppercase tracking-widest shrink-0">Used by teams at</p>
            <div class="flex flex-wrap items-center gap-x-8 gap-y-3">
                @foreach (['Shopify', 'Stripe', 'HubSpot', 'Atlassian', 'Twilio', 'Salesforce', 'Slack'] as $brand)
                <span class="text-base font-bold text-slate-300 hover:text-slate-500 transition-colors duration-200 cursor-default select-none">{{ $brand }}</span>
                @endforeach
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
                ['stat' => '5,000+', 'label' => 'Engineers in our network', 'note' => 'Across 40+ countries'],
                ['stat' => '72 hrs', 'label' => 'Median time to first match', 'note' => 'Faster than any recruiter'],
                ['stat' => '94%',    'label' => 'Retention after 12 months', 'note' => 'Industry avg is 68%'],
                ['stat' => '11 yrs', 'label' => 'In business', 'note' => 'Profitable from year one'],
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
                From brief to boarded in four steps
            </h2>
        </div>

        @php
        $steps = [
            [
                'label' => 'Discovery call',
                'desc'  => 'A 30-minute conversation. We ask about your stack, your team, and the kind of engineer you actually need — not just a job spec.',
            ],
            [
                'label' => 'Candidate shortlist',
                'desc'  => 'Within 24–48 hours we send you three to five profiles. Each includes a technical summary, relevant projects, and our honest assessment.',
            ],
            [
                'label' => 'You interview, you decide',
                'desc'  => "Interview as many candidates as you like. If none are right, we go back and search again. You don't pay until you hire.",
            ],
            [
                'label' => 'Onboard and start shipping',
                'desc'  => 'Once you\'ve chosen, we handle contracts and time-zone coordination. Most developers are productive within the first week.',
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
                    Ready to hire?<br>Let's talk.
                </h2>
                <p class="reveal text-slate-300 text-lg leading-relaxed max-w-md" data-delay="150">
                    Book a free 30-minute call. No sales pitch — just a conversation about what you need and whether we're the right fit.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4 lg:justify-end">
                <a
                    href="mailto:hello@zerta.io"
                    class="inline-flex items-center justify-center gap-2 bg-white text-slate-900 hover:bg-slate-50 font-bold px-8 py-4 rounded-xl transition-colors duration-150 text-sm"
                >
                    Book a call
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a
                    href="#services"
                    class="inline-flex items-center justify-center border-2 border-white/30 hover:border-white/60 text-white font-bold px-8 py-4 rounded-xl transition-colors duration-150 text-sm"
                >
                    View services
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
