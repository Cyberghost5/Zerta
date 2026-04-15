<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Zerta</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex items-center justify-center">
<div class="w-full max-w-sm">
    <div class="text-center mb-8">
        <div class="inline-flex bg-white rounded-xl px-4 py-2.5 shadow-sm mb-4">
            <img src="{{ asset('assets/image/logo.svg') }}" alt="Zerta" class="h-7 w-auto">
        </div>
        <p class="text-slate-500 text-sm">Admin Panel</p>
    </div>
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
        <h1 class="text-xl font-black text-slate-900 mb-6">Sign in</h1>
        <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
            @csrf
            <div>
                <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                <input type="password" id="password" name="password" required autofocus
                    class="w-full border border-slate-200 rounded-lg px-4 py-3 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#8dc63f] focus:border-transparent transition @error('password') border-red-400 @enderror">
                @error('password')
                <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit"
                class="w-full text-white font-semibold py-3 rounded-xl text-sm transition-colors"
                style="background-color:#150958;"
                onmouseover="this.style.backgroundColor='#0e0640'" onmouseout="this.style.backgroundColor='#150958'">
                Sign in
            </button>
        </form>
    </div>
    <p class="mt-6 text-center text-xs text-slate-400">
        <a href="{{ route('home') }}" class="hover:text-slate-600 transition-colors">← Back to website</a>
    </p>
</div>
</body>
</html>
