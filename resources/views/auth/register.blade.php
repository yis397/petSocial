@extends('layouts.app-layout')
@section('titulo')
    Registrate en PETSOCIAL
@endsection
@section('contenido')
  <div class="md:grid md:grid-cols-2 flex flex-col justify-center items-center h-100" >

    <div class="img w-full flex justify-center items-center mb-7">
        <img class="h-52 w-52" src="https://res.cloudinary.com/dzysn25nh/image/upload/v1662161677/PETSOCIAL_c3ovew.png" alt="">
        </div>



   <form class="bg-white shadow p-4 w-2/3 rounded-2xl h-100"  action='register' method='POST'>
    @csrf
    <label class="block">
        <span class="block text-sm font-medium text-slate-700">Nombre</span>
        <input type="text" class="peer border w-full p-1" placeholder="nombre" id="name" name="name" value="{{old('name')}}"/>
        @error('name')

        <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
            {{$message}}
        </p>
        @enderror
      </label>

      <label class="block">
        <span class="block text-sm  text-slate-700">UserName</span>
        <input type="text" class="peer border w-full p-1" placeholder="Username" id="usename" name="username" value="{{old('username')}}"/>
        @error('username')

        <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
            {{$message}}
        </p>
        @enderror
      </label>

      <label class="block">
        <span class="block text-sm font-medium text-slate-700">Email</span>
        <input type="email" id="email" name="email" class="peer border w-full p-1" placeholder="email" value="{{old('email')}}"/>

        @error('email')
        <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
            {{$message}}
        </p>
        @enderror
      </label>

      <label class="block">
        <span class="block text-sm font-medium text-slate-700">password</span>
        <input type="password" class="peer border w-full p-1" placeholder="password" id="password" name="password" />
        @error('password')

        <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
          {{$message}}
        </p>
        @enderror
      </label>

      <label class="block">
        <span class="block text-sm font-medium text-slate-700">confirmar password</span>
        <input type="password" class="peer border w-full p-1" placeholder="conformar" id="password_confirmation" name="password_confirmation"/>
      </label>

      <button type="submit" class="bg-sky-600 hover:bg-sky-700 rounded-full w-1/2 text-white">
        Confirmar
      </button>
  </form>


  </div>
@endsection
