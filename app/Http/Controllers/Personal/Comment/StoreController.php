<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Requests\Personal\Comment\StoreRequest;
use App\Models\Comment;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('post.show', $request->post_id);

    }
}
