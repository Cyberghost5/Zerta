@extends('admin.layout')
@section('title', 'Applications')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-black text-slate-900">Career Applications</h1>
        <p class="text-slate-500 text-sm mt-1">{{ $applications->total() }} total applications</p>
    </div>
</div>

<div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
    @forelse($applications as $a)
    <a href="{{ route('admin.applications.show', $a) }}"
       class="flex items-center gap-4 px-6 py-4 border-b border-slate-50 hover:bg-slate-50 transition-colors last:border-0">
        <div class="w-2 h-2 rounded-full shrink-0 {{ $a->read_at ? 'bg-slate-200' : 'bg-[#8dc63f]' }}"></div>
        <div class="min-w-0 flex-1">
            <div class="flex items-center gap-3">
                <p class="font-semibold text-slate-900 text-sm">{{ $a->name }}</p>
                <span class="text-xs text-slate-400">{{ $a->email }}</span>
            </div>
            <p class="text-xs text-slate-500 mt-0.5">{{ $a->role }} <span class="text-slate-300">·</span> {{ $a->department }}</p>
        </div>
        <div class="text-right shrink-0">
            <p class="text-xs text-slate-400">{{ $a->created_at->format('d M Y') }}</p>
        </div>
    </a>
    @empty
    <div class="px-6 py-12 text-center text-slate-400 text-sm">No applications yet.</div>
    @endforelse
</div>

@if($applications->hasPages())
<div class="mt-6">{{ $applications->links() }}</div>
@endif
@endsection
