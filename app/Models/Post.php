<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
