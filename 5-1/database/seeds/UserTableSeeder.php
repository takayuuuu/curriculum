<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name'=> 'kenya',
            'email'=> 'kenya@gmail',
            'password'=> Hash::make('hoge1')
            ],
            [
            'name'=> 'nobita',
            'email'=> 'nobita@gmail',
            'password'=> Hash::make('hoge2')
            ],
            [
            'name'=> 'suneo',
            'email'=> 'suneo@gmail',
            'password'=> Hash::make('hoge3')
            ],
        ]);
    }
}
