@extends('layout.app')
@section('titulo')
    {{$user->username}}
@endsection
@section('contenido')
    <div class="grid grid-rows-2">
        <div class="dat grid grid-cols-2">
            <div class="fot  w-3/5 h-60 flex items-center justify-center">
               <div class="w-52 h-52 bg-red-600 rounded-full overflow-hidden">
                <img class="" src="{{asset('img/cat.jpg')}}" alt="">
               </div>

            </div>


            <div class="dat grid grid-rows-3"></div>
        </div>


        <div class="pos">mundo</div>
    </div>
@endsection
