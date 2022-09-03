<form class="w-full  relative">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
    <div class="relative">

        <input autocomplete="off" wire:change='search($event.target.value)' wire:keydown='search($event.target.value)' type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="busca por username" required>
        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        </button>
    </div>
    @if ($isOpen)

    <div class="btn absolute w-full h-44 bg-slate-200">
        <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($usuarios as $usuario)
            <li class="pb-3 sm:pb-4">
                <a  href="{{route('muro',$usuario->username)}}">

                    <div class="flex items-center space-x-4">
                       <div class="flex-shrink-0">
                          <img class="w-8 h-8 rounded-full" src="{{asset('upload').'/ec41995f-47ea-4eb5-90a8-6a09c5f87ef0.png'}}" alt="Neil image">
                       </div>
                       <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            {{$usuario->username}}
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                             {{$usuario->name}}
                          </p>
                       </div>

                    </div>

                </a>
            </li>

            @endforeach
        </ul>
    </div>
    @endif



</form>
