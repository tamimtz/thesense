@extends('layouts.app')


@section('content')


<div class="container">
    <h1 class="title">
         Add A Fantastic Quiz
    </h1>
</div>

<div class="container quiz-form ">
    <form action="{{ route('quiz.newQuiz') }}" method="POST">
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
                <option value="anime">dota2</option>
                <option value="games">valorant</option>
                <option value="games">dragon ball</option>
                <option value="games">demon slayer</option>
                
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