@extends('layouts.app')

@section('titulo')
    
@endsection

@section('contenido')
    <table class="md:flex md: justify-center">
        <tr>
            <th class="border border-black">Nombre</th>
            <th class="border border-black">Cedula</th>
            <th class="border border-black">Telefono</th>
            <th class="border border-black">Direccion</th>
        </tr>
        @foreach ($usuarios as $usuario)
    <tr>
        <td class="border border-black p-4">{{$usuario->nombre}}</td>
        <td class="border border-black p-4">{{$usuario->cedula}}</td>
        <td class="border border-black p-4">{{$usuario->telefono}}</td>
        <td class="border border-black p-4">{{$usuario->direccion}}</td>
        <td>
            <a class="border border-black p-4 text-blue-400" href="{{ route('editar.index', $usuario->id) }}">editar</a>
        </td>
            <td>
                <form class="border border-black p-4 text-blue-400 display:inline" method="post" action="{{ route('eliminar.index', $usuario->id) }}">
                    @csrf
                    @method('delete')
                    <button class="text-red-500" onclick="return confirm('¿Seguro de eliminar este usuario?')" type="submit">Eliminar</button>
                </form>
            </td>
    </tr>
    
@endforeach

    </table>
@endsection