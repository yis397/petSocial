<?php

$isfollow=$user->isfollower(auth()->user()->id);
?>
<div class="grid grid-cols-3 h-52 row-span-1">

    <div class="fot  w-full  h-full flex items-center justify-center md:col-span-1 col-span-3">
       <div class="w-52 h-52 bg-red-600 rounded-full overflow-hidden flex justify-center items-center">
        <img class="w-52 h-52 " src="{{$user->img??'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'}}" alt="">
       </div>
    </div>



    <div class="grid w-full grid-rows-3 md:col-span-2  col-span-3 gap-0 ">

        <div class="flex flex-row items-center  justify-center">
            <div class="flex justify-around ml-3 {{$user->id!=auth()->user()->id?'w-3/4 ':'w-1/4'}} m-0 ">
                <h2 class="text-2xl mr-6 ">{{$user->username}}</h2>
                @if ($user->id!=auth()->user()->id)
                <livewire:follow :isfollow="$isfollow" :user="$user"/>
                <button class=" bg-blue-500 text-white w-1/12">+</button>
                @else
                <a class="" href="/perfil">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg></a>

                @endif

            </div>
        </div>

        <div class="flex flex-row items-center h-10 justify-center">
            <div class="flex justify-around  w-3/4 ">
                <p><p class="font-semibold">{{$posts->count()}}</p>publicaciones</p>
                <p><p class="font-semibold">{{$user->followers->count()}}</p>seguidores</p>
                <p><p class="font-semibold">{{$user->followings->count()}}</p>seguidos</p>
            </div>
        </div>

        <div class="flex flex-column items-center h-10">
            <div class="flex justify-around  w-3/4 flex-col">
                <p class="text font-semibold text-center">{{$user->descripcion}}</p>

            </div>
        </div>
       </div>

</div>
