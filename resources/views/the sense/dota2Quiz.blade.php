@extends('layouts.app')

@section('content')


<div class="container posts">
    <div class="row">

        @foreach ($dota2Quiz as $quiz )
        <div class="col-3">
             <div class="card card-custom-background mb-3">
            
                <h1 class="text">
                    {{ $quiz->quiz_name }}

                    
                </h1>
                <p class="text">
                    {{ $quiz->description. $quiz->quiz_id}}
                </p>
                
                <p>
                    {{ $quiz->questions->first()->question_id }}
                </p>
                   
                                
            </div>
            
        </div>
            
        @endforeach
        
    </div>

</div>




@endsection