<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Service\Users\PostCommentService;
use App\Service\Users\UsersCommentService;

class BaseController extends Controller
{
    public $service;

    public function __construct(PostCommentService $service) {
        $this->service = $service;
    }
}
