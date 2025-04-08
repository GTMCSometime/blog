<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\PostUserLike;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        Tag::factory(15)->create();
        Category::factory(5)->create();
        Comment::factory(100)->create();
        PostTag::factory(10)->create();
        PostUserLike::factory(10)->create();
        Post::factory(count: 30)->create();

    }
}
