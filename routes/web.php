<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware(['check.admin'])->group(function () {
    Route::resource('quizzes', App\Http\Controllers\QuizController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('/upload-csv', function () {
        return view('quizzes.upload-csv');
    });
    Route::post('/import-csv', [App\Http\Controllers\QuizController::class, 'importQuizData'])->name('import');
});

Route::middleware(['quiz.timer'])->group(function () {
    Route::get('/check', [App\Http\Controllers\QuizAppController::class, 'check'])->name('check');
    Route::get('/quiz', [App\Http\Controllers\QuizAppController::class, 'index'])->name('quiz.index');
    Route::post('/quiz/submit', [App\Http\Controllers\QuizAppController::class, 'submit'])->name('quiz.submit');
});