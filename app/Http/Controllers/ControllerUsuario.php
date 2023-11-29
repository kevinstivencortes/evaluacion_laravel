<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class ControllerUsuario extends Controller
{
    public function index(){
        $usuarios=usuarios::all();
        return view('mostrar', ['usuarios'=>$usuarios]);
    }
    
    public function store(Request $request){
        

        $this -> validate($request, [
            'nombre' => 'required',
            'cedula' => "numeric|required",
            'telefono' => 'numeric|required',
            'direccion' => "required",
        ]);

        

        usuarios::create([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion
        ]);

        return redirect()->route('usuario.index');
    }
}
