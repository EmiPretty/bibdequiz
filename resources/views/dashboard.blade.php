@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Questions et Réponses</h1>
    <div class="text-end mb-4">
        <a href="{{ route('quiz.index') }}" class="btn btn-primary">Voir la page des Quiz</a>
    </div>
    @php
        $questionCount = 0;
    @endphp
    @foreach ($questions as $question)
        @if ($question->responses->count() > 0)
            @php
                $questionCount++;
            @endphp
            @if ($questionCount <= 6)
                <div class="card mb-3" id="question-{{ $question->id }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $question->title }}</h5>
                        <ul class="mt-3">
                            @foreach ($question->responses as $response)
                                <li class="mb-2" id="response-{{ $response->id }}">
                                    {{ $response->content }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        @endif
    @endforeach

    @if ($questionCount === 0)
        <p class="text-center mt-4">Aucune question disponible pour l'instant.</p>
    @endif
</div>
@endsection
