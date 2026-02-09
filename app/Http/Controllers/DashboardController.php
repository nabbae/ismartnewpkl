<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index()
    {
        $popularQuizzes = collect();

        try {
            if (Schema::hasTable('quizzes')) {
                $popularQuizzes = Quiz::limit(4)->get();
            }
        } catch (\Exception $e) {
            // Silently fail and use dummy data
        }

        // Fallback dummy data
        if ($popularQuizzes->isEmpty()) {
            $popularQuizzes = collect([
                (object)['id' => 1, 'title' => 'Aljabar Dasar', 'category' => 'Matematika', 'duration_minutes' => 20, 'icon' => '📐', 'color' => 'blue'],
                (object)['id' => 2, 'title' => 'Sel & Jaringan', 'category' => 'Biologi', 'duration_minutes' => 30, 'icon' => '🧬', 'color' => 'green'],
                (object)['id' => 3, 'title' => 'Struktur Bumi', 'category' => 'Geografi', 'duration_minutes' => 15, 'icon' => '🌍', 'color' => 'red'],
                (object)['id' => 4, 'title' => 'Tabel Periodik', 'category' => 'Kimia', 'duration_minutes' => 40, 'icon' => '🧪', 'color' => 'purple'],
            ]);
        }

        return view('dashboard', compact('popularQuizzes'));
    }
}
