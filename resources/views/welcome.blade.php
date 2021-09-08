<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Anime Beats') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <x-jet-banner />
        @livewire('navigation-welcom')
        <div class="p-6 bg-white border-b border-gray-200 sm:px-20">

                @foreach ($libreria as $librerias)
                <div class="flex bg-gray-200">
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-gray-400"><img src="{{ $librerias->imagen }}" alt="" class="h-20 w-30" fill="none"></div>
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">{{ $librerias->nombre }}</div>
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">{{ $librerias->genero }}</div>
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">{{ $librerias->doblaje }}</div>
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">{{ $librerias->subtitulado }}</div>
                </div>

                @endforeach

            {{ $libreria->links()}}
        </div>
    </body>
</html>
