@extends('layouts.app')

@section('title', 'Refer & Earn — Earn up to 10% Commission | Zerta')
@section('description', 'Refer a client to Zerta and earn up to 10% commission on every successful deal. Join our referral program today.')
@section('keywords', 'refer and earn, referral program, commission, earn money, Zerta referral')

@section('content')

{{-- ============================================================
     HERO
============================================================ --}}
<section class="bg-white pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 xl:gap-24 items-center">

            {{-- Text --}}
            <div>
                <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Referral Program</p>
                <h1 class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-6">
                    Refer &amp; Earn
                </h1>
                <p class="text-lg text-slate-500 leading-relaxed mb-8 max-w-md">
                    Earn up to <strong class="text-slate-800">10% commission</strong> when you refer a client to us.
                </p>
                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors duration-150 text-sm bg-[#150958] hover:bg-[#0e0640]"
                >
                    Join the Program
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>

            {{-- Image --}}
            <div class="flex items-center justify-center">
                <div class="relative w-full max-w-lg">
                    <div class="absolute inset-0 rounded-3xl opacity-10 blur-3xl" style="background:#8dc63f;"></div>
                    <img
                        src="https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=1170"
                        alt="Refer and Earn illustration"
                        class="relative w-full rounded-3xl shadow-2xl object-cover"
                    >
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     HOW IT WORKS + STATS BAND
============================================================ --}}
<section aria-label="Commission stats" class="py-14" style="background-color:#150958;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @foreach ([
                ['stat' => '10%',    'label' => 'Commission rate'],
                ['stat' => '7 Days', 'label' => 'Payment processing'],
                ['stat' => '100%',   'label' => 'Location agnostic'],
                ['stat' => 'Free',   'label' => 'To join'],
            ] as $s)
            <div>
                <div class="text-3xl font-black text-white mb-1">{{ $s['stat'] }}</div>
                <div class="text-xs font-medium" style="color:#8dc63f;">{{ $s['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================================================
     HOW DOES THIS WORK
============================================================ --}}
<section class="bg-slate-50 py-24 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-start">

            {{-- Steps --}}
            <div>
                <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">The process</p>
                <h2 class="text-4xl font-black text-slate-900 leading-tight tracking-tight mb-10">
                    How does this<br>work exactly?
                </h2>

                @php
                $steps = [
                    [
                        'num'  => '01',
                        'title'=> 'Complete the form',
                        'desc' => 'Get on-boarded into the referral program by first completing the registration form.',
                        'link' => ['href' => route('contact'), 'label' => 'Fill the form →'],
                    ],
                    [
                        'num'  => '02',
                        'title'=> 'Review & sign documents',
                        'desc' => 'After your entries have been reviewed, we will send you legal documents to agree to our terms and conditions.',
                        'link' => null,
                    ],
                    [
                        'num'  => '03',
                        'title'=> 'Refer clients',
                        'desc' => 'Refer your friends, family or anyone that needs our services — web &amp; mobile development, cloud, API integrations, and more.',
                        'link' => null,
                    ],
                    [
                        'num'  => '04',
                        'title'=> 'Earn up to 10% commission',
                        'desc' => 'Earn up to 10% commission on the development amount paid to us. You are eligible for payment as soon as the client pays us.',
                        'link' => null,
                    ],
                    [
                        'num'  => '05',
                        'title'=> 'Get paid within 7 days',
                        'desc' => 'Your payment will be processed within 7 days of receiving payment from your client.',
                        'link' => null,
                    ],
                ];
                @endphp

                <div class="space-y-8">
                    @foreach ($steps as $step)
                    <div class="flex gap-5">
                        <div class="shrink-0 w-10 h-10 rounded-xl flex items-center justify-center font-black text-sm text-white" style="background-color:#150958;">
                            {{ $step['num'] }}
                        </div>
                        <div class="pt-1">
                            <h3 class="font-bold text-slate-900 mb-1">{{ $step['title'] }}</h3>
                            <p class="text-sm text-slate-500 leading-relaxed">{!! $step['desc'] !!}</p>
                            @if($step['link'])
                            <a href="{{ $step['link']['href'] }}" target="_blank" rel="noopener"
                               class="inline-block mt-2 text-sm font-semibold transition-colors duration-150"
                               style="color:#150958;">{{ $step['link']['label'] }}</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Earnings example card --}}
            <div class="lg:sticky lg:top-28">
                <div class="rounded-3xl p-8 lg:p-10 text-white" style="background-color:#150958;">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-6" style="background:rgba(141,198,63,0.2);">
                        <svg class="w-6 h-6" style="color:#8dc63f;" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black mb-2">Your earnings example</h3>
                    <p class="text-slate-400 text-sm mb-8 leading-relaxed">
                        Here's how much you could earn based on the project value.
                    </p>

                    <div class="space-y-4">
                        @foreach ([
                            ['project' => 'Website (₦500,000)',        'earn' => '₦50,000'],
                            ['project' => 'Mobile App (₦2,000,000)',   'earn' => '₦200,000'],
                            ['project' => 'Enterprise SaaS (₦5,000,000)', 'earn' => '₦500,000'],
                        ] as $ex)
                        <div class="flex items-center justify-between py-4 border-b border-white/10 last:border-0">
                            <span class="text-sm text-slate-300">{{ $ex['project'] }}</span>
                            <span class="font-black text-lg" style="color:#8dc63f;">{{ $ex['earn'] }}</span>
                        </div>
                        @endforeach
                    </div>

                    <p class="text-xs text-slate-400 mt-6 leading-relaxed">
                        * Based on 10% of the total development fee paid by your referred client.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     FAQs
============================================================ --}}
<section class="bg-white py-24 lg:py-32" id="faqs">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center mb-14">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Got questions?</p>
            <h2 class="text-4xl font-black text-slate-900 leading-tight tracking-tight">FAQs</h2>
        </div>

        @php
        $faqs = [
            [
                'q' => 'How does the referral program work?',
                'a' => 'Just refer any client to us who needs any of our services — Web and Mobile App Development, Website management, Cloud infrastructure setup, API integration — we build it and you get paid. We pay you up to 10% of the development fee.',
            ],
            [
                'q' => 'Who is eligible for this program?',
                'a' => 'Everyone is eligible. Whether you are an individual, a business, or a professional, you can join and start earning referral commissions.',
            ],
            [
                'q' => 'I\'m not in Nigeria — how do I join the referral program?',
                'a' => 'Irrespective of your location, you can be part of the program. To join, just mail us at <a href="mailto:info@zertahq.com" class="font-semibold underline" style="color:#150958;">info@zertahq.com</a> or fill the registration form.',
            ],
            [
                'q' => 'How much do I make as an independent referrer?',
                'a' => 'You stand a chance to earn up to 10% of the total amount your referred client agrees to pay for the product or service to be rendered. For example, if the development fee for a Mobile App is ₦2,000,000, you get paid ₦200,000 at the close of the deal.',
            ],
            [
                'q' => 'What happens if the client makes a part payment?',
                'a' => 'In a situation where the client makes a part payment, the referrer will only be entitled to up to 10% of the part payment received.',
            ],
            [
                'q' => 'What happens if the client withdraws from the contract mid-way?',
                'a' => 'Where the client withdraws from the contract mid-way, the referrer shall not be entitled to any further payment beyond what has already been processed.',
            ],
            [
                'q' => 'Can I be part of the development process as a referrer?',
                'a' => 'No. Due to the usual Non-Disclosure Agreements (NDAs) between clients and developers in this line of business, referrers are not involved in the development process.',
            ],
            [
                'q' => 'No one prays for disputes — but what if it happens?',
                'a' => 'Any dispute arising between the parties in relation to this agreement shall be amicably settled within seven (7) working days. Where the parties are unable to resolve within seven working days, such matter shall be referred to arbitration in accordance with the applicable laws.',
            ],
            [
                'q' => 'How do I start?',
                'a' => 'Fill the referral program form to get started. Once your entry is reviewed, we will reach out with the next steps.',
                'cta' => ['href' => route('contact'), 'label' => 'Fill the form →'],
            ],
        ];
        @endphp

        <div x-data="{ open: null }" class="divide-y divide-slate-100 border border-slate-100 rounded-2xl overflow-hidden">
            @foreach ($faqs as $i => $faq)
            <div>
                <button
                    @click="open = (open === {{ $i }}) ? null : {{ $i }}"
                    class="w-full flex items-center justify-between text-left px-6 py-5 hover:bg-slate-50 transition-colors duration-150 gap-4"
                    :aria-expanded="(open === {{ $i }}).toString()"
                >
                    <span class="font-semibold text-slate-900 text-sm">{{ $faq['q'] }}</span>
                    <svg
                        :class="open === {{ $i }} ? 'rotate-180' : ''"
                        class="w-4 h-4 shrink-0 text-slate-400 transition-transform duration-200"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div
                    x-show="open === {{ $i }}"
                    x-cloak
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-6 pb-6 text-sm text-slate-500 leading-relaxed"
                >
                    <p>{!! $faq['a'] !!}</p>
                    @if(isset($faq['cta']))
                    <a href="{{ $faq['cta']['href'] }}" target="_blank" rel="noopener"
                       class="inline-block mt-3 font-semibold transition-colors duration-150"
                       style="color:#150958;">{{ $faq['cta']['label'] }}</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ============================================================
     CTA BANNER
============================================================ --}}
<section class="py-20" style="background-color:#150958;">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-black text-white leading-tight mb-4">
            Ready to start earning?
        </h2>
        <p class="text-slate-400 text-base mb-8 leading-relaxed">
            Join our referral program today. It's free, it's flexible, and it works from anywhere in the world.
        </p>
        <a
            href="{{ route('contact') }}"
            class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-lg transition-colors duration-150 text-sm text-[#150958] bg-white hover:bg-slate-100"
        >
            Join the Referral Program
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>

@endsection
