@extends('layouts.app')

@section('titulo')
@endsection

@section('contenido')
<header class="md:justify-center md:flex">
    
    <div class="md:flex md:justify-center md:w-4/12 bg-blue-100 p-6 rounded-lg shadow-xl md:items-center">
        <form action="" method="post">
            @csrf
            <div class="mb-5">
                <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                @error("nombre")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="cedula" class="mb-2 block uppercase text-gray-500 font-bold">cedula</label>
                <input type="number" id="cedula" name="cedula" placeholder="cedula">
                @error("cedula")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="telefono" class="mb-2 block uppercase text-gray-500 font-bold">Telefono</label>
                <input type="number" id="telefono" name="telefono" placeholder="telefono">
                @error("telefono")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-5">
                <label for="direccion" class="mb-2 block uppercase text-gray-500 font-bold">Direcion</label>
                <input type="text" id="direccion" name="direccion" placeholder="direccion">
                @error("direccion")
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
            </div>

            <input type="submit" value="crear usuario" class="bg-sky-600 hover:bg-sky-700 transtion-color cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
</header>
@endsection
