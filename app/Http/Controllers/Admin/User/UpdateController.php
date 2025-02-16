<?php

namespace App\Http\Controllers\Admin\User;



class UpdateController extends BaseController
{
    public function __invoke() {
        


        return redirect()->route('admin.user.show');

    }

    
}
