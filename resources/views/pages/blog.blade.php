@extends('layouts.app')

@section('title', 'Blog — Insights on Software Outsourcing & Engineering')
@section('description', 'Practical articles on software outsourcing, remote team management, engineering leadership, and building products that ship on time.')

@section('content')

{{-- PAGE HERO --}}
<section class="bg-white pt-32 pb-16 lg:pt-40 lg:pb-20 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">The Zerta blog</p>
            <h1 class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-5">
                Insights for<br>
                <span class="text-slate-400">builders & leaders.</span>
            </h1>
            <p class="text-lg text-slate-500 leading-relaxed">
                Practical thinking on software delivery, remote teams, and the business of building great products.
            </p>
        </div>
    </div>
</section>

{{-- POSTS GRID --}}
<section class="bg-white py-20 lg:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @php
        $posts = [
            [
                'category' => 'Software Outsourcing',
                'title'    => 'How to write a software brief that actually gets you what you want',
                'excerpt'  => 'Most project briefs fail before the first line of code is written. Here\'s how to scope a project so any agency or team can run with it — and you get back working software instead of surprises.',
                'date'     => 'Apr 10, 2026',
                'readtime' => '6 min read',
                'img'      => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&w=800&q=80',
                'featured' => true,
            ],
            [
                'category' => 'Remote Teams',
                'title'    => 'The async-first playbook: how our best clients run distributed engineering teams',
                'excerpt'  => 'After working with 200+ companies, the ones with the smoothest remote operations share four practices most teams skip.',
                'date'     => 'Apr 3, 2026',
                'readtime' => '8 min read',
                'img'      => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&w=600&q=80',
                'featured' => false,
            ],
            [
                'category' => 'Engineering',
                'title'    => 'Fixed-price vs. time & materials: which model is right for your project?',
                'excerpt'  => 'Both models work. Both can go wrong. The choice depends on how well you know what you want — and we\'ll help you figure that out.',
                'date'     => 'Mar 26, 2026',
                'readtime' => '5 min read',
                'img'      => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&w=600&q=80',
                'featured' => false,
            ],
            [
                'category' => 'Leadership',
                'title'    => 'When to augment your team vs. outsource the whole project',
                'excerpt'  => 'Staff augmentation and full outsourcing solve different problems. Here\'s the decision framework we walk every new client through.',
                'date'     => 'Mar 18, 2026',
                'readtime' => '7 min read',
                'img'      => 'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&w=600&q=80',
                'featured' => false,
            ],
            [
                'category' => 'Product',
                'title'    => 'The MVP trap: why "just ship something" is terrible advice',
                'excerpt'  => 'Shipping fast is a virtue. Shipping without a clear scope is not. The distinction matters more than most founders realise.',
                'date'     => 'Mar 5, 2026',
                'readtime' => '4 min read',
                'img'      => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&w=600&q=80',
                'featured' => false,
            ],
            [
                'category' => 'Engineering',
                'title'    => 'Code review culture: what separates senior engineers from the rest',
                'excerpt'  => 'The quality of a team\'s code reviews tells you almost everything about the quality of their output. Here\'s what we look for when vetting engineers.',
                'date'     => 'Feb 27, 2026',
                'readtime' => '6 min read',
                'img'      => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&w=600&q=80',
                'featured' => false,
            ],
        ];
        $featured = $posts[0];
        $rest = array_slice($posts, 1);
        @endphp

        {{-- Featured Post --}}
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16 pb-16 border-b border-slate-100">
            <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-slate-100">
                <img src="{{ $featured['img'] }}" alt="{{ $featured['title'] }}"
                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                    loading="eager" width="800" height="500">
            </div>
            <div>
                <span class="inline-block text-xs font-bold px-3 py-1 rounded-full text-white mb-4" style="background-color:#8dc63f;">{{ $featured['category'] }}</span>
                <h2 class="text-3xl font-black text-slate-900 leading-tight tracking-tight mb-4">{{ $featured['title'] }}</h2>
                <p class="text-slate-500 leading-relaxed mb-6 text-sm">{{ $featured['excerpt'] }}</p>
                <div class="flex items-center gap-4 text-xs text-slate-400">
                    <span>{{ $featured['date'] }}</span>
                    <span>&middot;</span>
                    <span>{{ $featured['readtime'] }}</span>
                </div>
            </div>
        </div>

        {{-- Rest of Posts --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($rest as $post)
            <article class="group flex flex-col">
                <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-slate-100 mb-5">
                    <img src="{{ $post['img'] }}" alt="{{ $post['title'] }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        loading="lazy" width="600" height="375">
                </div>
                <span class="text-xs font-bold mb-3" style="color:#8dc63f;">{{ $post['category'] }}</span>
                <h3 class="font-black text-slate-900 leading-snug tracking-tight mb-3 group-hover:text-[#150958] transition-colors">{{ $post['title'] }}</h3>
                <p class="text-slate-500 text-sm leading-relaxed flex-1 mb-5">{{ $post['excerpt'] }}</p>
                <div class="flex items-center gap-3 text-xs text-slate-400">
                    <span>{{ $post['date'] }}</span>
                    <span>&middot;</span>
                    <span>{{ $post['readtime'] }}</span>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>

{{-- NEWSLETTER --}}
<section class="bg-slate-50 py-20 border-t border-slate-100">
    <div class="max-w-xl mx-auto px-4 sm:px-6 text-center">
        <h2 class="text-3xl font-black text-slate-900 mb-3">Stay in the loop</h2>
        <p class="text-slate-500 mb-8 text-sm">New articles on software delivery and engineering leadership, once a month. No fluff.</p>
        <form class="flex gap-3" action="#" method="POST">
            @csrf
            <input type="email" name="email" required placeholder="your@email.com" autocomplete="email"
                class="flex-1 border border-slate-200 rounded-lg px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:border-transparent">
            <button type="submit"
                class="shrink-0 text-white font-semibold px-6 py-3 rounded-lg text-sm transition-colors duration-150"
                style="background-color:#150958;"
                onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
                Subscribe
            </button>
        </form>
    </div>
</section>

@endsection
