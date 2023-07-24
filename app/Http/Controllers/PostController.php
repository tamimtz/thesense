<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function __construct() {

        $this->middleware('auth')->except(['index','gaming','anime', 'show']);
    }
     
    public function index()
    {
        $user= Auth::user();

        $posts = Post::orderBy('id', 'desc')->paginate(20);

        
        return view('post.index', compact('user', 'posts'));

    }

    public function gaming() {

        $posts = Post::where('category', 3)->paginate(8);

        return view('post.gaming', compact('posts'));

    }

    public function anime() {

        $posts = Post::where('category', 1)->paginate(8);

        return view('post.anime', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => ['required', 'min:3', 'max:50'],
            'content' => ['required', 'min:3', ],
            'file' => ['required'],
            'category' =>['required']
        ]);

        // try {


            // store image iin the storage 
            //the file in the parameter in from the create form from the create.blade.php

            if($request->hasFile('file')) {

                $image = $request->file('file');

                $imageName = $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('images', $image, $imageName);
            }



            Post::create([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'user_id' => Auth::id(),
                'file' => $imageName,
                'category' => $request->input('category')
            ]);

            return redirect()-> route('post.index')->with('msg', 'post added successfully');
        // } catch (\Exception $e) {

        //     return redirect()->back()->with('msg', 'post not added');

        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

       // $comments = Comment::where('post_id', $id)->get();

       //caching the comments in cache file system
       $comments = Cache::remember('postComments', 100, function () use($id) {
           return Comment::where('post_id', $id)->get();
       });

        //testing cache memory
       //dd(Cache::get('postComments'));
        

        return view('post.show', compact(['post', 'comments']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'title' => ['required', 'min:3', 'max:50'],
            'content' => ['required', 'min:3', ],
            
        ]);

         try {

            $myPost = Post::find($id);
            if($request->hasFile('file')) {

                unlink(public_path().'/storage/images/'.$myPost->file);
                $image = $request->file('file');

                $imageName = $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('images', $image, $imageName);
            
            
            $myPost->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'user_id' => Auth::id(),
                'file' => $imageName,
            ]);
            return redirect()-> route('post.index')->with('msg', 'post updated successfully');

        } else {
            $myPost->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'user_id' => Auth::id(),
            ]);

        }

            return redirect()-> route('post.index')->with('msg', 'post updated successfully');
         } catch (\Exception $e) {

            return redirect()->back()->with('msg', 'post update Failed');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        try {

            $owner = $post->user->id;
            $authUser = Auth::id();

            if($owner == $authUser) {
                if(is_file(public_path().'/storage/images/'.$post->file)){

                    unlink(public_path().'/storage/images/'.$post->file);                
                    $post->delete();
                    return redirect()-> route('dashboard')->with('msg', 'post Deleted successfully');
                }

            } else {
                return redirect()->back()->with('msg', 'Unauthorized Deletion Detected!');

            }

            

        } catch(\Exception $e) {
            return redirect()->back()->with('msg', 'Post Delete Failed');
        }
    }


    public function dashboard() {

        $authUser = Auth::user();
        $myPosts = $authUser->posts()->paginate(3);

        return view('post.dashboard', compact('myPosts'));
    }
}
