<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }
    public function store(Request $req){
        $req->request->add(['username' => Str::slug($req->username)]);
      $this->validate($req,[
        'name'=>'required|max:30',
        'username'=>'required|unique:users|max:10',
        'email'=>'required|unique:users|email',
        'password'=>'required|min:6|confirmed',
      ]);
      User::create([
           'name'=>$req->name,
           'username'=>$req->username,
           'email'=>$req->email,
           'password'=>Hash::make($req->password),
      ]);
      auth()->attempt($req->only('email','password'));
      return redirect()->route('muro',auth()->user()->username);
    }
}
