<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct () {
        $this->middleware('IsAdmin');
       
    }    
    public function index()
    {   
        $totalUsers = User::count();
        
        return view('admin.admin', compact(['totalUsers']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function manageRoles(){


        $users = User::all();
        

        return view('admin.manageRoles', compact(['users',]));
    }

    public function updateRoles(Request $request, string $id) {

        $role = $request->input('select');
        $user = User::find($id);
        
        try{
            if($role == 'Admin'){
                User::where('id', $id)->update(['role_id' => 1]);
                
                      
                
            }elseif($role == 'Moderator'){
                        User::where('id', $id)->update(['role_id' => 2]);
                        
                        
            }
            else{
                        User::where('id', $id)->update(['role_id' => 0]);
                        
                        
            }
            return redirect()->back()->with('msg', 'role updated for user '. $user->name);
            
        }catch (\Exception $e){
            return redirect()->back()->with('msg', 'cant find user');
        }
        


        

    }

  

    public function createQuiz() {

        return view('admin.createQuiz');
    }
}
