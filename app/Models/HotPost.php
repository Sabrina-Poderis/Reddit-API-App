<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotPost extends Model
{
    use HasFactory;

    protected $table = 'hot_posts';

    protected $fillable = [
        'title',
        'author',
        'ups',
        'num_comments',
        'post_created_at'
    ];
}
