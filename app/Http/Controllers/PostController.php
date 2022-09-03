<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user){
        return view('private.muro',[
            'user'=>$user,
            'posts'=>$this->getPosts($user->id),
            "isOpen"=>false,
        ]);
    }

    public function create(){
        return view(('private.create'));
    }
    public  function store(Request $req){
        $this->validate($req,[
        'nombre'=>'required|max:20',
        'descripcion'=>'required',
        'file'=>'required',
       ]);


       $uploadedFileUrl = Cloudinary::upload($req->file('file')->getRealPath())->getSecurePath();
       Post::create([
        'nombre'=>$req->nombre,
        'descripcion'=>$req->descripcion,
        'img'=>$uploadedFileUrl,
        'user_id'=>auth()->user()->id
       ]);
       //req->user()->posts()->crate([])
       return redirect()->route('muro',auth()->user()->username);
    }
    public function fullPost(User $user,Post $post){
       return view('private.muro',[
            'user'=>$user,
            'postin'=>$post,
            'posts'=>$this->getPosts($user->id),
            "isOpen"=>true

       ]);
    }
    public function getPosts($id){
     return Post::where('user_id',$id)->paginate(5);
    }
}
