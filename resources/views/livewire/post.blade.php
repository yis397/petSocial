<div class="
grid {{$tipo!=1?'grid-cols-3':'grid-row-3'}} h-full p-5">

<div class=" bg-slate-300 rounded-xl p-2 shadow-sm">

    <div class="row-span-2 ">
        <div class="w-full bg-slate-100 border border-b-2 shadow flex justify-start items-center pl-3 mb-5">


            <a class="w-10 h-10 bg-red-600 rounded-full overflow-hidden mr-2" href="{{route('muro',$post->user->username)}}">

            <img class="w-10 h-10" src="{{$post->user->img??'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'}}" alt="">
            </a>

             <h4>{{$post->user->username}}</h4>

            </div>


        <div class=" flex justify-center  {{$tipo!=1?'col-span-2':'row-span-2'}}">
            <img class=" h-72 object-cover object-center" src="{{$post->img}}" alt="">
        </div>
    </div>
    <div class="row-span-1">
        <div class="p-3">
            <p class="text-slate-600 font-bold">{{$post->nombre}}</p>
            <p class="text-neutral-900 font-light">{{$post->descripcion}}</p>
        </div>
        <div >
            <div class="w-2/3 flex flex-row justify-around mb-2">
            @foreach ($iconos as $icon )
                <button class="btn btn-light">
                    <?php
                    echo $icon;
                        ?>
                </button>
            @endforeach
        </div>

        <x-comentarios>
            @forelse ($post->comentarios as $com )
             <x-item-comentario :comentario="$com"/>
            @empty
                <p>sin comentarios</p>
            @endforelse
        </x-comentarios>



            <form  class="flex items-center"
            method="POST" action="{{route('muro.comentario',['post'=>$post,'user'=>$post->user->username])}}"
                >
                @csrf
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>

                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" name="comentario" id="comentario" required>
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>

            </form>
            <p class="font-light text-slate-500">
                {{$post->created_at->diffForHumans()}}
            </p>

    </div>

    </div>
</div>

</div>
