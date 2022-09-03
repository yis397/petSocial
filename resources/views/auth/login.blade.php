@extends('layouts.app-layout')
@section('titulo')
    Inicia Secion
@endsection
@section('contenido')
<div class="md:grid flex flex-col justify-center items-center md:grid-cols-2  h-100 mb-52" >

    <div class="img w-full flex justify-center items-center mb-7">
    <img class="h-52 w-52" src="https://res.cloudinary.com/dzysn25nh/image/upload/v1662161677/PETSOCIAL_c3ovew.png" alt="">
    </div>



    <form class="bg-white shadow p-4 w-2/3 rounded-2xl h-100"  action='login' method='POST'>
     @csrf
        @if (session('msg'))
        <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
            {{session('msg')}}
        </p>
        @endif

       <label class="block mb-3">
         <span class="block text-sm font-medium text-slate-700">Email o Username</span>
         <input type="email" id="email" name="email" class="peer border w-full p-1" placeholder="name" value="{{old('login')}}"/>

         @error('name')
         <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
             {{$message}}
         </p>
         @enderror
       </label>

       <label class="block mb-3">
         <span class="block text-sm font-medium text-slate-700">password</span>
         <input type="password" class="peer border w-full p-1" placeholder="password" id="password" name="password" />
         @error('password')

         <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
           {{$message}}
         </p>
         @enderror
       </label>
       <div class="mt-3">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember"> Mantener Sesion</label>
       </div>

       <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full w-1/2 text-white">
         Confirmar
       </button>
   </form>


   </div>
@endsection
