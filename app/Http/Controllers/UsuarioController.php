<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    //editar usuario
    public function edit($id){
        $usuario = Usuarios::find($id);
        return view('editar', compact('usuario'));
    }
    //actualizar los datos
    public function update(Request $request, $id){
        $usuario = Usuarios::find($id);

        //verificar que los datos agregados sean correctos
        $this->validate($request, [
            'nombre' => 'required',
            'cedula' => "numeric|required",
            'telefono' => 'numeric|required',
            'direccion' => "required",
        ]);

        //actulizar datos
        $usuario->update([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
        ]);
        return redirect()->route('usuario.index')-> with('success', 'usuario actualizado');
    }

    //eliminar usuario
    public function delete($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()->route('usuario.index')-> with('success', 'usuario borrado');
    }
    //verificar que el usuario este
    public function destroy($id){
        $usuario = Usuarios::find($id);

        if (!$usuario){
            return redirect()->route('usuario.index')->with('error', 'usuario no registrado');
        }

        $usuario->delete();

        return redirect()->route('usuario.index')->with('success', 'usuario eliminado :)');
    }


    //mostrar usuario
    public function index(){
        $usuarios=Usuarios::all();
        return view('mostrar', ['usuarios'=>$usuarios]);
    }
    
    public function store(Request $request){
        
        //validar
        $this -> validate($request, [
            'nombre' => 'required',
            'cedula' => "numeric|required",
            'telefono' => 'numeric|required',
            'direccion' => "required",
        ]);

        
        //agregar a la base de datos
        usuarios::create([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion
        ]);
/* usuario.index*/
//retornar
    return redirect()->route('usuario.index');


    }
}