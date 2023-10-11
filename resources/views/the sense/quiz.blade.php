@extends('layouts.app')

@section('content')



<div class="container">
    <h1 class="title">You Think You Know Enough Try The Quiz</h1>
</div>
<div class="row">

  
    <div class="card col-3 card-custom-background ">
      <a class="noDecoration" href="{{ route('quiz.dota2Quiz') }}">
        <h3 class="title">Dota 2 Quizes</h4>
        <p class="text"> test your dota2 Knowlwdge</p>
    
        <img class="quiz-thumb" src="/storage/images/dota2_quiz_thumb.png" alt="">    

        <p class="text">
      beat the highest score
    </p>
      </a>
    </div>
 
    


    <div class="card col-3 card-custom-background ">
                 
            <h3 class="title">Anime Quizes</h4>
            <p class="text"> test your dota2 Knowlwdge</p>
          
          <img class="quiz-thumb" src="/storage/images/showPostBg.jpg" alt="">    
    </div>


</div>

@endsection