<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Models\Post;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function  __construct(){
        $this->middleware('auth');
    } 
    public function index()
    {
    
        $user = User::where('id',Auth::id())->first();
        
        
        $userPosts = Post::where('user_id', Auth::id())->count();  
        $authUser = Auth::user();
        $myPosts = $authUser->posts()->paginate(3);

        

        $searchId = Auth::id();
        $searchAnime = 1;
        $searchCommunity = 2;
        $searchGaming = 3;
        $searchTrading = 4;
        $searchSale = 5;

        $gamingPosts = Post::where('user_id', $searchId)->where('category',$searchGaming)->get()->count();
        
        $animePosts = Post::where('user_id', $searchId)->where('category', $searchAnime)->get()->count();
        
        $communityPosts = Post::where('user_id', $searchId)->where('category', $searchCommunity)->get()->count();

        $tradingPosts = Post::where('user_id', $searchId)->where('category', $searchTrading)->get()->count();
       
        $salePosts = Post::where('user_id', $searchId)->where('category', $searchSale)->get()->count();

        


        
        $chartData = [
            'labels' => ['Gaming', 'Anime', 'Community', 'Trading', 'Sale'],
            'values' => [$gamingPosts, $animePosts, $communityPosts,$tradingPosts,$salePosts],
        ];
        return view('user.profile', compact(['user', 'userPosts', 'myPosts', 'chartData', ]));
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

    public function profileView(string $id) {

        $user = User::find($id);

        $userPosts = Post::where('user_id', Auth::id())->count();  
        $authUser = Auth::user();
        $myPosts = $authUser->posts()->paginate(3);

        $searchId = Auth::id();
        $searchAnime = 1;
        $searchCommunity = 2;
        $searchGaming = 3;
        $searchTrading = 4;
        $searchSale = 5;

        $gamingPosts = Post::where('user_id', $searchId)->where('category',$searchGaming)->get()->count();
        
        $animePosts = Post::where('user_id', $searchId)->where('category', $searchAnime)->get()->count();
        
        $communityPosts = Post::where('user_id', $searchId)->where('category', $searchCommunity)->get()->count();

        $tradingPosts = Post::where('user_id', $searchId)->where('category', $searchTrading)->get()->count();
       
        $salePosts = Post::where('user_id', $searchId)->where('category', $searchSale)->get()->count();

        


        
        $chartData = [
            'labels' => ['Gaming', 'Anime', 'Community', 'Trading', 'Sale'],
            'values' => [$gamingPosts, $animePosts, $communityPosts,$tradingPosts,$salePosts],
        ];
        
        

        return view('user.profileView', compact(['user', 'userPosts', 'myPosts', 'chartData']));
    }
}
