<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Caknoo",
        'active' => 'home',
        "email" => "caknocomel@gmail.com",
        "jurusan" => "Teknik Informatika",
        "image" => "Cakno.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Categories
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// Halaman category relationship / Single Category
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Categories : $category->name",
//         'active' => 'categories',
//         // Menggunakan Lazy Eager Loading
//         'posts' => $category->posts->load(['author', 'category']),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'author' => 'posts',

//         // Menggunakan Lazy Eager Loading
//         'posts' => $author->posts->load(['category', 'author'])
//     ]);
// });
