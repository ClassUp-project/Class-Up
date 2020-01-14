@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$questionnaire->title}}</div>

                <div class="card-body">

                <a class="btn btn-dark" href="/questionnaires/{{ $questionnaire->id }}/question/create">Add new question</a>
                </div>
            </div>

            @foreach ($questionnaire->questions as $question)
            <div class="card">
                <div class="card-header">{{$questionnaire->title}}</div>
    
                <div class="card-body">
                <ul class="list-group">
                    @foreach ($question->answers as $answer)
                <li class="list-group-item">{{$answer->answer}}Dapibus ac facilisis in</li>
                    
                @endforeach
                  </ul>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</div>
@endsection