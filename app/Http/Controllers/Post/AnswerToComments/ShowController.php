<?php

namespace App\Http\Controllers\Post\AnswerToComments;


use App\Http\Controllers\Controller;
use App\Models\Comment;

class ShowController extends Controller
{
    public function __invoke(Comment $comment) {
        
        return view('personal.comment.create', compact('comment'));

    }
}
