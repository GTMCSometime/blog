<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
    ];


    protected $table = 'categories';
    protected $guard = false;

    public function posts() {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
    
}
