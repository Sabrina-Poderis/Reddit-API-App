<?php

namespace App\Http\Controllers;

use App\Models\HotPost;

class HotPostController extends Controller
{
    public function createdPosts($initial_date, $final_date, $order)
    {
        return HotPost::whereBetween('post_created_at', [$initial_date, $final_date])->orderBy($order, 'desc')->get()->toJson();
    }

    public function authors($order)
    {
        return HotPost::select('author')->orderBy($order, 'desc')->get()->toJson();
    }
}