<?php

namespace App\Http\Middleware;

use Closure;

class QuizTimer
{
    public function handle($request, Closure $next)
    {

        $timeout = now()->addMinutes(1);

        if (now() > $timeout) {
            return redirect('/quiz')->with('message', 'Waktu pengerjaan habis.');
        }

        $request->quiz_id = $request->session()->get('quiz_id');
        return $next($request);
    }
}