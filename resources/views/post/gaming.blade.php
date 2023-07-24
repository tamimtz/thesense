@extends('layouts.app') 

@section ('content')




    @if(session('msg'))
    <div class="alert alert-success">

       {{ session('msg') }}
    </div>    
    @endif
    
    
    

    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="card mb-3" style="width: 20rem">
                <img src="{{ url('/storage/images/'.$post->file) }}" class="img-thumbnail m-3" alt="..." >
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ substr($post->content, 0, 200) }} <a href="{{ route('post.show', $post->id) }}">... Show More</a></p>
                  <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }} </small></p>
                  <a href="{{ route('post.show', $post->id) }}"> <button class="btn btn-dark"> Show More... </button></a>
                </div>
              </div>
              
            <!-- <ul>
                    <li>
                        <div class="card">
                            <div class="card-header">
                              {{ $post->title }} <div> Author: {{ $post->user->name }}</div>
                            </div>
                            <div class="card-body">
                              <p class="card-text">{{ substr($post->content, 0, 200) }} ...show more</p>
                              <div> <span>{{ $post->created_at->diffForHumans() }} </span></div>
                              <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Show More ...</a>
                            </div>
                        </div>
                    </li>
                </ul>
            -->
                
            @endforeach
            
        </div>
        <div>{{$posts->links()}}</div>
        
    </div>
    

@endsection


<style>
    li {

        list-style-type: none;
    }
    
</style>