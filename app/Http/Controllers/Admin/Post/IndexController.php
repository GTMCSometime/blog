<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke() {

        $posts = Post::all();
        $res = 4 % 2;
        dd($res); 
        return view('admin.posts.index', compact('posts'));

    }
}
