@extends('layouts.app')

@section('content')



<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="profile_pic">
        @isset($user->file)
          
        <img src="{{url('/storage/'.$user->file)  }}" class="img-fluid " alt="...">
        @else
        <img src="{{url('/storage/images/defaultP.jpg')  }}" class="img-fluid" alt="...">

        @endisset
        
        <h3 class="text-center bg-dark text-light">{{ $user->name}}</h3>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">My Posts: {{ $userPosts }}</h5>
        <p class="card-text">Using "Sense" for: {{$user->created_at->diffForHumans() }}</p>
        <div>
            <p class="showPosts" data-bs-toggle="collapse" href="#collapsePosts">Collapse</button>
         
          <div class="collapse" id="collapsePosts">
            <div >
              
            </div>
          
        </div>

        </div>
      </div>
    </div>
  </div>
  <div class="chart col-sm-2">
       
    <canvas id="myChart" ></canvas>
    

  </div>
  
  
  <!--table start --> 
  <div>  
    <h3 class="text-center  bg-dark text-light p-3">All Posts</h3>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          
          <th scope="col">id</th>
          <th scope="col">title</th>
          <th scope="col">Created</th>
          <th scope="col">edit </th>
          <th scope="col">delete</th>
          
        </tr>
      </thead>
      <tbody>
      @foreach($myPosts as $post)
      
        
        <tr>
          <td scope="row ">{{ $post->id }}</th>
          <td>{{ $post->title }}</td>
          <td>{{ $post->created_at }}</td>
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
      <div class="bg-light pt-5"><a href="{{ route('post.create') }}" class="btn btn-danger text-center m-3">Add Post</a>{{ $myPosts->links() }}</div>
    </table>
    
  </div>
</div>




<script src="{{ asset('js/app.js') }}" defer>
  // Get the chart data from your Laravel controller
  var chartData = <?php echo json_encode($chartData); ?>;
  
  // Create the pie chart
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: chartData.labels,
          datasets: [{
              data: chartData.values,
              backgroundColor: ['#E74C3C','#58D68D', '#5DADE2 ', '#F4D03F','#BB8FCE'], // Customize the colors
              
              
              
          }],
          
      },
  });
  </script>
  

  

@endsection