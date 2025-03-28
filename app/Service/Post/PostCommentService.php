<?php

namespace App\Service\Users;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class PostCommentService {

    public function store($data, $post) {
        try {
            DB::beginTransaction();
           
            $data['user_id'] = auth()->user()->id;
            $data['post_id'] = $post->id;
            Comment::create($data);
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

}