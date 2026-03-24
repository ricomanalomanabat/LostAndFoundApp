<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\GoogleController as AuthGoogleController;
use App\Models\Post;

Route::get('/post/insert', function () {
    Post::create([
        'title' => 'Hello',
        'content' => 'This is my first post'
    ]);
    
    return Post::all();
});

Route::get('/', function () {
    return view('welcome');
});


// GOOGLE LOGIN
Route::get('/auth/google', [AuthGoogleController::class, 'redirect']);
Route::get('/auth/google/callback', [AuthGoogleController::class, 'callback']);


Route::get('/dashboard', function () {
    return 'Welcome to dashboard!';
});