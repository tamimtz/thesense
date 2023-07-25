@extends('layouts.app')


@section('content')


<div class="container">
    <h1 class="title">
        Please Add A Fantastic Quiz
    </h1>
</div>

<div class="container quiz-form">
    <form>
    
        
        <div class="mb-3">
            <label for="quizCategory" class="form-label">Quiz Title</label>
            <select class="form-select" id="quizCategory" aria-label="Default select example">
                <option selected>Select Quiz Category</option>
                <option value="1">Dota2</option>
                <option value="2">Dragon Ball</option>
                
              </select>
            <label for="quizQuestion" class="form-label">Quiz Question</label>
            <input type="text" class="form-control" id="quizQuestion" placeholder="New Question">
          </div>




    </form>
</div>



@endsection