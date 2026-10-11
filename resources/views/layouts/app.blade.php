<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TugasWeb-P9-LaravelSetup') | Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: { ink: '#0b1020', panel: '#111a30', accent: '#818cf8' }
                }
            }
        };
    </script>
    <style>
        body { font-family: Inter, sans-serif; }
        .glass { background: rgba(17, 26, 48, .78); backdrop-filter: blur(14px); }
    </style>
    @stack('head')
</head>
<body class="min-h-screen bg-ink text-slate-100 antialiased flex flex-col">
    <header class="sticky top-0 z-50 border-b border-white/10 glass">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4" aria-label="Navigasi utama">
            <a href="{{ route('home') }}" class="flex items-center gap-3 font-extrabold tracking-tight">
                <span class="grid h-10 w-10 place-items-center rounded-xl bg-indigo-500 text-white"><i class="fa-solid fa-code"></i></span>
                <span>TugasWeb<span class="text-indigo-300"> P9</span></span>
            </a>
            <button id="menu-toggle" class="rounded-lg border border-white/10 px-3 py-2 md:hidden" aria-label="Buka menu" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div id="nav-links" class="hidden absolute left-0 right-0 top-full flex-col gap-1 border-b border-white/10 bg-ink p-4 md:static md:flex md:flex-row md:items-center md:gap-2 md:border-0 md:bg-transparent md:p-0">
                <a class="rounded-lg px-4 py-2 text-sm text-slate-300 transition hover:bg-white/5 hover:text-white {{ request()->routeIs('home') ? 'bg-white/5 text-white' : '' }}" href="{{ route('home') }}">Beranda</a>
                <a class="rounded-lg px-4 py-2 text-sm text-slate-300 transition hover:bg-white/5 hover:text-white {{ request()->routeIs('about') ? 'bg-white/5 text-white' : '' }}" href="{{ route('about') }}">Tentang</a>
                <a class="rounded-lg px-4 py-2 text-sm text-slate-300 transition hover:bg-white/5 hover:text-white {{ request()->routeIs('contact') ? 'bg-white/5 text-white' : '' }}" href="{{ route('contact') }}">Kontak</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto w-full max-w-6xl flex-1 px-5 py-10 md:py-14">
        @yield('content')
    </main>

    <footer class="border-t border-white/10">
        <div class="mx-auto flex max-w-6xl flex-col gap-2 px-5 py-7 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} TugasWeb-P9-LaravelSetup</p>
            <p class="flex items-center gap-2"><i class="fa-brands fa-laravel text-red-400"></i> Dibangun dengan Laravel 11</p>
        </div>
    </footer>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');
        menuToggle?.addEventListener('click', () => {
            const isHidden = navLinks.classList.toggle('hidden');
            navLinks.classList.toggle('flex', !isHidden);
            menuToggle.setAttribute('aria-expanded', String(!isHidden));
        });
    </script>
    @stack('scripts')
</body>
</html>
