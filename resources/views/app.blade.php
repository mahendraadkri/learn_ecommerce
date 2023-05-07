<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
     
        @vite(['resources/js/app.js', 'resources/css/app.css'])
    
    </head>
    <body class="font-sans antialiased">
        <div class="flex">
            <div class="w-56 h-screen bg-gray-200 shadow-lg shadow-red-300">
                <img class="bg-white mx-4 w-44 my-5 rounded-lg py-3" src="" alt=""  >

           
            <a href="" class="text-x1 font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Dashbord</a>

            <a href="" class="text-x1 font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">Category</a>

            <a href="" class="text-x1 font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">News</a>

            <a href="" class="text-x1 font-bold border-b-2 border-blue-500 block ml-4 px-2 py-1 hover:bg-blue-500 hover:text-white">LogOut</a>
        </div>
           
        </div>

        <div class="p-4 flex-1">
            @yield('content')
        </div>
    </div>
    </body>
</html>
