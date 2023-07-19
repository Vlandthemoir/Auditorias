<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function index(){
        $datos = Usuarios::all();
        return view('Program.Usuarios.index',compact('datos'));
    }
    public function create(){
        return view('Program.Usuarios.create');
    }
    public function store(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios->usuario = $request->post('usuario');
        $usuarios->correo_electronico = $request->post('correo_electronico');
        $usuarios->tipo_usuario = $request->post('tipo_usuario');
        $usuarios->contraseña = bcrypt($request->post('contraseña'));
        $usuarios->save();
        return redirect()->route("usuarios.create");
    }
    public function edit(string $id)
    {
        $usuarios = Usuarios::find($id);
        return view("Program.Usuarios.update",compact('usuarios'));
    }
    public function update(Request $request, string $id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->usuario = $request->input('usuario');
        $usuarios->correo_electronico = $request->input('correo_electronico');
        $usuarios->tipo_usuario = $request->input('tipo_usuario');
        if(!$request->input('contraseña') === null){
            
            $usuarios->contraseña = bcrypt($request->input('contraseña'));
        }
        $usuarios->save();
        
        return redirect()->route("usuarios.index");
    }
    public function destroy(string $id)
    {
        $usuarios = Usuarios::find($id);
        $usuarios->delete();
        return redirect()->route("usuarios.index");
    }
}
