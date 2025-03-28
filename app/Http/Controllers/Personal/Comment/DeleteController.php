<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;

class DeleteController extends BaseController
{
    public function __invoke(Comment $comment) {

        $this->service->delete($comment);
        return redirect()->route('personal.comment.index');

    }
}
