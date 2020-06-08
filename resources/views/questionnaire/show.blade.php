<!--//steps_5 : create a view file for it like folder and file-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$questionnaire->title}}</div>
                <div class="card-body">
                <a href="/questionnaires/{{ $questionnaire->id }}/questions/create" class="btn btn-dark">Add New Question</a>
                <!--we are crating this because our controller are protected and we need to make our survey public-->
                <a href="/surveys/{{ $questionnaire->id }}-{{Str::slug($questionnaire->title) }}" class="btn btn-dark">Take Survey</a>
                </div>
            </div>
        </div>

        @foreach ($questionnaire->questions as $question)
        <div class="col-md-8">
            <div class="card mt-4">
                <div class="card-header">{{$question->question }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($question->answers as $answer)
                        <li class="list-group-item d-flex justify-content-between">
                            <div> {{ $answer->answer }}</div>
                            @if ($question->responses->count())
                            <div> {{ intval(($answer->responses->count())*100/($question->responses->count()))}}% </div>
                            @endif
                            {{-- <div> {{ $question->responses->count() }} </div> --}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            <div class="card-footer">
            <form action="/questionnaires/{{ $questionnaire->id }}/questions/{{ $question->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        Delete Question
                    </button>
                </form>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
