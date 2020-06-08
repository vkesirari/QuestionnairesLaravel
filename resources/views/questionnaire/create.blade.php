<!--//steps_5 : create a view file for it like folder and file-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>
                <form action="/questionnaires" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                        @error('title')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                        <small id="titleHelp" class="form-text text-muted">Give your Questionnaire.</small>
                    </div>
                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpose">
                        @error('purpose')
                        <small style="color:red">{{$message}}</small>
                        @enderror
                        <small id="purposeHelp" class="form-text text-muted">Giving a Purpose will increase your response.</small>
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
