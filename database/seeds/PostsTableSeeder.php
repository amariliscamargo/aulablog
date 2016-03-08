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
        //Post::truncate(); //Apaga todos os registros do banco de dados

        factory('App\Post',16)->create();
    }
}
