@extends('layouts.app')


@section('content')


<div class="container">
    <h1 class="title">
         Add A Fantastic Quiz
    </h1>
</div>

@if(session('quizForm1Data'))
    <h3 class="quizCreate">Adding Quiz </h3>
    <p class="quizCreate">Title:   {{ session('quizForm1Data')['quiz_name'] }}</p>
    <p class="quizCreate">Category: {{ session('quizForm1Data')['category'] }}</p>

@endif

<div class="container quiz-form ">
    <form action="{{ route('quiz.createQuiz2') }}" method="POST">
        @method('POST')
        @csrf
        
        <div class="col-6">
            <label for="quizCategory" class="form-label">Quiz Title</label>
            <input type="text" name="quiz_name" placeholder="Quiz Name" class="form-control mt-2">
        </div>

        <div class="col-2">
            <label for="category" class="form-label mt-2">Category</label>
            <select name="category" class="form-select mt-2" id="quizCategory" aria-label="Default select example">
                <option selected>Quiz Category</option>
                <option value="anime">Anime</option>
                <option value="games">Games</option>
        
            </select>
        </div>


        <div class="col-2">
            <label for="sub_category" class="form-label mt-2">Sub Category</label>

            <select name="sub_category" class="form-select mt-2" id="quizCategory" aria-label="Default select example">
                <option selected>Sub Category</option>
                <option value="anime">Anime</option>
                <option value="games">Games</option>
                
            </select>

        </div>


        <div class="col-6">
            <label for="desctiption" class="form-label mt-2">Description</label>
            <textarea name="description" id="" class="form-control mt-2"></textarea>

        </div>
        <div class="col-3 mt-3">
            <button type="submit"  class="btn btn-dark mt-3 col-4" > Proceed</button>
    
        </div>
         

    </form>

</div>



@endsection