<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;


class MuroController extends Controller
{

    public function index(User $user){
        return view('private.muro',[
            'user'=>$user
        ]);
    }
}
