<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke(Comment $comment) {
        $userName = User::findOrFail($comment->user_id)->name;
        return view('personal.comment.create', compact('userName', 'comment'));

    }
}
