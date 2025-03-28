<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\StoreRequest;
use App\Models\Comment;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
        Comment::create($data);
        return redirect()->route('post.show', $request->post_id);

    }
}
