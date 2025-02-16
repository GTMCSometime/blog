<?php

namespace App\Http\Controllers\Admin\User;



class StoreController extends BaseController
{
    public function __invoke() {
        

        
        return redirect()->route('admin.user.index');

    }

    
}
