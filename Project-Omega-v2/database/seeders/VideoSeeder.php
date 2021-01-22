<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends seeder
{
    public function run()
    {
        Video::create([
            'name' => 'Test video #1',
            'video_path' => '/video/yrpEsmLWFhDeciHnMOVseRgcYoD1KpkFA6XM9KvI.mp4',
            'user_id' => 1
        ]);
        Video::create([
            'name' => 'Test video #2',
            'video_path' => '/video/yrpEsmLWFhDeciHnMOVseRgcYoD1KpkFA6XM9KvI.mp4',
            'user_id' => 1
        ]);
        Video::create([
            'name' => 'Test video #3',
            'video_path' => '/video/yrpEsmLWFhDeciHnMOVseRgcYoD1KpkFA6XM9KvI.mp4',
            'user_id' => 1
        ]);
        Video::create([
            'name' => 'Test video #4',
            'video_path' => '/video/yrpEsmLWFhDeciHnMOVseRgcYoD1KpkFA6XM9KvI.mp4',
            'user_id' => 1
        ]);
        Video::create([
            'name' => 'Test video #5',
            'video_path' => '/video/yrpEsmLWFhDeciHnMOVseRgcYoD1KpkFA6XM9KvI.mp4',
            'user_id' => 1
        ]);
    }
}
