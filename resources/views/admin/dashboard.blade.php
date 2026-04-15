@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-2xl font-black text-slate-900">Dashboard</h1>
    <p class="text-slate-500 text-sm mt-1">Overview of all incoming activity.</p>
</div>

{{-- Stats --}}
<div class="grid grid-cols-2 lg:grid-cols-3 gap-5 mb-10">
    <a href="{{ route('admin.submissions.index') }}" class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-[#8dc63f] transition-colors group">
        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-1">Contact Messages</p>
        <p class="text-4xl font-black text-slate-900">{{ $stats['contacts'] }}</p>
        @if($stats['unread_contacts'] > 0)
        <p class="text-xs mt-1.5 font-semibold" style="color:#150958;">{{ $stats['unread_contacts'] }} unread</p>
        @endif
    </a>
    <a href="{{ route('admin.applications.index') }}" class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-[#8dc63f] transition-colors group">
        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-1">Applications</p>
        <p class="text-4xl font-black text-slate-900">{{ $stats['applications'] }}</p>
        @if($stats['unread_apps'] > 0)
        <p class="text-xs mt-1.5 font-semibold" style="color:#150958;">{{ $stats['unread_apps'] }} unread</p>
        @endif
    </a>
    <a href="{{ route('admin.jobs.index') }}" class="bg-white rounded-2xl border border-slate-200 p-6 hover:border-[#8dc63f] transition-colors group">
        <p class="text-xs font-semibold text-slate-500 uppercase tracking-wide mb-1">Active Job Listings</p>
        <p class="text-4xl font-black text-slate-900">{{ $stats['active_jobs'] }}</p>
        <p class="text-xs text-slate-400 mt-1.5">{{ $stats['total_jobs'] }} total</p>
    </a>
</div>

<div class="grid lg:grid-cols-2 gap-8">
    {{-- Recent contacts --}}
    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
            <h2 class="font-bold text-slate-900 text-sm">Recent Contact Messages</h2>
            <a href="{{ route('admin.submissions.index') }}" class="text-xs font-semibold hover:underline" style="color:#150958;">View all</a>
        </div>
        @forelse($recent_contacts as $s)
        <a href="{{ route('admin.submissions.show', $s) }}" class="flex items-center justify-between px-6 py-4 border-b border-slate-50 hover:bg-slate-50 transition-colors last:border-0">
            <div class="min-w-0">
                <p class="font-semibold text-slate-900 text-sm truncate">{{ $s->full_name }}</p>
                <p class="text-xs text-slate-400 truncate">{{ $s->email }}</p>
            </div>
            <div class="text-right shrink-0 ml-4">
                <p class="text-xs text-slate-400">{{ $s->created_at->diffForHumans() }}</p>
                @if(!$s->read_at)
                <span class="inline-block w-2 h-2 rounded-full bg-[#8dc63f] mt-1"></span>
                @endif
            </div>
        </a>
        @empty
        <p class="text-sm text-slate-400 px-6 py-4">No messages yet.</p>
        @endforelse
    </div>

    {{-- Recent applications --}}
    <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between">
            <h2 class="font-bold text-slate-900 text-sm">Recent Applications</h2>
            <a href="{{ route('admin.applications.index') }}" class="text-xs font-semibold hover:underline" style="color:#150958;">View all</a>
        </div>
        @forelse($recent_apps as $a)
        <a href="{{ route('admin.applications.show', $a) }}" class="flex items-center justify-between px-6 py-4 border-b border-slate-50 hover:bg-slate-50 transition-colors last:border-0">
            <div class="min-w-0">
                <p class="font-semibold text-slate-900 text-sm truncate">{{ $a->name }}</p>
                <p class="text-xs text-slate-400 truncate">{{ $a->role }}</p>
            </div>
            <div class="text-right shrink-0 ml-4">
                <p class="text-xs text-slate-400">{{ $a->created_at->diffForHumans() }}</p>
                @if(!$a->read_at)
                <span class="inline-block w-2 h-2 rounded-full bg-[#8dc63f] mt-1"></span>
                @endif
            </div>
        </a>
        @empty
        <p class="text-sm text-slate-400 px-6 py-4">No applications yet.</p>
        @endforelse
    </div>
</div>
@endsection
