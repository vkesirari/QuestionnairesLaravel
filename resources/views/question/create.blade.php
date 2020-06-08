<!--//steps_5 : create a view file for it like folder and file-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>
            <form action="/questionnaires/{{ $questionnaire->id}}/questions/" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="question">Question</label>
                    <input name="question[question]" type="text" class="form-control" id="question" aria-describedby="questionHelp" placeholder="Enter question" value="" {{ old('question.question') }}>
                        @error('question.question')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                        <small id="questionHelp" class="form-text text-muted">Ask simple and to the point question.</small>
                    </div>
                    <div class="form-group">
                        <fieldset>
                          <legend>choices</legend>
                          <small id="choicesHelp" class="form-text text-muted">Give choice</small>
                          <div>
                            <div class="form-group">
                                <label for="answer1">Choice 1</label>
                                <input name="answers[][answer]" type="text" class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1"  value="" {{ old('answers.0.answer') }}>
                                @error('answers.0.answer')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                          </div>
                          
                          <div>
                            <div class="form-group">
                                <label for="answer2">Choice 2</label>
                                <input name="answers[][answer]" type="text" class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2">
                                @error('answers.1.answer')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                          </div>

                          <div>
                            <div class="form-group">
                                <label for="answer3">Choice 3</label>
                                <input name="answers[][answer]" type="text" class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice 3">
                                @error('answers.2.answer')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                          </div>

                          <div>
                            <div class="form-group">
                                <label for="answer4">Choice 4</label>
                                <input name="answers[][answer]" type="text" class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice 4">
                                @error('answers.3.answer')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                          </div>
                        </fieldset>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
