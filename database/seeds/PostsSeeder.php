<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Post::class, 20)
                -> make()
                -> each(function($posts) {

              $category = Category::inRandomOrder() -> first();
              $posts -> category() -> associate($category);

              $posts -> save();

          });
    }
}
