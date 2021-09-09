<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id'=> '5',
                'body'=> 'おはよう'
            ],
            [
                'user_id'=> '6',
                'body'=> 'こんにちわ'
            ],
            [
                'user_id'=> '7',
                'body'=> 'こんばんわ'
            ],
        ]);
    }
}
