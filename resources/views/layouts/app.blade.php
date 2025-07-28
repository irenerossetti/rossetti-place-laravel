<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="flex h-screen">
            <aside class="w-64 bg-rossetti-beige flex flex-col p-6">
                <a href="{{ route('dashboard') }}" class="mb-8">
                    <h1 class="text-2xl font-bold text-rossetti-maroon">ROSSETTI'S PLACE</h1>
                </a>

                <nav class="flex flex-col space-y-2">
                    <a href="{{ route('dashboard') }}" class="py-2 px-4 rounded hover:bg-rossetti-gold/50">Menú</a>
                    <a href="/catalogo" class="py-2 px-4 rounded hover:bg-rossetti-gold/50">Perfumes</a>
                    <a href="#" class="py-2 px-4 rounded hover:bg-rossetti-gold/50">Salud</a>
                    <a href="#" class="py-2 px-4 rounded hover:bg-rossetti-gold/50">Maquillaje</a>
                    <a href="/promociones" class="py-2 px-4 rounded hover:bg-rossetti-gold/50">Promociones del mes</a>
                </nav>
                
                <div class="mt-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="py-2 px-4 rounded hover:bg-rossetti-gold/50">
                            Cerrar Sesión &rarr;
                        </a>
                    </form>
                </div>
            </aside>

            <div class="flex-1 overflow-y-auto">
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>