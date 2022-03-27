<?php

namespace App\Repositories;

use App\Models\HotPost;

class HotPostRepository 
{
	private $model;

	public function __construct(HotPost $model)
	{
		$this->model = $model;
	}

    public function getCreatedPosts($initial_date, $final_date, $order)
    {
        return $this->model->whereBetween('post_created_at', [$initial_date, $final_date])->orderBy($order, 'desc')->get()->toJson();
    }
    
    public function getAuthors($order)
    {
        return $this->model->select('author')->orderBy($order, 'desc')->get()->toJson();
    } 
}