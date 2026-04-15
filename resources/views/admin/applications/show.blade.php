@extends('admin.layout')
@section('title', $application->name)

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.applications.index') }}" class="text-sm text-slate-400 hover:text-slate-600 transition-colors">← All applications</a>
</div>

<div class="grid lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
            <h1 class="text-xl font-black text-slate-900 mb-1">{{ $application->name }}</h1>
            <p class="text-sm" style="color:#150958;">{{ $application->role }}</p>
            <p class="text-xs text-slate-400 mt-1 mb-8">{{ $application->department }} · Submitted {{ $application->created_at->format('d M Y, H:i') }}</p>

            <h2 class="text-xs font-bold text-slate-500 uppercase tracking-wide mb-3">Why Zerta?</h2>
            <div class="text-slate-700 text-sm leading-relaxed whitespace-pre-wrap">{{ $application->cover_note }}</div>
        </div>

        @if($application->extra_data)
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
            <h2 class="text-xs font-bold text-slate-500 uppercase tracking-wide mb-4">Additional Details</h2>
            <dl class="space-y-3 text-sm">
                @foreach($application->extra_data as $key => $value)
                @if($value)
                <div class="grid grid-cols-2 gap-4">
                    <dt class="text-slate-400">{{ ucwords(str_replace('_', ' ', $key)) }}</dt>
                    <dd class="font-semibold text-slate-900">{{ $value }}</dd>
                </div>
                @endif
                @endforeach
            </dl>
        </div>
        @endif
    </div>

    <div class="space-y-5">
        <div class="bg-white rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xs font-bold text-slate-500 uppercase tracking-wide mb-4">Contact Details</h2>
            <dl class="space-y-3 text-sm">
                <div><dt class="text-slate-400 text-xs">Email</dt><dd><a href="mailto:{{ $application->email }}" class="font-semibold hover:underline" style="color:#150958;">{{ $application->email }}</a></dd></div>
                @if($application->phone)
                <div><dt class="text-slate-400 text-xs">Phone</dt><dd class="font-semibold text-slate-900">{{ $application->phone }}</dd></div>
                @endif
                <div><dt class="text-slate-400 text-xs">LinkedIn</dt><dd><a href="{{ $application->linkedin }}" target="_blank" class="font-semibold text-slate-900 hover:underline truncate block">View profile</a></dd></div>
            </dl>
        </div>

        <a href="{{ route('admin.applications.cv', $application) }}"
           class="block w-full text-center text-white font-semibold py-3 rounded-xl text-sm transition-colors"
           style="background-color:#150958;"
           onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
            Download CV
        </a>

        <a href="mailto:{{ $application->email }}?subject=Your application for {{ $application->role }}"
           class="block w-full text-center font-semibold py-3 rounded-xl text-sm border border-slate-200 hover:bg-slate-50 transition-colors text-slate-700">
            Reply by email
        </a>

        <form method="POST" action="{{ route('admin.applications.destroy', $application) }}"
              onsubmit="return confirm('Delete this application and its CV permanently?')">
            @csrf @method('DELETE')
            <button type="submit" class="w-full text-center text-red-500 border border-red-200 hover:bg-red-50 font-semibold py-3 rounded-xl text-sm transition-colors">
                Delete application
            </button>
        </form>
    </div>
</div>
@endsection
