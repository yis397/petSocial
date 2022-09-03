<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function store(Request $req){
        $this->validate($req,[
            'email'=>'required',
            'password'=>'required',
        ]);

        if (!auth()->attempt($req->only('password','email'),$req->remember)){
           return back()->with('msg','Secion incorrecta');
        }
        return redirect()->route('muro',auth()->user()->username);
    }
}
