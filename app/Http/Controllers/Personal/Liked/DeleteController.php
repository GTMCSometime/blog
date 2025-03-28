<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Models\Post;

class DeleteController extends BaseController
{
    public function __invoke(Post $post) {
        $this->service->detach($post);
        return redirect()->route('personal.liked.index');

    }
}
