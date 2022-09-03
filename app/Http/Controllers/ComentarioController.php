<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comentarios;
use Illuminate\Http\Request;
use App\Models\Post;

class ComentarioController extends Controller
{
    //
    public function store(Request $req,User $user,Post $post){
        $this->validate($req,[
          'comentario'=>'required'
        ]);
        Comentarios::create([
            "comentario"=>$req->comentario,
            "user_id"=>auth()->user()->id,
            "post_id"=>$post->id,
        ]);
        return back()->with('msg',[
            "comentario"=>$req->comentario,
            "user_id"=>auth()->user()->id,
            "post_id"=>$post->id,
        ]);
    }
}
