<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="bg-slate-200">
        <header class="bg-slate-100 shadow flex justify-between flex-row h-14 items-center p-5">
            <div class="bold text font-bold ml-4 "><h1 class="text-3xl uppercase">PetSocial</h1></div>
            <nav class=" w-1/5 flex justify-around">
                @auth
                <a class="mt mr-3" href="">{{auth()->user()->username}}</a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="button-blue" type="submit">Cerrar Secion</button>
                </form>
                @endauth
                @guest
                <a class="mt mr-3" href="">login</a>
                <a class="mt mr-3"href="registro">Registrate</a>
                @endguest
            </nav>
        </header>
        <main >
         <h2 class="text-center mt-3 mb-3 font-bold text-2xl">@yield('titulo')</h2>

         <div >
             @yield('contenido')

         </div>
        </main>


        <footer class="flex items-center justify-center h-20 bg-slate-200">
           <p class="uppercase font-semibold text-gray-500">@PetSocial todos derechos reservados {{now()->year}}</p>
        </footer>

    </body>
</html>
