<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function get(){
        //$posts = Post::where('title','taqi')->get();
        $posts = Post::get();
        return $posts;
    }
    public function store(Request $req){
        $post = new Post;
        $post->title = $req->title;
        $post->body ="bye";
        $post->save();
        return $post;
    }
    public function update(Request $req, $id){

    }
    public function getPost($id){
        //$post = Post::where('id',$id)->get();
        $post = Post::find($id);

        return $post;
    }
}
