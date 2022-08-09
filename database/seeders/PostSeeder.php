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
    public function run()
    {
        // \App\Models\Post::factory(1)->create();
        $postslist = [
            ['description' => "Mon chat est trop mignon",
            'img_url'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Cat03.jpg/1024px-Cat03.jpg',
            'user_id' => 1],
            ['description' => "Ceci est un canapé",
            'img_url'=> 'https://res.cloudinary.com/dpngcje4c/image/upload/v1657533819/canapé_nuage_qzfwq6.jpg ',
            'user_id' => 3],
            ['description' => "Le saphir peut prendre toutes les couleurs, sauf le rouge (dans ce cas, c'est un rubis)",
            'img_url'=> 'https://upload.wikimedia.org/wikipedia/commons/8/83/Corundum-188152.jpg?uselang=fr',
            'user_id' => 5 ]
        ];

        \App\Models\Post::insert($postslist);
    }
   
}
