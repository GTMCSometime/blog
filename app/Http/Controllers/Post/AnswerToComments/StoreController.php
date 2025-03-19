<?php

namespace App\Http\Controllers\Post\AnswerToComments;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;


class StoreController extends Controller
{
    public function __invoke(Post $post, StoreRequest $request) {

 dd(1111111111);

    }
}
