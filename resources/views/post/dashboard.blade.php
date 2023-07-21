@extends('layouts.app')
@section('content')


@if(session('msg'))
    <div class="alert alert-success">

       {{ session('msg') }}
    </div>    
    @endif

<table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">id</th>
        <th scope="col">title</th>
        <th scope="col">edit </th>
        <th scope="col">delete</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($myPosts as $post)
    
      
      <tr>
        <td scope="row">{{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-success" >Edit</a>
        </td>
        <td>
            <form action="{{ route('post.destroy', $post) }}" method="POST">

              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onClick="return confirm('are you sure you want to delete? {{ $post->title }}')" >
                Delete
              </button>

            </form>
        </td>

        
      </tr>
    @endforeach  
    </tbody> 
  </table>
  <div>
    {{ $myPosts->links() }}
  </div>


@endsection