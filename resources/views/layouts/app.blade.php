<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'Zerta connects growing companies with senior remote engineers for staff augmentation, dedicated teams, and software outsourcing.')">
    <meta name="keywords" content="@yield('keywords', 'hire developers, remote developers, staff augmentation, dedicated teams, software outsourcing, remote engineering')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Zerta">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Zerta — Hire Senior Remote Developers')">
    <meta property="og:description" content="@yield('description', 'Zerta connects growing companies with senior remote engineers for staff augmentation, dedicated teams, and software outsourcing.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-cover.jpg'))">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@zerta">
    <meta name="twitter:title" content="@yield('title', 'Zerta — Hire Senior Remote Developers')">
    <meta name="twitter:description" content="@yield('description', 'Zerta connects growing companies with senior remote engineers.')">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>@yield('title', 'Zerta — Hire Senior Remote Developers')</title>

    {{-- Preconnect for faster Google Fonts loading --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')

    {{-- SiteLock trust seal --}}
    <!-- <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=zertahq.com','SiteLock','width=600,height=600,left=160,top=170');"><img class="img-fluid" alt="SiteLock" title="SiteLock" src="https://shield.sitelock.com/shield/zertahq.com" /></a> -->
</head>
<body class="font-sans antialiased bg-white text-slate-800">

    <x-navbar />

    <main id="main-content" role="main">
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')

</body>
</html>
