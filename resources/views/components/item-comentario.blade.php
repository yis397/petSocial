<div class="w-full border border-b-2 shadow flex  items-center pl-3 h-20">


        <a class="w-10 h-10 bg-red-600 rounded-full overflow-hidden mr-2 float-left" href="{{route('muro',$comentario->user->username)}}">
            <img class="w-10 h-10" src="{{$comentario->user->img??'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'}}" alt="">
        </a>

     <div class="flex flex-col">

         <div class="flex flex-row">
            <p class="font-semibold">
                <a href="">{{$comentario->user->username}}</a>
            ..</p>
            <p>{{$comentario->comentario}}</p>
         </div>

            <p class="text-xs text-gray-500">{{$comentario->created_at->diffForHumans()}}</p>

     </div>

    </div>
