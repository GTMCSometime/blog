<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Service\Users\UsersLikedService;

class BaseController extends Controller
{
    public $service;

    public function __construct(UsersLikedService $service) {
        $this->service = $service;
    }
}
