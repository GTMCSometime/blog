<?php

namespace App\Service\Users;


use Illuminate\Support\Facades\DB;

class UsersLikedService {

    public function detach($post) {
        try {
            DB::beginTransaction();
            auth()->user()->likedPosts()->detach($post->id);
            
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

}