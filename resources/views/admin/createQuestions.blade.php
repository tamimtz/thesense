@extends('layouts.app')


@section('content')



<div class="quiz-form">
    <h1 class="title">
         Add A Fantastic Quiz
    </h1>
</div>



<body>
    <div class=" row quiz-form">
        <div class="col-8">
            <form action="{{ route('quiz.createQuestions') }}" id="question_form" method="POST" enctype="multipart/form-data">
                @csrf
                
                @method('Post')
                
                  
                
                <button type="submit" class="btn btn-dark ms-5 mt-5">Proceed</button>
                
            </form>
            <div class="">
                <button class="btn btn-dark ms-5 mt-5 float-bottom" onclick="add_more_question()">Add More</button>
                
                
            </div>
        </div>

        <div class="col-4">
            <div class="container">
                @if(session('quizForm1Data'))
                <h3 class="quizCreate">Adding Quiz </h3>
                <p class="quizCreate">Title:   {{ session('quizForm1Data')['quiz_name'] }}</p>
                <p class="quizCreate">Category: {{ session('quizForm1Data')['category'] }}</p>
                <p class="quizCreate">Description: {{ session('quizForm1Data')['description'] }}</p>

            @endif
            </div>
           
        </div>
        
        

    </div>

   <script src="{{ asset('frontEnd/js/scripts.js') }}"></script>
   <script src="{{ asset('frontEnd/js/jquery-3.7.0.min.js') }}"></script>



@endsection