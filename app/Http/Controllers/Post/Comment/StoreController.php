<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(Post $post, StoreRequest $request) {
        $data = $request->validated();
        $this->service->store($data, $post);
        return redirect()->route('post.show', $post->id);

    }
}
