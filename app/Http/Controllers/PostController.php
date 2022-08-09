<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

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

        //Transmission de la donnée à la vue
        return view("posts.index", compact("posts"));
    }



    public function create() {
        //Retourner la vue appropriée à la création (formulaire)
        return view("posts.edit");
     }



    public function store(Request $request) {
        //Validation des données
        $this->validate($request, [
            'img_url' => 'bail|required|string|max:1024',
            'description' => 'bail|required|string|max:280',
        ]);

        //Création dans la BDD
        Post::create([
            "img_url" => $request->img_url,
            "description" => $request->description,
            "user_id" => Auth::user()->id,
        ]);

        //renvoi vers la liste des posts
        return redirect(route("posts.index"));
    }



    public function edit(Post $post) { }

    public function update(Request $request, Post $post) { }

    public function destroy(Post $post) { }
     
}



