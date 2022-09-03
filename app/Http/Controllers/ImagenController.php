<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    //
    public function store(Request $req){
        $img=$req->file('file');
        return response()->json(['file'=>$req->file('file')]);
     }

}
