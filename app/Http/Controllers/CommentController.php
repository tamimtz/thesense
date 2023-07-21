<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




class CommentController extends Controller
{






    function __construct(){

        $this->middleware('auth');
    }
    public function store(Request $request,$id) {

        $request->validate([

            'content' => ['required', 'min:1', 'max:500']

        ]);

        
            try {
             Comment::create([
                  'content' => $request->content,
                  'user_id' => Auth::id(),
                  'post_id' => $id,


              ]);
             return redirect()->back()->with('msg', 'Comment Added');

            }catch(\Exception $e) {
              return redirect()->back()->with('msg', 'Comment Failed');
            }

        } 
    
}
