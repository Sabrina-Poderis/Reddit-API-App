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

        $response = $this->getHotPosts();
    
        foreach($response as $hotPost){
            HotPost::create([
                'title'           => $hotPost['data']['title'],
                'author'          => $hotPost['data']['author'],
                'ups'             => $hotPost['data']['ups'],
                'num_comments'    => $hotPost['data']['num_comments'],
                'post_created_at' => Carbon::parse($hotPost['data']['created'])->format('Y-m-d h:i:s') 
            ]);
        }
    }

    private function getHotPosts(){
        return Http::get("https://api.reddit.com/r/artificial/hot")->json()['data']['children'];
    }
}
