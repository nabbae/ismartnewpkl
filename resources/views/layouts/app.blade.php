<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'iSMART') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#F8FAFC] text-slate-900">
    <div class="min-h-screen">
        <!-- Top Navigation -->
        <nav class="bg-white/80 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-2xl font-extrabold tracking-tight">
                                <span class="text-ismart-red">i</span><span class="text-ismart-blue">S</span><span class="text-ismart-green">M</span><span class="text-ismart-yellow">A</span><span class="text-ismart-purple">R</span><span class="text-ismart-blue">T</span>
                            </span>
                        </div>
                        <div class="hidden sm:ml-12 sm:flex sm:space-x-8">
                            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'border-ismart-blue text-slate-900' : 'border-transparent text-slate-500' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-semibold hover:text-ismart-blue transition-all duration-200">Dashboard</a>
                            <a href="{{ route('quizzes.index') }}" class="{{ request()->routeIs('quizzes.*') ? 'border-ismart-blue text-slate-900' : 'border-transparent text-slate-500' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:text-ismart-blue transition-all duration-200">Kuis Mandiri</a>
                            <a href="{{ route('history') }}" class="{{ request()->routeIs('history') ? 'border-ismart-blue text-slate-900' : 'border-transparent text-slate-500' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium hover:text-ismart-blue transition-all duration-200">Riwayat Belajar</a>
                        </div>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-6">
                        <button class="bg-slate-50 p-2.5 rounded-xl text-slate-400 hover:text-ismart-blue hover:bg-slate-100 focus:outline-none transition-all duration-200">
                            <span class="sr-only">Notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <div class="flex items-center space-x-4 pl-4 border-l border-slate-100">
                            <div class="text-right hidden md:block">
                                <p class="text-sm font-bold text-slate-900 leading-none">Ahmad Siswa</p>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">Siswa Pintar</p>
                            </div>
                            <div class="h-11 w-11 rounded-2xl bg-gradient-to-br from-ismart-blue to-ismart-purple p-0.5 shadow-lg shadow-ismart-blue/20">
                                <img class="h-full w-full rounded-[14px] object-cover border-2 border-white" src="https://ui-avatars.com/api/?name=Ahmad+Siswa&background=fff&color=4D79FF" alt="Profile">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>

        <footer class="py-10 text-center text-slate-400 text-sm">
            &copy; {{ date('Y') }} iSMART Learning Platform. Built with ❤️ for Education.
        </footer>
    </div>
</body>
</html>
