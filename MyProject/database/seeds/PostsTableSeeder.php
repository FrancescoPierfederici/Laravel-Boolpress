<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) {
            $title =  $faker->sentence(10, 25);
            $newPost = new Post();
            $newPost->title =  $title;
            $newPost->content =  $faker->paragraph(50, 50);
            $newPost->slug =  Str::slug($title);
            $newPost->user_id =1;
            // $newPost-> =  $faker->imageUrl($width = 640, $height = 480);
            $newPost->category_id =  rand(1, 5);
            $newPost->save();
        }
    }
}
