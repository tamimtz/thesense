<?php

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
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
Route::resource('/quiz', QuizController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [PostController::class, 'dashboard'])->name('dashboard');
Route::post('/comment/store/{pid}', [CommentController::class, 'store'])->name('comment.store');
Route::get('/gaming', [PostController::class, 'gaming'])->name('gaming');
Route::get('/anime', [PostController::class, 'anime'])->name('anime');
// Routes for admin panel//


  
Route::resource('/admin', AdminController::class);
Route::resource('/mod', ModController::class);
Route::get('/createQuiz', [AdminController::class, 'createQuiz'])->name('admin.createQuiz');
Route::get('/manageRoles', [AdminController::class, 'manageRoles'])->name('admin.manageRoles');

Route::put('/updateRoles/user/{id}', [AdminController::class, 'updateRoles'])->name('admin.updateRoles');

//Routes For Quiz Controller //

Route::post('/newQuiz', [QuizController::class, 'newQuiz'])->name('quiz.newQuiz');
Route::post('/createQuestions', [QuizController::class, 'createQuestions'])->name('quiz.createQuestions');
Route::get('/dota2Quiz', [QuizController::class, 'dota2Quiz'])->name('quiz.dota2Quiz');


Route::get('/', function(){
    return view('inc.home');
});

Route::get('/profileView/{pid}', [UserController::class, 'profileView'])->name('user.profileView');


// Route::get('/getToServer', function(){
//     $user = Auth::user();

//     if ($user->isAdmin()){
//         echo "this is admin";
//     } 
// });


