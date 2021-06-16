<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        
        Storage::deleteDirectory('posts-thumbail');
        Storage::makeDirectory('posts-thumbail');
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
        Post::factory(25)->create();
    }
}
