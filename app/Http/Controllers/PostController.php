<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(){
        $post = Post::all();
        return view ('posts.show',[
            'post'=> $post[1]
        ]);
    } 

    public function index() {
        //Récupération de tous les posts
        $posts = Post::latest()->get();

        //Trasmission de la donnée à la vue
        return view("posts.index", compact("posts"));
    }

    public function create() { }

    public function store(Request $request) { }

    public function edit(Post $post) { }

    public function update(Request $request, Post $post) { }

    public function destroy(Post $post) { }
     
}



