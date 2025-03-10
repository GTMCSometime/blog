<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {

        $comments = auth()->user()->comments->count();
        $likedPosts = User::find(auth()->user()->id)->userLikedPosts()->get()->count();
        return view('personal.main.index', compact('comments', 'likedPosts'));

    }
}
