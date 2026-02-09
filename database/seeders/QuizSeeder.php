<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quiz = Quiz::create([
            'title' => 'Matematika Dasar: Aljabar',
            'category' => 'Matematika',
            'duration_minutes' => 30,
        ]);

        $questions = [
            [
                'question_text' => 'Berapakah hasil dari 2x + 5 = 15?',
                'option_a' => 'x = 3',
                'option_b' => 'x = 4',
                'option_c' => 'x = 5',
                'option_d' => 'x = 6',
                'option_e' => 'x = 7',
                'correct_answer' => 'C',
            ],
            [
                'question_text' => 'Hasil dari (a + b)² adalah...',
                'option_a' => 'a² + b²',
                'option_b' => 'a² - b²',
                'option_c' => 'a² + 2ab + b²',
                'option_d' => 'a² - 2ab + b²',
                'option_e' => '2a + 2b',
                'correct_answer' => 'C',
            ],
            [
                'question_text' => 'Jika x = 2 dan y = 3, berapakah nilai dari 3x + 2y?',
                'option_a' => '10',
                'option_b' => '11',
                'option_c' => '12',
                'option_d' => '13',
                'option_e' => '14',
                'correct_answer' => 'C',
            ],
            [
                'question_text' => 'Faktorisasi dari x² - 9 adalah...',
                'option_a' => '(x - 3)(x - 3)',
                'option_b' => '(x + 3)(x + 3)',
                'option_c' => '(x + 3)(x - 3)',
                'option_d' => '(x - 9)(x + 1)',
                'option_e' => '(x + 9)(x - 1)',
                'correct_answer' => 'C',
            ],
            [
                'question_text' => 'Berapakah nilai x jika 5x - 10 = 0?',
                'option_a' => '1',
                'option_b' => '2',
                'option_c' => '3',
                'option_d' => '4',
                'option_e' => '5',
                'correct_answer' => 'B',
            ],
        ];

        foreach ($questions as $q) {
            Question::create(array_merge($q, ['quiz_id' => $quiz->id]));
        }
    }
}
