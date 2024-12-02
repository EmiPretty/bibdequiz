<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))->name('welcome');

require __DIR__.'/auth.php';

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::get('/public-quiz', [QuizController::class, 'publicIndex'])->name('public.quiz');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/quiz', [QuizController::class, 'store'])->name('quiz.store');
    Route::put('/quiz/{question}', [QuizController::class, 'update'])->name('quiz.update');
    Route::delete('/quiz/{question}', [QuizController::class, 'destroy'])->name('quiz.destroy');

    Route::post('/quiz/{question}/responses', [QuizController::class, 'addResponse'])->name('quiz.addResponse');
    Route::put('/responses/{response}', [QuizController::class, 'updateResponse'])->name('quiz.updateResponse');
    Route::delete('/responses/{response}', [QuizController::class, 'destroyResponse'])->name('quiz.destroyResponse');
});
