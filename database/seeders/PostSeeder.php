<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /**
      * Création de post
      */
    public function run()
    {
        \App\Models\Post::factory(1)->create();
    }
}
