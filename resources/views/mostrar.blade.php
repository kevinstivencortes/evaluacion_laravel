@extends('layouts.app')

@section('titulo')
    
@endsection

@section('contenido')
    <table class="md:flex md: justify-center">
        <tr>
            <th>Nombre</th>
            <th>Cedula</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>
        @foreach ($usuarios as $usuario)
    <tr>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->cedula}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->direccion}}</td>
    </tr>
    <form action="{{ route('usuario.index').$usuario->id }}" method="post">
        @method("delete")
    </form>
@endforeach

    </table>
@endsection
