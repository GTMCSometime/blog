<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Service\Admin\UsersMakeService;

class BaseController extends Controller
{
    public $service;

    public function __construct(UsersMakeService $service) {
        $this->service = $service;
    }
}
