<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
    <div class="w-1/2 container mx-auto flex flex-wrap justify-center">
        <p class="text-center text-4xl">Has entrado en listado</p>
        <a href="/" class=" border-2 border-black p-2 bg-green-500">Volver a la home</a>
    </div>
    </body>
</html>
