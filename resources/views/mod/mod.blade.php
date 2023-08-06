@extends('layouts.app')
@section('content')
    


<div class="adminPanel">
    <div class="row">
        <div class="col">
            <h1 > Mod Panel
                <img class="adminSettingsImage" data-bs-toggle="collapse" href= "#adminPanel" role="button" aria-expanded="false" aria-controls="adminPanel" src="{{ url('/storage/images/adminSettings.png') }}" alt="">
            </h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="collapse" id="adminPanel">
                        <div class="card adminPanel" style="width: 35rem;">
                            <div class="card-header">
                            Users {{ $totalUsers }}
                            </div>

                            <div class="list adminPanel">
                                <ul >
                                    
                                    <li class="list-group-item">Ban User
                                        <img class="adminSettingsImage" src="{{ url('/storage/images/ban_user.png') }}" alt="">
                                    </li>
                                    <li class="list-group-item">Find User
                                        <img class="adminSettingsImage" src="{{ url('/storage/images/find_user.png') }}" alt="">
                                    </li>
                                </ul>

                            </div>
                            
                        </div>
                    </div>    
                </div>    
                <!-- section for admin control panel-->
                <div class="col-sm-4">
                    <div class="collapse" id="adminPanel">
                        <div class="card adminPanel" style="width: 35rem;">
                            <div class="card-header">
                            Posts
                            <img class="adminSettingsImage" src="{{ url('/storage/images/posts.png') }}" alt="">
                            </div>

                            <div class="list adminPanel">
                                <ul >
                                    <li class="list-group-item">Find Post
                                        <img class="adminSettingsImage" src="{{ url('/storage/images/find_post.jpg') }}" alt="">
                                    </li>
                                    <li class="list-group-item">Delete Post 
                                        <img class="adminSettingsImage" src="{{ url('/storage/images/delete_post.gif') }}" alt="">
                                    </li>
                                    <li class="list-group-item">Edit Post
                                        <img class="adminSettingsImage" src="{{ url('/storage/images/edit_post.png') }}" alt="">
                                    </li>
                                </ul>

                            </div>
                            
                        </div>
                    </div>    
                </div>  
                <!--section ends-->

                <div class="col-sm-4">
                    <div class="collapse" id="adminPanel">
                        <div class="card adminPanel" style="width: 35rem;">
                            <div class="card-header">
                            Quiz
                            </div>

                            <div class="list adminPanel">
                                <ul >
                                    <a class="admin-panel-lists" href="{{ route('admin.createQuiz') }}">
                                        <li class="list-group-item" >Add Quiz Question</li>
                                    </a>
                                    
                                    <li class="list-group-item">Edit Quiz</li>
                                    <li class="list-group-item">Delet Quiz</li>
                                </ul>

                            </div>
                            
                        </div>
                    </div>    
                </div>  
                    
            
            </div>    

        </div>
    </div>
</div>



@endsection
