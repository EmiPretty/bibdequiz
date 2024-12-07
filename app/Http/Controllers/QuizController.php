<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::with('responses')->get();
        return view('quiz', compact('questions'));
    }

    public function publicIndex()
    {
        $questions = Question::with('responses')->get();
        return view('public-quiz', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Question::create($request->all());
        return redirect()->route('quiz.index')->with('success', 'Question ajoutée avec succès.');
    }

    public function update(Request $request, Question $question)
    {
        $request->validate(['title' => 'required']);
        $question->update($request->all());
        return redirect()->route('quiz.index')->with('success', 'Question modifiée avec succès.');
    }

    public function destroy(Question $question)
    {
        $question->responses()->delete(); 
        $question->delete(); 
        return redirect()->route('quiz.index')->with('success', 'Question supprimée avec succès.');
    }

    public function addResponse(Request $request, Question $question)
    {
        $request->validate(['content' => 'required']);
        $question->responses()->create($request->all());
        return redirect()->route('quiz.index')->with('success', 'Réponse ajoutée avec succès.');
    }

    public function updateResponse(Request $request, Response $response)
    {
        $request->validate(['content' => 'required']);
        $response->update($request->all());
        return redirect()->route('quiz.index')->with('success', 'Réponse modifiée avec succès.');
    }

    public function destroyResponse(Response $response)
    {
        $response->delete();
        return redirect()->route('quiz.index')->with('success', 'Réponse supprimée avec succès.');
    }
}
