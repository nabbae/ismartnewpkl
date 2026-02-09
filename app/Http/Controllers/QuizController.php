<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class QuizController extends Controller
{
    /**
     * Display a listing of the quizzes.
     */
    public function index()
    {
        $quizzes = collect();

        try {
            if (Schema::hasTable('quizzes')) {
                $quizzes = Quiz::all();
            }
        } catch (\Exception $e) {
            // Silently fail
        }

        // Data Statis Sementara jika database kosong
        if ($quizzes->isEmpty()) {
            $quizzes = collect([
                (object)[
                    'id' => 1,
                    'title' => 'Matematika: Aljabar Dasar',
                    'category' => 'Matematika',
                    'duration_minutes' => 20,
                    'icon' => '📐'
                ],
                (object)[
                    'id' => 2,
                    'title' => 'Biologi: Sel & Jaringan',
                    'category' => 'Biologi',
                    'duration_minutes' => 30,
                    'icon' => '🧬'
                ],
                (object)[
                    'id' => 3,
                    'title' => 'Geografi: Struktur Bumi',
                    'category' => 'Geografi',
                    'duration_minutes' => 15,
                    'icon' => '🌍'
                ],
                (object)[
                    'id' => 4,
                    'title' => 'Kimia: Tabel Periodik',
                    'category' => 'Kimia',
                    'duration_minutes' => 40,
                    'icon' => '🧪'
                ],
            ]);
        }

        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Display the specified quiz.
     */
    public function show($id)
    {
        $quiz = null;

        try {
            if (Schema::hasTable('quizzes')) {
                $quiz = Quiz::with('questions')->find($id);
            }
        } catch (\Exception $e) {
            // Silently fail
        }

        // Logic dummy jika quiz tidak ditemukan di DB
        if (!$quiz) {
            $quiz = (object)[
                'id' => $id,
                'title' => 'Kuis Dummy #' . $id,
                'category' => 'Umum',
                'duration_minutes' => 20,
                'questions' => collect([
                    (object)[
                        'id' => 1,
                        'question_text' => 'Ini adalah soal contoh (dummy). Pertanyaan nomor 1?',
                        'option_a' => 'Jawaban A',
                        'option_b' => 'Jawaban B',
                        'option_c' => 'Jawaban C',
                        'option_d' => 'Jawaban D',
                        'option_e' => 'Jawaban E',
                    ]
                ])
            ];
        }

        return view('quizzes.show', compact('quiz'));
    }
}
