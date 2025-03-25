<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke(Comment $user_id, Post $post_id,) {
        
        $userName = User::findOrFail($user_id->id)->name;
        $a = '1';
        $b = &$a;
        $b = "2$b";
        return view('personal.comment.create', compact('userName', 'post_id', 'user_id', 'a', 'b'));

    }
}
