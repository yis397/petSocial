<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

{{--         <link rel="apple-touch-icon" sizes="180x180" @vite("public/favicon/apple-touch-icon.png") >
        <link rel="icon" type="image/png" sizes="32x32" @vite("public/favicon/favicon-32x32.png") >
        <link rel="icon" type="image/png" sizes="16x16"  @vite("public/favicon/favicon-16x16.png") >
        <link rel="manifest" @vite("public/favicon/site.webmanifest")>
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff"> --}}


        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>PetSocial</title>
        @stack('styles')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @livewireStyles

        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
            body {
                font-family: 'Nunito', sans-serif;
                box-sizing: border-box;
            }

        </style>
    </head>


    <body class="bg-slate-200">
        <header class="bg-slate-100 shadow flex md:justify-between justify-around flex-row h-14 items-center p-5 ">
            <a class="bold text font-bold md:ml-4 ml-1 " href="{{route('home')}}"><h1 class="md:text-3xl text-2xl mr-5 uppercase">PetSocial</h1></a>

            <nav class=" w-4/5 flex justify-around items-center">
                @auth
                <div class="hidden md:block w-full">

                    <livewire:buscador/>
                </div>
                <a href="{{route('muro.create')}}" class="rounded-lg hover:bg-slate-200 active:bg-slate-200 focus:outline-none focus:ring focus:bg-slate-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>
                </a>
                <a class="mt mr-3 rounded-lg hover:bg-slate-200 active:bg-slate-200 focus:outline-none focus:ring focus:bg-slate-300" href="{{route('muro',auth()->user()->username)}}">{{auth()->user()->username}}</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="rounded-lg hover:bg-slate-200 active:bg-slate-200 focus:outline-none focus:ring focus:bg-slate-300" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                          </svg>
                    </button>
                </form>

                @endauth
                @guest
                <div class=" ml-auto">
                    <a class="mt mr-3 font-semibold" href="/auth/login">login</a>
                    <a class="mt mr-3 font-semibold"href="/auth/register">Registrate</a>

                </div>
                @endguest
            </nav>
        </header>
        <main >

            <button id="dropdownRightButton" data-dropdown-toggle="dropdownRight" data-dropdown-placement="right" class="md:hidden  text-white hover:bg-slate-500  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-slate-400  dark:hover:bg-slate-500  " type="button">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>

            <!-- Dropdown menu -->


            <div id="dropdownRight" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                {{-- <livewire:buscador/> --}}
                <div class="w-80 ">
                    <livewire:buscador/>
                </div>
            </div>


         <h2 class="text-center mt-3 mb-3 font-bold text-2xl">@yield('titulo')</h2>




         <div >
             @yield('contenido')

         </div>
        </main>


        <footer class="flex items-center justify-center h-20 bg-slate-200">
           <p class="uppercase font-semibold text-gray-500">@PetSocial todos derechos reservados {{now()->year}}</p>
        </footer>
      @vite('node_modules/flowbite/dist/flowbite.js')
      @livewireScripts
    </body>
</html>
