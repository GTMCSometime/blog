<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'message',
        'user_id',
        'post_id',
        'parent_id',
    ];

    protected $table = 'comments';
    protected $guard = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getDateAsCarbonAttribute() {
        return Carbon::parse($this->created_at);
    }

    public function post() {
        return $this->hasOne(Post::class, 'post_id', 'id');
    }

    public function answer_to_comments() {
        return $this->belongsTo(User::class, 'parent_id', 'id');
    }

}
