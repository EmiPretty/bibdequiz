@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Questions et Réponses</h1>
    <div class="text-end mb-4">
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
    </div>

    @foreach ($questions as $question)
        <div class="card mb-3" id="question-{{ $question->id }}">
            <div class="card-body">
                <form action="{{ route('quiz.update', $question) }}" method="POST" id="edit-question-{{ $question->id }}" class="mb-3">
                    @csrf
                    @method('PUT')
                    <div class="d-flex align-items-center">
                        <input type="text" id="input-question-{{ $question->id }}" name="title" value="{{ $question->title }}" class="form-control me-2" required>
                        <button type="submit" class="btn btn-success btn-sm me-2">Enregistrer</button>
                        <button type="button" class="btn btn-warning btn-sm me-2" onclick="focusInput('input-question-{{ $question->id }}')">Modifier</button>
                    </div>
                </form>

                <form action="{{ route('quiz.destroy', $question) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Supprimer Question</button>
                </form>

                <ul class="mt-3">
                    @foreach ($question->responses as $response)
                        <li class="mb-2" id="response-{{ $response->id }}">
                            <form action="{{ route('quiz.updateResponse', $response) }}" method="POST" id="edit-response-{{ $response->id }}" class="d-flex align-items-center">
                                @csrf
                                @method('PUT')
                                <input type="text" id="input-response-{{ $response->id }}" name="content" value="{{ $response->content }}" class="form-control me-2" required>
                                <button type="submit" class="btn btn-success btn-sm me-2">Enregistrer</button>
                                <button type="button" class="btn btn-warning btn-sm me-2" onclick="focusInput('input-response-{{ $response->id }}')">Modifier</button>
                            </form>

                            <form action="{{ route('quiz.destroyResponse', $response) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Supprimer Réponse</button>
                            </form>
                        </li>
                    @endforeach
                </ul>

                <form action="{{ route('quiz.addResponse', $question) }}" method="POST" class="mt-3">
                    @csrf
                    <div class="d-flex align-items-center">
                        <input type="text" name="content" placeholder="Nouvelle réponse" class="form-control me-2" required>
                        <button class="btn btn-primary btn-sm">Ajouter Réponse</button>
                    </div>
                </form>

                <div class="mt-3 text-end">
                    <button class="btn btn-primary btn-sm" onclick="confirmQuestion({{ $question->id }})">Confirmer</button>
                </div>
            </div>
        </div>
    @endforeach

    <h3 class="mt-4">Ajouter une Question</h3>
    <form action="{{ route('quiz.store') }}" method="POST" id="add-question-form">
        @csrf
        <div class="d-flex align-items-center">
            <input type="text" name="title" placeholder="Titre de la question" class="form-control me-2" required>
            <button class="btn btn-success">Ajouter Question</button>
        </div>
    </form>
</div>

<script>
    function focusInput(inputId) {
        const input = document.getElementById(inputId);
        if (input) {
            input.focus();
            input.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    function confirmQuestion(questionId) {
        const question = document.querySelector(`#question-${questionId}`);
        const responses = question.querySelectorAll('li');
        
        if (responses.length < 1) {
            alert('Une question doit avoir au moins une réponse.');
            return false;
        }
        if (document.querySelectorAll('.card').length > 6) {
            alert('Le nombre maximum de questions est de 6.');
            return false;
        }

        alert('Question confirmée avec succès.');
    }
</script>
@endsection
