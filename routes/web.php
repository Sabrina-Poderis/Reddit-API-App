<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotPostController;

$regexIsDate  = '^((?:19|20)\d\d)[- /.](0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])$'; //yyyy-mm-dd
$regexIsOrder = '(num_comments|ups)'; // 'num_comments' or 'ups'

Route::get('created-posts/{initial_date}/{final_date}/{order}', [HotPostController::class, 'createdPosts'])->where([
    'initial_date' => $regexIsDate, 
    'final_date'   => $regexIsDate,
    'order'        => $regexIsOrder
]);
    
Route::get('authors/{order}', [HotPostController::class, 'authors'])->where('order', $regexIsOrder);