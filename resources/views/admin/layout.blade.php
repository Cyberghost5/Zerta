<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') — Zerta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">

<div class="min-h-full">
    {{-- Top nav --}}
    <nav style="background-color:#150958;" class="shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-8">
                    <a href="{{ route('admin.dashboard') }}" class="text-white font-black text-lg tracking-tight">
                        Zerta <span class="font-light opacity-60">Admin</span>
                    </a>
                    <div class="hidden md:flex items-center gap-1">
                        <a href="{{ route('admin.dashboard') }}"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                            Dashboard
                        </a>
                        <a href="{{ route('admin.submissions.index') }}"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('admin.submissions*') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                            Contact
                        </a>
                        <a href="{{ route('admin.applications.index') }}"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('admin.applications*') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                            Applications
                        </a>
                        <a href="{{ route('admin.jobs.index') }}"
                           class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('admin.jobs*') ? 'bg-white/20 text-white' : 'text-slate-300 hover:text-white hover:bg-white/10' }}">
                            Job Listings
                        </a>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="text-slate-300 hover:text-white text-sm transition-colors">Sign out</button>
                </form>
            </div>
        </div>
    </nav>

    {{-- Page content --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        @if(session('success'))
        <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-800">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </main>
</div>

</body>
</html>
