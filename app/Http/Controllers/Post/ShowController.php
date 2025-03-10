<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post) {

        $data = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->get()
        ->take(3);
        $post->comments->count() < 1 ? $postCount = 'нет комментариев' : $postCount = "комментарии ({$post->comments->count()})";

        return view('post.show', compact('post', 'data', 'relatedPosts', 'postCount'));
    }
}
