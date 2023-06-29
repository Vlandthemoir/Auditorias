<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function store (Request $request){
        $comentarios = new Comentarios();
        $comentarios->licitacion_id = $request->post('licitacion_id');
        $comentarios->codigo_requisito = $request->post('codigo_requisito');
        $comentarios->comentario = $request->post('comentario');
        $comentarios->save();
        $id = $request->post('licitacion_id');

        return redirect()->route("documentos.create",$id);
    }
}
