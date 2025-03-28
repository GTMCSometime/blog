<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Service\Users\UsersCommentService;

class BaseController extends Controller
{
    public $service;

    public function __construct(UsersCommentService $service) {
        $this->service = $service;
    }
}
