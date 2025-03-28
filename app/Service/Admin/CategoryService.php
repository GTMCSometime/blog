<?php

namespace App\Service\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService {

    public function store($data) {
        try {
            DB::beginTransaction();
            Category::firstOrCreate($data);
            
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $category) {
        try {
            $category->update($data);
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $category;
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