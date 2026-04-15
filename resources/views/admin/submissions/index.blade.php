@extends('admin.layout')
@section('title', 'Contact Messages')

@section('content')
<div class="flex items-center justify-between mb-8">
    <div>
        <h1 class="text-2xl font-black text-slate-900">Contact Messages</h1>
        <p class="text-slate-500 text-sm mt-1">{{ $submissions->total() }} total submissions</p>
    </div>
</div>

<div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
    @forelse($submissions as $s)
    <a href="{{ route('admin.submissions.show', $s) }}"
       class="flex items-center gap-4 px-6 py-4 border-b border-slate-50 hover:bg-slate-50 transition-colors last:border-0">
        <div class="w-2 h-2 rounded-full shrink-0 {{ $s->read_at ? 'bg-slate-200' : 'bg-[#8dc63f]' }}"></div>
        <div class="min-w-0 flex-1">
            <div class="flex items-center gap-3">
                <p class="font-semibold text-slate-900 text-sm">{{ $s->full_name }}</p>
                <span class="text-xs text-slate-400">{{ $s->email }}</span>
                @if($s->company)
                <span class="text-xs text-slate-300">· {{ $s->company }}</span>
                @endif
            </div>
            <p class="text-xs text-slate-400 mt-0.5 truncate">{{ Str::limit($s->message, 100) }}</p>
        </div>
        <div class="text-right shrink-0">
            <p class="text-xs text-slate-400">{{ $s->created_at->format('d M Y') }}</p>
            @if($s->service)
            <p class="text-xs font-medium text-slate-500 mt-0.5">{{ str_replace('_', ' ', $s->service) }}</p>
            @endif
        </div>
    </a>
    @empty
    <div class="px-6 py-12 text-center text-slate-400 text-sm">No messages yet.</div>
    @endforelse
</div>

@if($submissions->hasPages())
<div class="mt-6">{{ $submissions->links() }}</div>
@endif
@endsection
