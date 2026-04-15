@extends('layouts.app')

@section('title', 'About Zerta Technology — Who We Are')
@section('description', 'Zerta Technology is a Software Development and Talent Outsourcing company founded in 2022 in Lagos, Nigeria. We help businesses turn ideas into powerful, scalable digital products.')

@section('content')

{{-- PAGE HERO --}}
<section class="bg-white pt-32 pb-20 lg:pt-40 lg:pb-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Who we are</p>
            <h1 class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-6">
                We don't just build software —<br>
                <span class="text-slate-400">we deliver outcomes.</span>
            </h1>
            <p class="text-lg text-slate-500 leading-relaxed max-w-xl">
                Zerta Technology is a forward-thinking Software Development and Talent Outsourcing company founded in 2022 in Lagos, Nigeria. Our mission is simple: help businesses turn ideas into powerful, scalable digital products — without the usual friction, delays, or inflated costs.
            </p>
            <p class="text-lg text-slate-500 leading-relaxed max-w-xl mt-4">
                We exist for founders, startups, and organisations who want more than promises. They want working products.
            </p>
        </div>
    </div>
</section>

{{-- WHAT WE DO --}}
<section class="bg-slate-50 py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center">
            <div>
                <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">What we do</p>
                <h2 class="text-4xl font-black text-slate-900 leading-tight tracking-tight mb-6">
                    At Zerta, execution is everything.
                </h2>
                <p class="text-slate-500 leading-relaxed mb-4">
                    Hand us a brief — and we deliver working software. From early-stage MVPs to full-scale production systems, our team takes complete ownership of the delivery process from start to finish.
                </p>
                <p class="text-slate-500 leading-relaxed mb-8">We combine product thinking, engineering excellence, and top-tier outsourced talent to build solutions that actually work in the real world.</p>
            </div>
            <div class="grid grid-cols-2 gap-6">
                @foreach ([
                    ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'Product thinking', 'desc' => 'We approach every brief as product owners — understanding goals before writing a single line of code.'],
                    ['icon' => 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4', 'title' => 'Engineering excellence', 'desc' => 'Senior engineers across every modern stack, delivering clean, maintainable, production-ready code.'],
                    ['icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z', 'title' => 'Top-tier talent', 'desc' => 'Our outsourced talent network means you always get the right people — matched to your project and culture.'],
                    ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Real-world results', 'desc' => 'From MVP to production, we own delivery end-to-end and don\'t stop until the product ships.'],
                ] as $v)
                <div class="bg-white rounded-2xl p-6 border border-slate-100">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background-color:#150958;">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $v['icon'] }}"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 text-sm mb-2">{{ $v['title'] }}</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">{{ $v['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- HOW WE WORK --}}
<section class="bg-white py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mb-16">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">How we work</p>
            <h2 class="text-4xl font-black text-slate-900 leading-tight tracking-tight">
                We've removed the guesswork from software development.
            </h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach ([
                [
                    'icon'  => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7',
                    'title' => 'End-to-End Ownership',
                    'desc'  => 'From ideation to deployment, we manage the full lifecycle so you don\'t have to juggle multiple teams. One engagement, one point of accountability.'
                ],
                [
                    'icon'  => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                    'title' => 'Transparent Process',
                    'desc'  => 'Regular demos, clearly defined milestones, and full visibility into progress. No black boxes, no surprises — just a clear view of where things stand at every stage.'
                ],
                [
                    'icon'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'title' => 'Predictable Pricing',
                    'desc'  => 'No hidden fees. No surprises. Just clear, agreed costs from the start — so you can plan with confidence and stay in control of your budget.'
                ],
            ] as $item)
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-6" style="background-color:#150958;">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="{{ $item['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-3">{{ $item['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- STATS --}}
<section class="py-20" style="background-color:#150958;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-white/[0.08] rounded-2xl overflow-hidden">
            @foreach ([
                ['stat' => '2022',  'label' => 'Year founded'],
                ['stat' => '350+',  'label' => 'Projects delivered'],
                ['stat' => '200+',  'label' => 'Clients worldwide'],
                ['stat' => '40+',   'label' => 'Countries in our network'],
            ] as $s)
            <div class="bg-[#150958] p-8 lg:p-10">
                <div class="text-4xl lg:text-5xl font-black mb-2" style="color:#8dc63f;">{{ $s['stat'] }}</div>
                <div class="text-slate-300 font-semibold text-sm">{{ $s['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 lg:py-24" style="background-color:#150958;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-black text-white mb-5">Want to work together?</h2>
        <p class="text-slate-300 mb-8 max-w-md mx-auto">Tell us about your project and we'll get back to you within one business day.</p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-white text-slate-900 font-bold px-8 py-4 rounded-xl hover:bg-slate-50 transition-colors duration-150 text-sm">
            Start the conversation
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

@endsection
