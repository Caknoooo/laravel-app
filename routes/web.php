<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Caknoo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae culpa magnam, omnis, explicabo similique velit officiis in autem quam, corporis ipsa ab dolorum recusandae repudiandae accusantium nihil aliquid voluptatum ut. Inventore recusandae vel illo beatae quas natus dignissimos quod quisquam, eligendi vitae cumque id est eos perspiciatis fugit quaerat perferendis officia? Unde iusto ad numquam architecto molestiae doloribus. Repellendus esse illo sint pariatur hic eum distinctio explicabo quis id aspernatur est a, possimus consequuntur, inventore iste maxime. Aut, necessitatibus ut?"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Caknii",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae culpa magnam, omnis, explicabo similique velit officiis in autem quam, corporis ipsa ab dolorum recusandae repudiandae accusantium nihil aliquid voluptatum ut. Inventore recusandae vel illo beatae quas natus dignissimos quod quisquam, eligendi vitae cumque id est eos perspiciatis fugit quaerat perferendis officia? Unde iusto ad numquam architecto molestiae doloribus. Repellendus esse illo sint pariatur hic eum distinctio explicabo quis id aspernatur est a, possimus consequuntur, inventore iste maxime. Aut, necessitatibus ut?"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

// Halaman single post
Route::get('/posts/{slug}', function($slug){
    $blog_post = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Caknoo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae culpa magnam, omnis, explicabo similique velit officiis in autem quam, corporis ipsa ab dolorum recusandae repudiandae accusantium nihil aliquid voluptatum ut. Inventore recusandae vel illo beatae quas natus dignissimos quod quisquam, eligendi vitae cumque id est eos perspiciatis fugit quaerat perferendis officia? Unde iusto ad numquam architecto molestiae doloribus. Repellendus esse illo sint pariatur hic eum distinctio explicabo quis id aspernatur est a, possimus consequuntur, inventore iste maxime. Aut, necessitatibus ut?"
        ],
        [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Caknii",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae culpa magnam, omnis, explicabo similique velit officiis in autem quam, corporis ipsa ab dolorum recusandae repudiandae accusantium nihil aliquid voluptatum ut. Inventore recusandae vel illo beatae quas natus dignissimos quod quisquam, eligendi vitae cumque id est eos perspiciatis fugit quaerat perferendis officia? Unde iusto ad numquam architecto molestiae doloribus. Repellendus esse illo sint pariatur hic eum distinctio explicabo quis id aspernatur est a, possimus consequuntur, inventore iste maxime. Aut, necessitatibus ut?"
        ]
    ];
    
    $new_post = [];
    foreach($blog_post as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single post",
        "post" => $new_post
    ]);
});


