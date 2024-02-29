<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Devstagram - @yield('titulo') </title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto  justify-between items-center">
        <header class="p-5 border-b bg-white shadow">

            <h1 class="text-3xl font-black">
                DevStagram
            </h1>

            <nav>
                <a href="#">Login</a>
                <a href="#">Crear Cuenta</a>

            </nav>

        </div>
        </header>
    </body>
</html>
