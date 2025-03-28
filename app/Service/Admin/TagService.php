<?php

namespace App\Service\Admin;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagService {

    public function store($data) {
        try {
            DB::beginTransaction();
            Tag::firstOrCreate($data);
            
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $tag) {
        try {
            $tag->update($data);
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $tag;
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