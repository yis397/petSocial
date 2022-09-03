@extends('layouts.app-layout')
@section('contenido')
<div class="grid md:grid-cols-3  w-ful gap-0 h-full">

    <div class="md:col-span-2 col-span-3">
        @forelse ($posts as $post)

        @livewire('post', ['tipo' => 1,'post'=>$post], key($user->id))
        @empty
            <h3 class="text-center font-semibold text-slate-600">No tiene ningun post</h3>
        @endforelse

    </div>


    <div class="md:col-span-1 w-full hidden md:flex flex-col  col-span-1">
       @foreach ($usuarios as $usuario )
         <div class="w-4/5 rounded-md p-1 flex mt-2 bg-slate-100">
             <a class="w-10 h-10 bg-slate-400 flex justify-center items-center rounded-full overflow-hidden mr-2 float-left" href="{{route('muro',$usuario->username)}}">
              <img class="h-10" src="{{$usuario->img??'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'}}" alt="">
          </a>
          <div class="flex flex-col mr-auto">
            <p class="ml-2 text-sm">{{$usuario->name}}</p>
            <p class="ml-2 text-xs text-slate-800">{{$usuario->username}}</p>
          </div>


              <livewire:follow :isfollow=false :user="$usuario" />


         </div>
       @endforeach
    </div>

</div>
@endsection
