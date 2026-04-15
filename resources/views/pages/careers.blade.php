@extends('layouts.app')

@section('title', 'Careers at Zerta — Join Our Team')
@section('description', 'Join the team building the future of software outsourcing. Open roles across engineering, product, design, sales, and operations.')

@section('content')

{{-- PAGE HERO --}}
<section class="bg-white pt-32 pb-20 lg:pt-40 lg:pb-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Careers</p>
                <h1 class="text-5xl sm:text-6xl font-black text-slate-900 leading-[1.06] tracking-tight mb-6">
                    Work on work<br>
                    <span class="text-slate-400">that matters.</span>
                </h1>
                <p class="text-lg text-slate-500 leading-relaxed max-w-md">
                    We are a remote-first team helping companies around the world build better software. Join us and do the best work of your career.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                @foreach ([
                    ['stat' => '100%',  'label' => 'Remote-friendly'],
                    ['stat' => '40+',   'label' => 'Countries represented'],
                    ['stat' => '4.8/5', 'label' => 'Team satisfaction'],
                    ['stat' => '2022',  'label' => 'Founded'],
                ] as $s)
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <div class="text-3xl font-black mb-1" style="color:#150958;">{{ $s['stat'] }}</div>
                    <div class="text-xs text-slate-500 font-medium">{{ $s['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- WHY ZERTA --}}
<section class="bg-slate-50 py-20 border-y border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-black text-slate-900 mb-12 text-center">Why people join Zerta</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ([
                ['icon' => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064',
                  'title' => 'Fully remote',       'desc' => "Work from anywhere. We have been remote-first since day one."],
                ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                  'title' => 'Competitive pay',    'desc' => 'Top-of-market salaries benchmarked quarterly against global rates.'],
                ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                  'title' => 'Real ownership',     'desc' => 'Every team member has a real stake in the outcomes we deliver.'],
                ['icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.753 0-3.332.477-4.5 1.253',
                  'title' => 'Learning budget',    'desc' => 'Annual budget for courses, conferences, and books.'],
            ] as $v)
            <div class="text-center">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mx-auto mb-4" style="background-color:#150958;">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $v['icon'] }}"/>
                    </svg>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">{{ $v['title'] }}</h3>
                <p class="text-sm text-slate-500 leading-relaxed">{{ $v['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- OPEN ROLES with inline forms --}}
<section id="apply" class="bg-white py-24 lg:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-xl mb-14">
            <p class="text-sm font-semibold tracking-wide mb-4" style="color:#8dc63f;">Open roles</p>
            <h2 class="text-4xl font-black text-slate-900 leading-tight tracking-tight">Find your place on the team.</h2>
            <p class="text-slate-500 mt-4 text-sm leading-relaxed">Click <strong>Apply</strong> on any role to fill in the application form inline. We review every submission.</p>
        </div>

        @if(session('success'))
        <div class="mb-10 rounded-2xl bg-green-50 border border-green-200 px-6 py-4 flex items-start gap-3">
            <svg class="w-5 h-5 shrink-0 mt-0.5" style="color:#8dc63f;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <p class="text-sm font-semibold text-green-800">{{ session('success') }}</p>
        </div>
        @endif

        @if($jobs->isEmpty())
        <div class="text-center py-16 text-slate-400">
            <p class="text-lg font-semibold mb-2">No open roles right now.</p>
            <p class="text-sm">Check back soon or send an open application below.</p>
        </div>
        @else

        <div class="space-y-14">
        @foreach ($jobs as $deptName => $deptJobs)
        @php $deptType = $deptJobs->first()->department_type; @endphp
        <div x-data="{ openRole: null }">

            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-5 pb-3 border-b border-slate-100">{{ $deptName }}</h3>

            <div class="divide-y divide-slate-100">
            @foreach ($deptJobs as $ri => $role)
            @php $roleId = $deptType . '_' . $ri; @endphp
            <div>

                {{-- Role header --}}
                <div class="flex items-center justify-between gap-6 py-5">
                    <div>
                        <p class="font-semibold text-slate-900">{{ $role->title }}</p>
                        <div class="flex items-center gap-3 mt-1.5">
                            <span class="text-xs text-slate-400">{{ $role->type }}</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-xs text-slate-400">{{ $role->location }}</span>
                        </div>
                    </div>
                    <button
                        @click="openRole = (openRole === '{{ $roleId }}') ? null : '{{ $roleId }}'"
                        class="shrink-0 inline-flex items-center gap-1.5 text-sm font-semibold border rounded-lg px-4 py-2 transition-all duration-150"
                        :style="openRole === '{{ $roleId }}'
                            ? 'background-color:#150958;color:white;border-color:#150958;'
                            : 'background-color:transparent;color:#150958;border-color:#150958;'"
                    >
                        <span x-text="openRole === '{{ $roleId }}' ? 'Close' : 'Apply'"></span>
                        <svg :class="openRole === '{{ $roleId }}' ? 'rotate-45' : ''"
                             class="w-3.5 h-3.5 transition-transform duration-200"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                    </button>
                </div>

                {{-- Inline form --}}
                <div
                    x-show="openRole === '{{ $roleId }}'"
                    x-cloak
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                >
                    <div class="mb-6 rounded-2xl border border-slate-100 bg-slate-50 p-6 lg:p-8">
                        <h4 class="font-black text-slate-900 text-lg mb-1">Apply — <span class="font-medium text-slate-500">{{ $role->title }}</span></h4>
                        <p class="text-xs text-slate-400 mb-7">All fields marked * are required. We respond within 3 business days.</p>

                        <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                            @csrf
                            <input type="hidden" name="role" value="{{ $role->title }}">
                            <input type="hidden" name="department" value="{{ $deptName }}">

                            {{-- Name + Email --}}
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full name *</label>
                                    <input type="text" name="name" required autocomplete="name" placeholder="Jane Smith"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email address *</label>
                                    <input type="email" name="email" required autocomplete="email" placeholder="jane@example.com"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                            </div>

                            {{-- Phone + LinkedIn --}}
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Phone <span class="text-slate-400 font-normal">(optional)</span></label>
                                    <input type="tel" name="phone" autocomplete="tel" placeholder="+234 701 345 3936"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">LinkedIn profile *</label>
                                    <input type="url" name="linkedin" required placeholder="https://linkedin.com/in/..."
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                            </div>

                            {{-- Engineering extra fields --}}
                            @if ($deptType === 'engineering')
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">GitHub or portfolio URL *</label>
                                    <input type="url" name="portfolio" required placeholder="https://github.com/..."
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Primary stack / language *</label>
                                    <input type="text" name="primary_stack" required placeholder="e.g. PHP / Laravel / React"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Years of professional experience *</label>
                                    <select name="years_experience" required class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                        <option value="" disabled selected>Select...</option>
                                        <option>1-2 years</option><option>3-5 years</option><option>6-9 years</option><option>10+ years</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Open to a technical assessment? *</label>
                                    <select name="technical_assessment" required class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                        <option value="" disabled selected>Select...</option>
                                        <option value="yes">Yes — happy to complete one</option>
                                        <option value="portfolio">Prefer to use my portfolio</option>
                                        <option value="discuss">Let us discuss</option>
                                    </select>
                                </div>
                            </div>
                            @endif

                            {{-- Design extra fields --}}
                            @if ($deptType === 'design')
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Portfolio URL *</label>
                                    <input type="url" name="portfolio" required placeholder="https://yourportfolio.com"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Primary design tools *</label>
                                    <input type="text" name="design_tools" required placeholder="e.g. Figma, Adobe XD, Principle"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Years of professional experience *</label>
                                <select name="years_experience" required class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                    <option value="" disabled selected>Select...</option>
                                    <option>1-2 years</option><option>3-5 years</option><option>6-9 years</option><option>10+ years</option>
                                </select>
                            </div>
                            @endif

                            {{-- Product & Delivery extra fields --}}
                            @if ($deptType === 'product')
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Years of PM / delivery experience *</label>
                                    <select name="years_experience" required class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                        <option value="" disabled selected>Select...</option>
                                        <option>1-2 years</option><option>3-5 years</option><option>6-9 years</option><option>10+ years</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Methodologies you work in *</label>
                                    <input type="text" name="methodologies" required placeholder="e.g. Agile, Scrum, Kanban, Shape Up"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Case study or past project link <span class="text-slate-400 font-normal">(optional)</span></label>
                                <input type="url" name="case_study" placeholder="https://..."
                                    class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                            </div>
                            @endif

                            {{-- Sales extra fields --}}
                            @if ($deptType === 'sales')
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Years of sales experience *</label>
                                    <select name="years_experience" required class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                        <option value="" disabled selected>Select...</option>
                                        <option>1-2 years</option><option>3-5 years</option><option>6-9 years</option><option>10+ years</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Sales methodology *</label>
                                    <input type="text" name="sales_methodology" required placeholder="e.g. SPIN, MEDDIC, Challenger"
                                        class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Most recent annual quota <span class="text-slate-400 font-normal">(optional)</span></label>
                                <input type="text" name="quota" placeholder="e.g. $1.2M ARR"
                                    class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                            </div>
                            @endif

                            {{-- CV Upload --}}
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">CV / Resume * <span class="text-slate-400 font-normal">PDF or DOCX, max 5 MB</span></label>
                                <input type="file" name="cv" required accept=".pdf,.doc,.docx"
                                    class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-500 file:mr-3 file:border-0 file:bg-[#150958] file:text-white file:text-xs file:font-semibold file:px-3 file:py-1.5 file:rounded-md file:cursor-pointer cursor-pointer focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                            </div>

                            {{-- Cover note --}}
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1.5">Why Zerta? *</label>
                                <textarea name="cover_note" required rows="4"
                                    placeholder="Tell us why this role interests you and what you would bring to the team."
                                    class="w-full border border-slate-200 bg-white rounded-lg px-3.5 py-2.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition resize-none"></textarea>
                            </div>

                            {{-- Submit row --}}
                            <div class="flex flex-wrap items-center gap-5 pt-1">
                                <button type="submit"
                                    class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3 rounded-lg text-sm transition-colors duration-150"
                                    style="background-color:#150958;"
                                    onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
                                    Submit application
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </button>
                                <button type="button" @click="openRole = null"
                                    class="text-sm text-slate-400 hover:text-slate-600 transition-colors duration-150">Cancel</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            @endforeach
            </div>

        </div>
        @endforeach
        </div>

        @endif

    </div>
</section>

{{-- OPEN APPLICATION --}}
<section class="py-20 lg:py-24" style="background-color:#150958;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-black text-white mb-5">Do not see your role?</h2>
                <p class="text-slate-300 text-lg leading-relaxed max-w-md">
                    We are always looking for exceptional people. Send us your CV and a short note about what you would like to work on.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 lg:justify-end">
                <a href="mailto:zertahq@gmail.com?subject=Open Application"
                    class="inline-flex items-center justify-center gap-2 bg-white text-slate-900 font-bold px-8 py-4 rounded-xl hover:bg-slate-50 transition-colors duration-150 text-sm">
                    Send an open application
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center border-2 border-white/30 hover:border-white/60 text-white font-bold px-8 py-4 rounded-xl transition-colors duration-150 text-sm">
                    Start a project instead
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
