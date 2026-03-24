<?php

use Illuminate\Support\Facades\Route;

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
