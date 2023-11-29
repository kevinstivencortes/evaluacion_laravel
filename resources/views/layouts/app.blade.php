<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>evaluiacion</title>
</head>
<body>
<header class= "flex items-center justify-between border-b p-5 bg-white shadow">
        <h1 class="text-3xl font-bold">Evaluacion</h1>
        <nav>
            <a href="/usuario"
                class= "uppercase text-gray-600 font-bold text-small">
                crud
            </a>
            <a href="/editar"
                class= "uppercase text-gray-600 p-6 font-bold text-small">
                editar
            </a>
            <a href="/eliminar"
                class= "uppercase text-gray-600 p-6 font-bold text-small">
                eliminar
            </a>
            <a href="/mostrar"
                class= "uppercase text-gray-600 p-6 font-bold text-small">
                mostrar
            </a>
            
        </nav>
</header>
<main>
    <h1>@yield('titulo')</h1>
    @yield('contenido')
</main>
<footer class="bg-gray-100 p-2 text-center uppercase">
    todos los derechos {{date('Y-d-m')}}
</footer>

</body>