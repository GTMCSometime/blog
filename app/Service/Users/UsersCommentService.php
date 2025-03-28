<?php

namespace App\Service\Users;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class UsersCommentService {

    public function store($data) {
        try {
            DB::beginTransaction();
            Comment::firstOrCreate($data);
            
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $comment) {
        try {
            $comment->update($data);
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $comment;
    }

    public function delete($data) {
        try {
            DB::beginTransaction();

            $data->delete();
            
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

}