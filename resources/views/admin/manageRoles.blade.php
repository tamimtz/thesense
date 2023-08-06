@extends('layouts.app')

@section('content')

<div class="container">



        @if(Session('msg'))
          <div class="alert alert-warning">
          {{ session('msg') }}
          </div>
        
          
        @endif      

        <h3 class="text-center  bg-dark text-light p-3">All Users</h3>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">role</th>
              <th scope="col">Created</th>
              <th scope="col">edit </th>
              <th scope="col">delete</th>
              
            </tr>
          </thead>
        <tbody>

          @foreach ($users as $user)
                
            
            <tr>
                <td >{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td> @if ($user->role_id == 1)
                    Admin
                    @elseif ($user->role_id == 2)
                    Moderetor
                    @else
                    User
                    @endif

                </td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target ="#editRoles-{{ $user->name }}" >Edit</button>
                    <!-- MOdal is Here -->
                    <div class="modal fade" id="editRoles-{{ $user->name }}" tabindex="-1" aria-labelledby="editRoles" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5 manageRolesLabel" id="manageRolesLabel">Manage Users</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <!--form starts Here-->
                                <form action="{{ route('admin.updateRoles', $user->id) }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')
                                  <label for="userName">User Name: {{ $user->name }}</label>
                                  <br>
                                  <label for="role">
                                    Role: 
                                  </label>
                                  <select name="select" class="form-select" aria-label="Default select example">
                                    <option value="Admin" @if($user->role_id == 1) selected @endif>Admin</option>
                                    <option value="Moderator" @if($user->role_id == 2) selected @endif>Moderator</option>
                                    <option value= "user" @if($user->role_id != 1 && $user->role_id != 2) selected @endif>User</option>
                                    
                                  </select>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" value="Update" onClick="return confirm('are you sure you want change {{ $user->name }}~s role? ')">Save changes</button>
                                  </div>
                                </form>
                              </div>
                             
                            </div>
                          </div>
                        
                    </div>
                  </td>
                  <td>
                    <form action="{{ route('user.destroy', $user) }}" method="POST">
  
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onClick="return confirm('are you sure you want to delete User?  {{ $user->name }}')" >
                        Delete
                      </button>
        
                    </form>
                  </td>
            </tr>
          @endforeach
        </tbody>
        </table>
</div>


    
@endsection