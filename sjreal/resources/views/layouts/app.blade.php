<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=delete,description,directions_car,edit,inventory,manage_accounts,person" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans ">
        <header class="w-full">
            <nav class="flex justify-between">
                <a href="" >
                    <img src="">Logo
                </a>
                <a class="flex justify-between border-b-2 border-solid border-gray-500">
                    <label for="">Bienvenido {{ 'user' /*Nombre del usuario*/}}</label>
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </a>
            </nav>
        </header>

        <div class=" bg-gray-100 min-w-full flex ">
            <div class="grow-1 mx-3">
                @include('layouts.navigation')
            </div>

            <!-- Page Content -->
            <main class="grow-2 mx-3">
                @yield('content', 'El contenido debe ir aquí')
            </main>
        </div>
    </body>
</html>
