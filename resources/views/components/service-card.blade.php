@props(['title', 'description', 'link' => '#'])

<article class="group relative bg-white rounded-2xl border border-slate-200 p-8 flex flex-col gap-5 hover:border-blue-500/50 hover:shadow-2xl hover:shadow-blue-500/10 transition-all duration-300 hover:-translate-y-1">

    {{-- Icon slot --}}
    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center group-hover:bg-blue-100 transition-colors duration-300 text-blue-600">
        {{ $icon }}
    </div>

    {{-- Content --}}
    <div class="flex-1">
        <h3 class="text-xl font-bold text-slate-900 mb-3">{{ $title }}</h3>
        <p class="text-slate-500 text-sm leading-relaxed">{{ $description }}</p>
    </div>

    {{-- Learn more link --}}
    <a
        href="{{ $link }}"
        class="inline-flex items-center gap-1.5 text-blue-600 font-semibold text-sm group-hover:gap-3 transition-all duration-200"
        aria-label="Learn more about {{ $title }}"
    >
        Learn more
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
        </svg>
    </a>

    {{-- Hover accent bar --}}
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 group-hover:w-1/2 h-0.5 bg-gradient-to-r from-blue-500 to-orange-500 rounded-full transition-all duration-500"></div>
</article>
