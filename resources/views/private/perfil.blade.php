@extends('layouts.app-layout')
@section('titulo')
    Perfils
@endsection
@push('styles')

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
<x-form-img  action="{{route('perfil.store')}}"  method='POST'>
    <label for="descripcion">
        <span>Tu Descripcion</span>
        <textarea name="descripcion"  id="descripcion" cols="12" rows="5" class="">
        </textarea>
        @error('descripcion')

        <p class="mt-2  peer-invalid:visible text-pink-600 text-sm">
            {{$message}}
        </p>
        @enderror
     </label>

</x-form-img>
@endsection
