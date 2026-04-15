@extends('admin.layout')
@section('title', 'Job Listings')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-black text-slate-900">Job Listings</h1>
        <p class="text-slate-500 text-sm mt-1">{{ $jobs->count() }} total listings</p>
    </div>
    <a href="{{ route('admin.jobs.create') }}"
       class="inline-flex items-center gap-2 text-white font-semibold px-5 py-2.5 rounded-xl text-sm transition-colors"
       style="background-color:#150958;"
       onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
        + Add listing
    </a>
</div>

<div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
    @forelse($jobs as $job)
    <div class="flex items-center gap-4 px-6 py-4 border-b border-slate-50 last:border-0">
        <div class="w-2 h-2 rounded-full shrink-0 {{ $job->active ? 'bg-[#8dc63f]' : 'bg-slate-300' }}"></div>
        <div class="min-w-0 flex-1">
            <p class="font-semibold text-slate-900 text-sm">{{ $job->title }}</p>
            <p class="text-xs text-slate-400 mt-0.5">{{ $job->department }} · {{ $job->type }} · {{ $job->location }}</p>
        </div>
        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('admin.jobs.edit', $job) }}"
               class="text-xs font-semibold px-3 py-1.5 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors text-slate-600">
                Edit
            </a>
            <form method="POST" action="{{ route('admin.jobs.destroy', $job) }}"
                  onsubmit="return confirm('Delete this job listing?')">
                @csrf @method('DELETE')
                <button type="submit" class="text-xs font-semibold px-3 py-1.5 border border-red-200 rounded-lg hover:bg-red-50 text-red-500 transition-colors">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @empty
    <div class="px-6 py-12 text-center text-slate-400 text-sm">No job listings yet. <a href="{{ route('admin.jobs.create') }}" class="font-semibold hover:underline" style="color:#150958;">Add one</a>.</div>
    @endforelse
</div>
@endsection
