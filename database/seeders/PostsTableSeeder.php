<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postRecords = [
            ['id'=>1,'post_title'=>"Iftar party","post_image"=> "","post_author"=> "Admin","post_summary"=> "Iftar Party every body welcome",'post_tag'=>"","status"=> 1,],

        ];
        Post::insert($postRecords);
    }
}
