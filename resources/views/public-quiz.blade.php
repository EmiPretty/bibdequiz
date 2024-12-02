@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Questions et Réponses</h1>
    @foreach ($questions as $question)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $question->title }}</h5>
                <ul>
                    @foreach ($question->responses as $response)
                        <li>{{ $response->content }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection
