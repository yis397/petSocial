@extends('layouts.app-layout')
@section('titulo')
    Sube una imagen
@endsection
@push('styles')

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('contenido')

    <x-form-img action="{{route('muro.store')}}" method='POST'>

        <div>
            <x-input type="text" id="nombre" name="nombre" :value="__('Nombre')" enctype="multipart/form-data"/>

           @error('nombre')
           <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
               {{$message}}
           </p>
        @enderror

        </div>


        <label for="descripcion">
            <span>Descripcion</span>
            <textarea name="descripcion"  id="descripcion" cols="30" rows="5" class="p-3">
            </textarea>
            @error('descripcion')

            <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
                {{$message}}
            </p>
            @enderror
         </label>
    </x-form-img>
@endsection
