<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class PrivateController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $ids = auth()->user()->followings->pluck('id')->toArray();
        $posts = Post::whereIn('user_id', $ids)->latest()->paginate(20);
        $usuarios=User::offset(0)->limit(5)->get();
         $filter=$usuarios->filter(function($value,$key){
            return $value->username!==auth()->user()->username;
         });
        return view('private.home', [
            'posts' => $posts,
            'usuarios' => $filter,
        ] );
    }
    public function perfil(){
        return view('private.perfil');
    }
    public function perfilStore(Request $req){
        $this->validate($req,[
            'descripcion'=>'required',
            'file'=>'required'
           ]);
           $uploadedFileUrl = Cloudinary::upload($req->file('file')->getRealPath())->getSecurePath();
           $user=User::find(auth()->user()->id);
           $user->img=$uploadedFileUrl??$user->img??null;
           $user->descripcion=$req->descripcion;
           $user->save();

        return redirect()->route('muro',auth()->user()->username);
    }
    public function filtro($user){
         return auth()->user()->username!==$user->username;
    }
}
