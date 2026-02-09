@extends('layouts.app')

@section('content')
<div class="space-y-10">
    <!-- Hero Section -->
    <section class="relative overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-ismart-blue to-ismart-purple p-8 md:p-12 shadow-2xl shadow-ismart-blue/20">
        <div class="relative z-10 max-w-2xl">
            <h1 class="text-3xl md:text-5xl font-extrabold text-white leading-tight">
                Selamat Datang kembali, <span class="text-ismart-yellow">Ahmad!</span> 👋
            </h1>
            <p class="mt-4 text-white/80 text-lg md:text-xl font-medium">
                Siap untuk mengasah kemampuanmu hari ini? Ada 5 kuis baru yang menunggu untuk kamu taklukkan.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#" class="px-8 py-4 bg-white text-ismart-blue font-bold rounded-2xl hover:bg-slate-50 transition-all duration-200 shadow-lg shadow-black/5">
                    Mulai Belajar
                </a>
                <a href="#" class="px-8 py-4 bg-white/20 text-white font-bold rounded-2xl border border-white/30 backdrop-blur-sm hover:bg-white/30 transition-all duration-200">
                    Lihat Progres
                </a>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
        <div class="absolute -bottom-20 right-20 h-64 w-64 rounded-full bg-ismart-yellow/20 blur-3xl"></div>
    </section>

    <!-- Stat Cards -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Ringkasan Aktivitas</h2>
            <a href="#" class="text-ismart-blue font-bold text-sm hover:underline">Lihat Detail</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Stat 1 -->
            <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-ismart-blue/10 rounded-2xl group-hover:bg-ismart-blue transition-colors duration-300">
                        <svg class="w-6 h-6 text-ismart-blue group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Total Kuis</span>
                </div>
                <div class="flex items-baseline space-x-2">
                    <span class="text-4xl font-extrabold text-slate-900">24</span>
                    <span class="text-sm font-bold text-ismart-green">+3 hari ini</span>
                </div>
                <p class="mt-2 text-slate-500 font-medium">Kuis telah diselesaikan</p>
            </div>

            <!-- Stat 2 -->
            <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-ismart-purple/10 rounded-2xl group-hover:bg-ismart-purple transition-colors duration-300">
                        <svg class="w-6 h-6 text-ismart-purple group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Rata-rata Skor</span>
                </div>
                <div class="flex items-baseline space-x-2">
                    <span class="text-4xl font-extrabold text-slate-900">85%</span>
                    <span class="text-sm font-bold text-ismart-green">Naik 5%</span>
                </div>
                <p class="mt-2 text-slate-500 font-medium">Performa belajar stabil</p>
            </div>

            <!-- Stat 3 -->
            <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-ismart-yellow/10 rounded-2xl group-hover:bg-ismart-yellow transition-colors duration-300">
                        <svg class="w-6 h-6 text-ismart-yellow group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Waktu Belajar</span>
                </div>
                <div class="flex items-baseline space-x-2">
                    <span class="text-4xl font-extrabold text-slate-900">12j</span>
                    <span class="text-sm font-bold text-slate-400">Minggu ini</span>
                </div>
                <p class="mt-2 text-slate-500 font-medium">Terus tingkatkan fokusmu!</p>
            </div>
        </div>
    </section>

    <!-- Popular Quizzes -->
    <section>
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-slate-800 tracking-tight">Kuis Populer untuk Kamu</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
             <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="h-32 bg-ismart-blue/10 flex items-center justify-center group-hover:bg-ismart-blue/20 transition-colors">
                     <span class="text-4xl">📐</span>
                </div>
                <div class="p-6">
                    <span class="px-3 py-1 bg-ismart-blue/10 text-ismart-blue text-[10px] font-bold uppercase rounded-full">Matematika</span>
                    <h3 class="mt-3 font-bold text-slate-900">Aljabar Dasar</h3>
                    <p class="mt-1 text-slate-500 text-sm font-medium">15 Soal • 20 Menit</p>
                    <button class="mt-4 w-full py-3 bg-slate-50 text-slate-900 font-bold rounded-xl hover:bg-ismart-blue hover:text-white transition-all duration-200">
                        Mulai Kuis
                    </button>
                </div>
             </div>
             <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="h-32 bg-ismart-green/10 flex items-center justify-center group-hover:bg-ismart-green/20 transition-colors">
                     <span class="text-4xl">🧬</span>
                </div>
                <div class="p-6">
                    <span class="px-3 py-1 bg-ismart-green/10 text-ismart-green text-[10px] font-bold uppercase rounded-full">Biologi</span>
                    <h3 class="mt-3 font-bold text-slate-900">Sel & Jaringan</h3>
                    <p class="mt-1 text-slate-500 text-sm font-medium">20 Soal • 30 Menit</p>
                    <button class="mt-4 w-full py-3 bg-slate-50 text-slate-900 font-bold rounded-xl hover:bg-ismart-blue hover:text-white transition-all duration-200">
                        Mulai Kuis
                    </button>
                </div>
             </div>
             <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="h-32 bg-ismart-red/10 flex items-center justify-center group-hover:bg-ismart-red/20 transition-colors">
                     <span class="text-4xl">🌍</span>
                </div>
                <div class="p-6">
                    <span class="px-3 py-1 bg-ismart-red/10 text-ismart-red text-[10px] font-bold uppercase rounded-full">Geografi</span>
                    <h3 class="mt-3 font-bold text-slate-900">Struktur Bumi</h3>
                    <p class="mt-1 text-slate-500 text-sm font-medium">10 Soal • 15 Menit</p>
                    <button class="mt-4 w-full py-3 bg-slate-50 text-slate-900 font-bold rounded-xl hover:bg-ismart-blue hover:text-white transition-all duration-200">
                        Mulai Kuis
                    </button>
                </div>
             </div>
             <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group">
                <div class="h-32 bg-ismart-purple/10 flex items-center justify-center group-hover:bg-ismart-purple/20 transition-colors">
                     <span class="text-4xl">🧪</span>
                </div>
                <div class="p-6">
                    <span class="px-3 py-1 bg-ismart-purple/10 text-ismart-purple text-[10px] font-bold uppercase rounded-full">Kimia</span>
                    <h3 class="mt-3 font-bold text-slate-900">Tabel Periodik</h3>
                    <p class="mt-1 text-slate-500 text-sm font-medium">25 Soal • 40 Menit</p>
                    <button class="mt-4 w-full py-3 bg-slate-50 text-slate-900 font-bold rounded-xl hover:bg-ismart-blue hover:text-white transition-all duration-200">
                        Mulai Kuis
                    </button>
                </div>
             </div>
        </div>
    </section>
</div>
@endsection
