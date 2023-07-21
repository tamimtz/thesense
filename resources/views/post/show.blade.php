@extends('layouts.app')

@section('content')


@if(session('msg'))
    <div class="alert alert-success">

       {{ session('msg') }}
    </div>    
@endif

  
<div class="container post">
    <div class="col post">
      
        <div class="card post text-center" >
            <img src="{{ url('/storage/images/'.$post->file) }}" class="post-image"   >
            <div class="card-header">
              {{ $post->title }}
            </div>
            <div class="card-body">
                
              <h5 class="card-title">Author: {{ $post->user->name}}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <a href="{{ route('post.index') }}" class="btn btn-dark">Home</a>
            </div>
            <div class="card-footer text-muted">
              {{ $post->created_at->diffForHumans() }}
            </div>
          </div>
    </div>





@foreach($comments as $comment)

  <div class="card">
      <div class="card-header">
        {{ $comment->user->name }}
      </div>
      <div class="card-body">
        <p class="card-text">{{ $comment->content }}</p>
        <div> <span>{{ $comment->created_at->diffForHumans() }} </span></div>
        
      </div>
  </div>
      
@endforeach
 

    <div class="container p-3 text-center">

      <form action="{{ route('comment.store', $post->id ) }}" method="POST">
        @csrf
        <textarea rows="5" cols="80" name="content" class="form-controller"></textarea>
        <div>
          <button type="submit" class="btn btn-success">Comment</button>
        </div>  
      </form>


    </div>
</div>
@endsection