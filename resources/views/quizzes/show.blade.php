@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto space-y-8">
    <!-- Header Kuis -->
    <div class="flex items-center justify-between">
        <a href="{{ route('quizzes.index') }}" class="flex items-center text-slate-500 font-bold hover:text-ismart-blue transition-colors group">
            <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Kembali
        </a>
        <div class="px-6 py-2 bg-white rounded-2xl shadow-sm border border-slate-100 flex items-center space-x-3">
            <svg class="w-5 h-5 text-ismart-red animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-slate-900 font-bold tabular-nums">{{ $quiz->duration_minutes }}:00</span>
        </div>
    </div>

    <!-- Judul & Info -->
    <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-sm relative overflow-hidden">
        <div class="relative z-10">
            <span class="px-4 py-1.5 bg-ismart-blue/10 text-ismart-blue text-xs font-bold uppercase rounded-full tracking-wider">
                {{ $quiz->category }}
            </span>
            <h1 class="mt-4 text-3xl font-extrabold text-slate-900">{{ $quiz->title }}</h1>
            <p class="mt-2 text-slate-500 font-medium">Harap baca setiap pertanyaan dengan teliti sebelum menjawab.</p>
        </div>
        <div class="absolute -right-10 -top-10 w-40 h-40 bg-ismart-blue/5 rounded-full"></div>
    </div>

    <!-- Question Container (Placeholder for now) -->
    <div class="space-y-6">
        @foreach($quiz->questions as $index => $question)
        <div class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm">
            <div class="flex items-start space-x-4">
                <div class="w-10 h-10 rounded-xl bg-slate-900 text-white flex items-center justify-center font-bold flex-shrink-0">
                    {{ $index + 1 }}
                </div>
                <div class="flex-grow">
                    <p class="text-xl font-bold text-slate-800 leading-relaxed">
                        {{ $question->question_text }}
                    </p>

                    <div class="mt-8 space-y-3">
                        @foreach(['a', 'b', 'c', 'd', 'e'] as $opt)
                        @php $optField = "option_" . $opt; @endphp
                        <label class="group flex items-center p-4 rounded-2xl border-2 border-slate-50 hover:border-ismart-blue hover:bg-ismart-blue/5 cursor-pointer transition-all duration-200">
                            <input type="radio" name="question_{{ $question->id }}" class="w-5 h-5 text-ismart-blue border-slate-300 focus:ring-ismart-blue">
                            <span class="ml-4 font-bold text-slate-400 group-hover:text-ismart-blue uppercase">{{ $opt }}.</span>
                            <span class="ml-2 font-medium text-slate-600 group-hover:text-slate-900">{{ $question->$optField }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="flex justify-end pb-10">
        <button class="px-10 py-4 bg-ismart-blue text-white font-bold rounded-2xl shadow-lg shadow-ismart-blue/30 hover:bg-blue-600 transform hover:-translate-y-1 transition-all duration-200">
            Selesaikan Kuis
        </button>
    </div>
</div>
@endsection
