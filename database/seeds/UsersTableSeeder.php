<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
       DB::table("posts")->insert([
           "title" => "3/18 19:00~　渋谷近辺で3名募集",
           "body" => "こんにちは！ トムヤンクンと申します。渋谷の人材系企業にて営業として働いています",
           'users_id' => 1
           ]);
    }
}
