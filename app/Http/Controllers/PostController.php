<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "All Posts",
            //"posts" => Post::all(),

            // Menggunakan Eager Loading dengan tujuan untuk reduce "N + 1" Problem
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single post",
            "post" => $post
        ]);
    }
}
