<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;


class StoreController extends Controller
{
    public function __invoke() {

        $comments = auth()->user()->comments;
        return view('personal.comment.index', compact('comments'));

    }
}
