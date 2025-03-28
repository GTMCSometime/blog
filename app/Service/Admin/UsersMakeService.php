<?php

namespace App\Service\Admin;

use App\Jobs\StoreUserJob;
use Illuminate\Support\Facades\DB;

class UsersMakeService {

    public function store($data) {
        try {
            DB::beginTransaction();
            dispatch(new StoreUserJob($data));
            
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

    }

    public function update($data, $user) {
        try {
            $user->update($data);
            
            DB::commit();
        } catch(\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $user;
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