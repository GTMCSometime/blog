<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;


class StoreController extends Controller
{
    public function __invoke(Post $post) {
        if(!auth()->user()) {
            return redirect()->route('login');
        }
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();

    }
}
