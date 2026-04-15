@extends('layouts.app')

@section('title', 'Press — Zerta in the News')
@section('description', 'Press releases, media coverage, and resources for journalists covering Zerta.')

@section('content')

{{-- PAGE HERO --}}
<section class="bg-white pt-32 pb-16 lg:pt-40 lg:pb-20 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Press & media</p>
            <h1 class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-5">
                Zerta in<br>
                <span class="text-slate-400">the news.</span>
            </h1>
            <p class="text-lg text-slate-500 leading-relaxed">
                Media enquiries? Reach us at
                <a href="mailto:zertahq@gmail.com" class="font-semibold hover:underline" style="color:#150958;">zertahq@gmail.com</a>.
                We typically respond within 4 hours on business days.
            </p>
        </div>
    </div>
</section>

{{-- PRESS COVERAGE --}}
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <h2 class="text-2xl font-black text-slate-900 mb-10">Recent coverage</h2>

        @php
        $articles = [
            ['pub' => 'TechCrunch',      'title' => 'Zerta raises Series B to expand software outsourcing beyond Silicon Valley', 'date' => 'Mar 2026', 'url' => '#'],
            ['pub' => 'Forbes',          'title' => 'The 10 outsourcing firms redefining how startups scale their engineering',    'date' => 'Feb 2026', 'url' => '#'],
            ['pub' => 'The Next Web',    'title' => 'Why more CTOs are choosing project outsourcing over full-time hires',         'date' => 'Jan 2026', 'url' => '#'],
            ['pub' => 'VentureBeat',     'title' => 'Zerta\'s talent model: a closer look at their 98% on-time delivery claim',   'date' => 'Dec 2025', 'url' => '#'],
            ['pub' => 'Wired',           'title' => 'The rise of the outsourced product team — and what it means for work',       'date' => 'Nov 2025', 'url' => '#'],
            ['pub' => 'Business Insider','title' => 'Zerta reaches $50M ARR without a single VC dollar in its first decade',       'date' => 'Sep 2025', 'url' => '#'],
        ];
        @endphp

        <div class="divide-y divide-slate-100">
            @foreach ($articles as $a)
            <a href="{{ $a['url'] }}" class="flex items-start justify-between gap-8 py-6 group hover:bg-slate-50 -mx-4 px-4 rounded-xl transition-colors duration-150">
                <div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest block mb-2">{{ $a['pub'] }}</span>
                    <h3 class="font-semibold text-slate-800 group-hover:text-[#150958] transition-colors leading-snug">{{ $a['title'] }}</h3>
                </div>
                <div class="shrink-0 flex items-center gap-3 text-slate-400 text-sm mt-1">
                    <span class="hidden sm:inline">{{ $a['date'] }}</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </div>
            </a>
            @endforeach
        </div>

    </div>
</section>

{{-- PRESS RELEASES --}}
<section class="bg-slate-50 py-20 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-black text-slate-900 mb-10">Press releases</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ([
                ['date' => 'March 2026',    'title' => 'Zerta closes $22M Series B led by Horizon Ventures'],
                ['date' => 'January 2026',  'title' => 'Zerta expands into APAC with new offices in Singapore and Sydney'],
                ['date' => 'October 2025',  'title' => 'Zerta launches the Project Delivery Guarantee — on time or your next sprint is free'],
                ['date' => 'June 2025',     'title' => 'Zerta surpasses 350 delivered projects across 30 industries'],
                ['date' => 'February 2025', 'title' => 'Zerta partners with GitHub to offer co-pilot tooling to all dedicated teams'],
                ['date' => 'September 2024','title' => 'Zerta recognised in the Gartner Magic Quadrant for IT Outsourcing Services'],
            ] as $pr)
            <div class="bg-white rounded-2xl p-6 border border-slate-100">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest block mb-3">{{ $pr['date'] }}</span>
                <h3 class="font-bold text-slate-900 leading-snug mb-4">{{ $pr['title'] }}</h3>
                <a href="#" class="text-sm font-semibold hover:underline" style="color:#150958;">Read release &rarr;</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- MEDIA KIT --}}
<section class="py-20 border-t border-slate-100 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900 mb-4">Media kit</h2>
                <p class="text-slate-500 leading-relaxed mb-8">
                    Logos, brand guidelines, executive headshots, and company fact sheet — everything you need in one download.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3.5 rounded-lg transition-colors duration-150 text-sm" style="background-color:#150958;" onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
                    Download media kit
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </a>
            </div>
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <h3 class="font-bold text-slate-900 mb-5">Quick facts</h3>
                <dl class="space-y-3 text-sm">
                    @foreach ([
                        ['label' => 'Founded',    'value' => '2013, San Francisco, CA'],
                        ['label' => 'Employees',  'value' => '180+ globally'],
                        ['label' => 'Clients',    'value' => '200+ across 30+ industries'],
                        ['label' => 'Projects',   'value' => '350+ delivered'],
                        ['label' => 'Funding',    'value' => '$22M Series B (2026)'],
                        ['label' => 'CEO',        'value' => 'Daniel Okoro'],
                    ] as $f)
                    <div class="flex justify-between border-b border-slate-100 pb-3 last:border-0 last:pb-0">
                        <dt class="font-semibold text-slate-600">{{ $f['label'] }}</dt>
                        <dd class="text-slate-500">{{ $f['value'] }}</dd>
                    </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>
</section>

@endsection
