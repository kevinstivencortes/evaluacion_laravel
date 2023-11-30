@extends('layouts.app')

@section('titulo')
<h1 class="md:flex md:justify-center md:items-center text-xl px-6">
    Editar Usuario
</h1>
@endsection

@section('contenido')
<header class="md:justify-center md:flex">
    <div class="md:flex md:justify-center md:w-4/12 bg-blue-300 p-6 rounded-lg shadow-xl md:items-center">
        <form   action="{{route('editar.update', $usuario->id) }}" method="post">
            @csrf
            @method('put')
            <div>
            <label for="nombre" class="mb-2 block uppercase bg-blue-300 font-bold">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $usuario->nombre }}" placeholder="Nombre">
                    @error('nombre')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-5">
                    <label for="cedula" class="mb-2 block uppercase bg-blue-300 font-bold">Cedula</label>
                    <input type="number" id="cedula" name="cedula" value="{{ $usuario->cedula }}" placeholder="Cedula">
                    @error('cedula')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-5">
                    <label for="telefono" class="mb-2 block uppercase bg-blue-300  font-bold">Telefono</label>
                    <input type="number" id="telefono" name="telefono" value="{{ $usuario->telefono }}" placeholder="Telefono">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-5">
                    <label for="direccion" class="mb-2 block uppercase bg-blue-300  font-bold">Direccion</label>
                    <input type="text" id="direccion" name="direccion" value="{{ $usuario->direccion }}" placeholder="Direccion">
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
            <form action="/usuario">
                <input type="submit" value="Actualizar Usuario" class="bg-sky-600 hover:bg-sky-700 transition-color cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </form>
</header>
@endsection