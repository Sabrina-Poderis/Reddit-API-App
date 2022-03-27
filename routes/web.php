<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotPostController;

Route::get('created-posts/{initial_date}/{final_date}/{order}', [HotPostController::class, 'createdPosts']);
Route::get('authors/{order}', [HotPostController::class, 'authors']);