@extends('admin.layout')
@section('title', $job->exists ? 'Edit Job' : 'New Job Listing')

@section('content')
<div class="mb-6">
    <a href="{{ route('admin.jobs.index') }}" class="text-sm text-slate-400 hover:text-slate-600 transition-colors">← All job listings</a>
</div>

<div class="max-w-2xl">
    <h1 class="text-2xl font-black text-slate-900 mb-8">{{ $job->exists ? 'Edit Job Listing' : 'New Job Listing' }}</h1>

    <div class="bg-white rounded-2xl border border-slate-200 p-8">
        <form method="POST" action="{{ $job->exists ? route('admin.jobs.update', $job) : route('admin.jobs.store') }}" class="space-y-6">
            @csrf
            @if($job->exists) @method('PUT') @endif

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Job Title *</label>
                <input type="text" name="title" required value="{{ old('title', $job->title) }}"
                    placeholder="e.g. Senior Backend Engineer (Laravel / PHP)"
                    class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition @error('title') border-red-400 @enderror">
                @error('title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Department *</label>
                    <input type="text" name="department" required value="{{ old('department', $job->department) }}"
                        placeholder="e.g. Engineering"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Department Type *</label>
                    <select name="department_type" required
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition bg-white">
                        @foreach(['engineering' => 'Engineering', 'design' => 'Design', 'product' => 'Product & Delivery', 'sales' => 'Sales & Growth'] as $val => $label)
                        <option value="{{ $val }}" {{ old('department_type', $job->department_type) === $val ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Employment Type *</label>
                    <select name="type" required
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition bg-white">
                        @foreach(['Full-time', 'Part-time', 'Contract'] as $t)
                        <option value="{{ $t }}" {{ old('type', $job->type ?? 'Full-time') === $t ? 'selected' : '' }}>{{ $t }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Location *</label>
                    <input type="text" name="location" required value="{{ old('location', $job->location ?? 'Remote') }}"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Sort Order</label>
                    <input type="number" name="sort_order" min="0" value="{{ old('sort_order', $job->sort_order ?? 0) }}"
                        class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition">
                    <p class="text-xs text-slate-400 mt-1">Lower = shown first within the department.</p>
                </div>
                <div class="flex items-end pb-3">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="active" value="1" {{ old('active', $job->active ?? true) ? 'checked' : '' }}
                            class="w-4 h-4 rounded">
                        <span class="text-sm font-semibold text-slate-700">Active (visible on careers page)</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center gap-4 pt-2">
                <button type="submit"
                    class="inline-flex items-center gap-2 text-white font-semibold px-7 py-3 rounded-xl text-sm transition-colors"
                    style="background-color:#150958;"
                    onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
                    {{ $job->exists ? 'Save changes' : 'Create listing' }}
                </button>
                <a href="{{ route('admin.jobs.index') }}" class="text-sm text-slate-400 hover:text-slate-600 transition-colors">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
