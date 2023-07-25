@extends('layouts.app')
@section('content')
    


<div class="adminPanel">
    <div class="row">
        <div class="col">
            <h1 > Admin Panel
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
                                    <li href='' class="list-group-item">Manage Roles</li>
                                    <li class="list-group-item">Ban User</li>
                                    <li class="list-group-item">Find User</li>
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
                            </div>

                            <div class="list adminPanel">
                                <ul >
                                    <li class="list-group-item">Find Post</li>
                                    <li class="list-group-item">Delete Post</li>
                                    <li class="list-group-item">Edit Post</li>
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
                                    <li class="list-group-item">Add Quiz</li>
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
