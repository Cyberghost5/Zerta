@extends('admin.layout')
@section('title', $submission->full_name)

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.submissions.index') }}" class="text-sm text-slate-400 hover:text-slate-600 transition-colors">← All messages</a>
</div>

<div class="grid lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2">
        <div class="bg-white rounded-2xl border border-slate-200 p-8">
            <h1 class="text-xl font-black text-slate-900 mb-1">{{ $submission->full_name }}</h1>
            <p class="text-sm text-slate-400 mb-8">Submitted {{ $submission->created_at->format('d M Y, H:i') }}</p>

            <div class="prose max-w-none text-slate-700 text-sm leading-relaxed whitespace-pre-wrap">{{ $submission->message }}</div>
        </div>
    </div>

    <div class="space-y-5">
        <div class="bg-white rounded-2xl border border-slate-200 p-6">
            <h2 class="text-xs font-bold text-slate-500 uppercase tracking-wide mb-4">Contact Details</h2>
            <dl class="space-y-3 text-sm">
                <div><dt class="text-slate-400 text-xs">Name</dt><dd class="font-semibold text-slate-900">{{ $submission->full_name }}</dd></div>
                <div><dt class="text-slate-400 text-xs">Email</dt><dd><a href="mailto:{{ $submission->email }}" class="font-semibold hover:underline" style="color:#150958;">{{ $submission->email }}</a></dd></div>
                @if($submission->company)
                <div><dt class="text-slate-400 text-xs">Company</dt><dd class="font-semibold text-slate-900">{{ $submission->company }}</dd></div>
                @endif
                @if($submission->service)
                <div><dt class="text-slate-400 text-xs">Service</dt><dd class="font-semibold text-slate-900">{{ str_replace('_', ' ', $submission->service) }}</dd></div>
                @endif
                @if($submission->budget)
                <div><dt class="text-slate-400 text-xs">Budget</dt><dd class="font-semibold text-slate-900">{{ str_replace('_', ' ', $submission->budget) }}</dd></div>
                @endif
            </dl>
        </div>

        <a href="mailto:{{ $submission->email }}?subject=Re: your enquiry"
           class="block w-full text-center text-white font-semibold py-3 rounded-xl text-sm transition-colors"
           style="background-color:#150958;"
           onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
            Reply by email
        </a>

        <form method="POST" action="{{ route('admin.submissions.destroy', $submission) }}"
              onsubmit="return confirm('Delete this submission permanently?')">
            @csrf @method('DELETE')
            <button type="submit" class="w-full text-center text-red-500 border border-red-200 hover:bg-red-50 font-semibold py-3 rounded-xl text-sm transition-colors">
                Delete submission
            </button>
        </form>
    </div>
</div>
@endsection
