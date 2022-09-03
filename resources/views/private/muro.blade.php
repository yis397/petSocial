@extends('layouts.app-layout')


@section('contenido')

<div class="grid grid-rows-3 gap-5">

    <x-head-muro :userr="$user" :posts="$posts"/>
    <div class="pos grid md:grid-cols-3  grid-cols-2 gap-3 p-3 row-span-2 mt-24">
        @if ($posts->count())
@foreach ($posts as $post)
<div class="md:col-span-1
col-span-1
aspect-square bg-slate-400 overflow-hidden hover:bg-slate-600 ">
<form method="GET"  action="{{route('muro.comentario',['user'=>$user->username,'post'=>$post])}}"
    class="h-full object-cover w-full bg-red-300 " >
    <button  type="submit" class="bg-slate-600 h-full w-full items-center justify-center flex">
        <img class="h-full object-cover" src="{{$post->img}}" alt="">
    </button>

</form>

</div>

@endforeach

@else
   <p class="text-slate-500 col-span-3 text-center mt-10">No Hay Publicaciones</p>
@endif
    </div>
</div>
@if ($isOpen)


<x-full-post :valor="$postin" :user="$user"/>

@endif



@endsection
