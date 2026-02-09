@extends('layouts.app')

@section('content')
<div class="space-y-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Kuis Mandiri</h1>
            <p class="text-slate-500 font-medium mt-1">Pilih materi yang ingin kamu kuasai hari ini.</p>
        </div>
        <div class="flex items-center space-x-3">
            <span class="text-sm font-bold text-slate-400">Filter:</span>
            <select class="bg-white border-none rounded-xl px-4 py-2 text-sm font-bold shadow-sm focus:ring-2 focus:ring-ismart-blue cursor-pointer">
                <option>Semua Kategori</option>
                <option>Matematika</option>
                <option>Sains</option>
                <option>Bahasa</option>
            </select>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($quizzes as $quiz)
        <div class="bg-white rounded-3xl overflow-hidden border border-slate-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
            <div class="h-32 {{ $loop->index % 4 == 0 ? 'bg-ismart-blue/10' : ($loop->index % 4 == 1 ? 'bg-ismart-green/10' : ($loop->index % 4 == 2 ? 'bg-ismart-red/10' : 'bg-ismart-purple/10')) }} flex items-center justify-center group-hover:opacity-80 transition-opacity">
                 <span class="text-4xl">{{ $quiz->icon ?? '📝' }}</span>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <span class="inline-block px-3 py-1 {{ $loop->index % 4 == 0 ? 'bg-ismart-blue/10 text-ismart-blue' : ($loop->index % 4 == 1 ? 'bg-ismart-green/10 text-ismart-green' : ($loop->index % 4 == 2 ? 'bg-ismart-red/10 text-ismart-red' : 'bg-ismart-purple/10 text-ismart-purple')) }} text-[10px] font-bold uppercase rounded-full w-fit">
                    {{ $quiz->category }}
                </span>
                <h3 class="mt-3 font-bold text-slate-900 text-lg leading-tight">{{ $quiz->title }}</h3>
                <p class="mt-2 text-slate-500 text-sm font-medium">{{ $quiz->questions_count ?? '15' }} Soal • {{ $quiz->duration_minutes }} Menit</p>
                <div class="mt-auto pt-6">
                    <a href="{{ route('quizzes.show', $quiz->id) }}" class="block w-full text-center py-3 bg-slate-50 text-slate-900 font-bold rounded-xl hover:bg-ismart-blue hover:text-white transition-all duration-200">
                        Mulai Kuis
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
