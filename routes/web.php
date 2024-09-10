<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $userPosts =[];
    if (auth()->check()){
        $userPosts = auth()->user()->userPost()->latest()->get(); // POV from user; recommended
    }
    // $posts = Post::all();
    // $personalPosts = Post::where('user_id', auth()->id())->get(); // Missing relationship; POV from Post
    return view('home', ["posts" => $userPosts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);


Route::post('/create-post', [PostController::class,'createPost']);
Route::get('/edit-post/{post}', [PostController::class,'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class,'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class,'deletePost']);