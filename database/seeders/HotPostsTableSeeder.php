<?php

namespace Database\Seeders;

use App\Models\HotPost;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class HotPostsTableSeeder extends Seeder
{
    public function run()
    {
        HotPost::truncate();

        $response = Http::get("https://api.reddit.com/r/artificial/hot")->json()['data']['children'];
    
        foreach($response as $subRedit){
            HotPost::create([
                'title'           => $subRedit['data']['title'],
                'author'          => $subRedit['data']['author'],
                'ups'             => $subRedit['data']['ups'],
                'num_comments'    => $subRedit['data']['num_comments'],
                'post_created_at' => Carbon::parse($subRedit['data']['created'])->format('Y-m-d h:i:s') 
            ]);
        }
    }
}
