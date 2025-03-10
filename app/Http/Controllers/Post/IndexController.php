<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke() {
        $posts = Post::paginate(6);
        if(Post::count() > 3) {
            $randomPosts = Post::get()->random(4); 
        } else {
            $randomPosts = Post::get()->random(Post::count());
        }

        if(Post::withCount('likedUser')->orderBy('liked_users_count', 'DESC')->count() > 3) {
            $likedPosts = Post::withCount('likedUser')->get()->take(4);
        } else {
            $likedPosts = Post::withCount('likedUser')->get()->random(Post::count());
        }
         
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));

    }
}


