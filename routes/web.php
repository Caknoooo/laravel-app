<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Caknoo",
        "email" => "caknocomel@gmail.com",
        "jurusan" => "Teknik Informatika",
        "image" => "Cakno.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


