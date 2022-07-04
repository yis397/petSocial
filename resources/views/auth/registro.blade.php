@extends('layout.app')
@section('titulo')
    Registrate en PETSOCIAL
@endsection
@section('contenido')
  <div class="grid grid-cols-2 h-100" >

   <div class="img">
   <h2>Una red social para tus mascotas</h2>
   </div>



   <form class="bg-white shadow p-4 w-2/3 rounded-2xl h-100"  action='registro' method='POST'>
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
