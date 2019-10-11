<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Post;
class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Tag::class, 20)
                -> create()
                -> each(function($tag) {

              $posts = Post::inRandomOrder() -> take(4)->get();
              $tag -> posts() ->attach($posts);

          });
    }
}
