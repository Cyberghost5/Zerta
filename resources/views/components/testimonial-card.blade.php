@props(['quote', 'name', 'role', 'company', 'avatar' => null])

<article class="bg-white rounded-2xl border border-slate-200 p-8 flex flex-col gap-6 hover:shadow-xl hover:shadow-slate-200/60 hover:border-slate-300 transition-all duration-300">

    {{-- Star Rating --}}
    <div class="flex gap-1" aria-label="5 star rating">
        @for ($i = 0; $i < 5; $i++)
            <svg class="w-5 h-5 text-orange-400 fill-current" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
            </svg>
        @endfor
    </div>

    {{-- Quote --}}
    <blockquote class="text-slate-600 leading-relaxed text-sm italic flex-1">
        &#8220;{{ $quote }}&#8221;
    </blockquote>

    {{-- Author --}}
    <div class="flex items-center gap-4 pt-4 border-t border-slate-100">
        <div class="w-12 h-12 rounded-full overflow-hidden shrink-0 ring-2 ring-slate-100">
            @if ($avatar)
                <img
                    src="{{ $avatar }}"
                    alt="Photo of {{ $name }}"
                    class="w-full h-full object-cover"
                    loading="lazy"
                    width="48"
                    height="48"
                >
            @else
                <div class="w-full h-full bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                    <span class="text-white font-bold text-base">{{ strtoupper(substr($name, 0, 1)) }}</span>
                </div>
            @endif
        </div>
        <div>
            <cite class="not-italic font-bold text-slate-900 text-sm block">{{ $name }}</cite>
            <span class="text-slate-500 text-xs">{{ $role }}, {{ $company }}</span>
        </div>
    </div>
</article>
