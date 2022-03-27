<?php

namespace App\Http\Controllers;

use App\Repositories\HotPostRepository;

class HotPostController extends Controller
{
    public function createdPosts(HotPostRepository $repository, $initial_date, $final_date, $order)
    {
        return $repository->getCreatedPosts($initial_date, $final_date, $order);
    }

    public function authors(HotPostRepository $repository,$order)
    {
        return $repository->getAuthors($order);
    }
}