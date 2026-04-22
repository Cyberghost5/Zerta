@extends('layouts.app')

@section('title', 'Contact Zerta — Start a Project or Hire Developers')
@section('description', 'Get in touch with Zerta. Tell us about your project or team needs and we\'ll respond within one business day.')

@section('content')

{{-- PAGE HERO --}}
<section class="bg-white pt-32 pb-16 lg:pt-40 lg:pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Get in touch</p>
            <h1 class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-5">
                Let's talk about<br>
                <span class="text-slate-400">your project.</span>
            </h1>
            <p class="text-lg text-slate-500 leading-relaxed">
                Fill in the form and we'll get back to you within one business day. For urgent matters email us directly at
                <a href="mailto:info@zertahq.com" class="font-semibold text-slate-700 hover:underline" style="color:#150958;">info@zertahq.com</a>.
            </p>
        </div>
    </div>
</section>

{{-- FORM + SIDEBAR --}}
<section class="bg-white pb-24 lg:pb-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-16 xl:gap-24">

            {{-- Contact Form --}}
            <div class="lg:col-span-2">

                @if(session('success'))
                <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-6 py-4 flex items-start gap-3">
                    <svg class="w-5 h-5 shrink-0 mt-0.5" style="color:#8dc63f;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <p class="text-sm font-semibold text-green-800">{{ session('success') }}</p>
                </div>
                @endif

                <form class="space-y-6" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-semibold text-slate-700 mb-2">First name *</label>
                            <input type="text" id="first_name" name="first_name" required autocomplete="given-name"
                                class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:border-transparent transition"
                                style="--tw-ring-color:#8dc63f;"
                                placeholder="Jane">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-semibold text-slate-700 mb-2">Last name *</label>
                            <input type="text" id="last_name" name="last_name" required autocomplete="family-name"
                                class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:border-transparent transition"
                                placeholder="Smith">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Work email *</label>
                        <input type="email" id="email" name="email" required autocomplete="email"
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:border-transparent transition"
                            placeholder="jane@company.com">
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-semibold text-slate-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" autocomplete="organization"
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:border-transparent transition"
                            placeholder="Acme Inc.">
                    </div>
                    <div>
                        <label for="service" class="block text-sm font-semibold text-slate-700 mb-2">What do you need? *</label>
                        <select id="service" name="service" required
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:border-transparent transition bg-white">
                            <option value="" disabled selected>Select a service</option>
                            <option value="software_outsourcing">Software Outsourcing (full project)</option>
                            <option value="staff_augmentation">Staff Augmentation (embed engineers)</option>
                            <option value="dedicated_teams">Dedicated Teams</option>
                            <option value="talent_outsourcing">Talent Outsourcing</option>
                            <option value="it_consulting">IT Consulting</option>
                            <option value="refer_and_earn">Refer &amp; Earn</option>
                            <option value="other">Not sure — let's talk</option>
                        </select>
                    </div>
                    <div>
                        <label for="budget" class="block text-sm font-semibold text-slate-700 mb-2">Approximate budget</label>
                        <select id="budget" name="budget"
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:border-transparent transition bg-white">
                            <option value="" disabled selected>Select a range</option>
                            <option value="under_10k">Under $10,000</option>
                            <option value="10k_50k">$10,000 – $50,000</option>
                            <option value="50k_150k">$50,000 – $150,000</option>
                            <option value="150k_500k">$150,000 – $500,000</option>
                            <option value="over_500k">$500,000+</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Tell us about your project *</label>
                        <textarea id="message" name="message" required rows="5"
                            class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:border-transparent transition resize-none"
                            placeholder="Describe what you're building, what stage you're at, and what kind of help you need..."></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="inline-flex items-center gap-2 text-white font-semibold px-8 py-4 rounded-xl transition-colors duration-150 text-sm"
                            style="background-color:#150958;"
                            onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'"
                        >
                            Send message
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            {{-- Sidebar --}}
            <div class="lg:col-span-1 space-y-10">
                <div>
                    <h3 class="font-bold text-slate-900 mb-4">Our offices</h3>
                    <div class="space-y-6 text-sm text-slate-500">
                        <div>
                            <p class="font-semibold text-slate-800 mb-1">Jos (HQ)</p>
                            <p>57 Rayfield Rd, Fwavei<br>Jos 930103, Plateau</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 mb-4">Direct contact</h3>
                    <ul class="space-y-3 text-sm text-slate-500">
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 shrink-0" style="color:#8dc63f;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <a href="mailto:info@zertahq.com" class="hover:text-slate-900 transition-colors">info@zertahq.com</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 shrink-0" style="color:#8dc63f;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <a href="tel:+2347013453936" class="hover:text-slate-900 transition-colors">+234 701 345 3936</a>
                        </li>
                    </ul>
                </div>
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <p class="text-sm font-bold text-slate-900 mb-2">Typically responds in</p>
                    <p class="text-3xl font-black" style="color:#150958;">&lt; 24 hrs</p>
                    <p class="text-xs text-slate-500 mt-2">During business hours, Mon–Fri.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
