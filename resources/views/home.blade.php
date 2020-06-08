@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="/questionnaires/create" class="btn btn-dark"> Create New Questionnaire</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">My Questionnaire</div>

                <div class="card-body">
                    @foreach ($questionnaires as $questionnaire)
                    <ul class="list-group">
                        <li class="list-group-item">
                        <a href="{{ $questionnaire->path() }}"> {{ $questionnaire->title}}</a>
                        <div class="mt-2">
                            <small class="font-weight-bold">
                                Share Url
                            </small>
                            <p>
                                <a href="{{ $questionnaire->publicPath() }}">{{ $questionnaire->publicPath() }}</a>
                            </p>
                        </div>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
