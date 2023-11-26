<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizAppController extends Controller
{
    public function check()
    {
        $data = Score::where('user_id', auth()->id());
        $cek = $data->count();
        $score = $data->sum('score');
        if ($cek != 0) {
            return redirect('/home')->with('message', 'Anda sudah pernah mengerjakan quiz sebelumnya dengan score ' . $score . '.');
        }
        return view('quiz.check');
    }

    public function index()
    {
        $data = Score::where('user_id', auth()->id());
        $score = $data->sum('score');
        $shownQuizIds = session('shown_quizzes', []);

        $availableQuizzes = Quiz::whereNotIn('id', $shownQuizIds)->get();

        if ($availableQuizzes->isEmpty()) {
            return redirect('/home')->with('message', 'Anda sudah menyelesaikan semua soal dengan score '.$score.'.');
        }

        $quiz = $availableQuizzes->random();

        $shownQuizIds[] = $quiz->id;
        session(['shown_quizzes' => $shownQuizIds]);
        $countdownTime = Session::get('countdownTime') ?? 900;

        return view('quiz.index', compact('quiz', 'countdownTime'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'answer' => 'required',
            'quiz_id' => 'required',
        ]);
        $quiz = Quiz::findOrFail($request->all()['quiz_id']);
        $score = $request->answer === $quiz->answer ? $quiz->score : 0;

        Session::put('countdownTime', $request->countdown_time);

        Score::create([
            'user_id' => auth()->id(),
            'quiz_id' => $quiz->id,
            'score' => $score,
        ]);

        $score = Score::where('user_id', auth()->id())->sum('score');

        if ($request->answer != $quiz->answer) {
            return redirect('/quiz')->with('message', 'Jawaban Anda salah! Skor Anda: ' . $score);
        }
        return redirect('/quiz')->with('message', 'Jawaban Anda benar! Skor Anda: ' . $score);
    }
}
