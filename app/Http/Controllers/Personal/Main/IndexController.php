<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke() {

        $comments = auth()->user()->comments->count();
        $likedPosts = Post::withCount('likedUser')->orderBy('liked_users_count')->get()->count();
        return view('personal.main.index', compact('comments', 'likedPosts'));

    }
}
