<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            // User::create([
                //     'name' => 'Caknoo',
                //     'email' => 'caknocomel@gmail.com',
                //     'password' => bcrypt('12345')
                // ]);
                
        User::factory(5)->create();
                    
        Category::create([
            'name' => 'Cakno Programming',
            'slug' => 'cakno-programming'
        ]);
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Et, cum expedita. Accusamus dolorum sit dolor repellendus, nisi molestiae incidunt, obcaecati reiciendis dolorem exercitationem minima. Ipsum, velit porro! Laborum, ipsam quisquam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Et, cum expedita. Accusamus dolorum sit dolor repellendus, nisi molestiae incidunt, obcaecati reiciendis dolorem exercitationem minima. Ipsum, velit porro! Laborum, ipsam quisquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Et, cum expedita. Accusamus dolorum sit dolor repellendus, nisi molestiae incidunt, obcaecati reiciendis dolorem exercitationem minima. Ipsum, velit porro! Laborum, ipsam quisquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul ke empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Et, cum expedita. Accusamus dolorum sit dolor repellendus, nisi molestiae incidunt, obcaecati reiciendis dolorem exercitationem minima. Ipsum, velit porro! Laborum, ipsam quisquam.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

    }
}
