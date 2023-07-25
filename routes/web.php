<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::resource('/post', PostController::class);
Route::resource('/user', UserController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');
Route::post('/comment/store/{pid}', [CommentController::class, 'store'])->name('comment.store');
Route::get('/gaming', [PostController::class, 'gaming'])->name('gaming');
Route::get('/anime', [PostController::class, 'anime'])->name('anime');
// Routes for admin panel//


  
Route::resource('/admin', AdminController::class);
Route::get('/manageRoles', [AdminController::class, 'manageRoles'])->name('manageRoles');




Route::get('/', function(){
    return view('inc.home');
});

Route::get('/profileView/{pid}', [UserController::class, 'profileView'])->name('user.profileView');


Route::get('/getToServer', function(){
    $user = User::find(1);
    $role = Role::find(1);

    $admin = find($role->id)->pivot->user_id;
    return $admin;
    // $role = Role::where('name', 'admin')->first();
    // $user->roles()->attach($role->id);
});


