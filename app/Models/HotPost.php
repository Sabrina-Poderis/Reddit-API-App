<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotPost extends Model
{
    protected $table = 'hot_posts';

    protected $fillable = [
        'title',
        'author',
        'ups',
        'num_comments',
        'post_created_at'
    ];
}
