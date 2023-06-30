<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacion;
use App\Models\Documentos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class DocumentosController extends Controller
{
    public function create(string $id){
        $data = Licitacion::find($id);
        $documentos = collect([
            ['nombre' => 'Documentos a integrar', 'vista' => 'documento1'],
            ['nombre' => 'Contratacion de personal', 'vista' => 'documento2'],
            ['nombre' => 'Compras menores', 'vista' => 'documento3'],
            ['nombre' => 'Invitacion restringida', 'vista' => 'documento4'],
            ['nombre' => 'Adjudicacion directa', 'vista' => 'documento5'],
            ['nombre' => 'Licitacion publica', 'vista' => 'documento6'],
        ]);
        $obtenerVista = $documentos->where('nombre',$data->area)->pluck('vista');
        if($obtenerVista[0] == 'documento1'){
            $documento1 = Documentos::where("licitacion_id","=",$id)->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                        ->whereRaw("LENGTH(ruta_documento) != 0")
                        ->count();
            $porcentaje = (100/5)*$progreso;
            return view("Program.Documentos.documento1",compact('documento1','porcentaje'));
        }
        if($obtenerVista[0] == 'documento2'){
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','EJERCICIO (RECURSOS HUMANOS)')
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICION DE LA CUENTA PUBLICA')
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            $porcentaje = (100/10)*$progreso;
            return view("Program.Documentos.documento2",compact('resultado1','resultado2','resultado3','porcentaje'));
        }
        if($obtenerVista[0] == 'documento3'){
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            $porcentaje = (100/26)*$progreso;
            return view("Program.Documentos.documento3",compact('resultado1','resultado2','resultado3','resultado4','resultado5','porcentaje'));
        }
        if($obtenerVista[0] == 'documento4'){
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS:')
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR')
                                ->get();
            $resultado6 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->get();
            $resultado7 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            $porcentaje = (100/57)*$progreso;
            return view("Program.Documentos.documento4",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7','porcentaje'));
        }
        if($obtenerVista[0] == 'documento5'){
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','PROCESO DE COMPRA')
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR')
                                ->get();
            $resultado6 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->get();
            $resultado7 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            $porcentaje = (100/51)*$progreso;
            return view("Program.Documentos.documento5",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7','porcentaje'));
        }
        if($obtenerVista[0] == 'documento6'){
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:')
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:')
                                ->get();
            $resultado6 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->get();
            $resultado7 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            $porcentaje = (100/52)*$progreso;
            return view("Program.Documentos.documento6",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7','porcentaje'));
        }
        
        //return view("Program.Documentos.".$obtenerVista[0],compact('data'));
    }
    public function store (Request $request, string $id){
        $documento_encontrado = Documentos::find($id);

        $documento_nombre = $request->file('documento');
        $nombre_original = $documento_nombre->getClientOriginalName();
        $nombre_sin_extencion = pathinfo($nombre_original,PATHINFO_FILENAME);
        $timestamp = now()->timestamp;
        $nombre_completo = strval($timestamp."-".$nombre_sin_extencion);

        $documento = $request->file('documento')->storeAs('public/Docs',strval($nombre_completo).".pdf");

        
        $documento_encontrado->licitacion_id = $documento_encontrado->licitacion_id;//
        $documento_encontrado->categoria = $documento_encontrado->categoria;
        $documento_encontrado->requisito = $documento_encontrado->requisito;
        $documento_encontrado->informacion_estado = $request->post('informacion_estado');//
        $documento_encontrado->ruta_documento = strval($documento);//
        $documento_encontrado->comentario = $request->post('comentario');//
        $documento_encontrado->area = $documento_encontrado->area;
        
        $documento_encontrado->save();         
        $id = $documento_encontrado->licitacion_id;
        return redirect()->route("documentos.create",$id);
    }
    public function regresar(string $id){
        $documento_encontrado = Documentos::find($id);
        
        $documento_eliminar = $documento_encontrado->ruta_documento;
        Storage::delete($documento_eliminar);

        $documento_encontrado->licitacion_id = $documento_encontrado->licitacion_id;
        $documento_encontrado->categoria = $documento_encontrado->categoria;
        $documento_encontrado->requisito = $documento_encontrado->requisito;
        $documento_encontrado->informacion_estado = $documento_encontrado->informacion_estado;
        $documento_encontrado->ruta_documento = "";
        $documento_encontrado->comentario = "";
        $documento_encontrado->area = $documento_encontrado->area;
        $documento_encontrado->save();
        $id = $documento_encontrado->licitacion_id;

        return redirect()->route("documentos.create",$id);
    }
    public function anexos(string $id){
        if ($id== "Documentos a integrar"){
            return view("Program.Anexos.anexo1");
        }
        if ($id== "Contratacion de personal"){
            return view("Program.Anexos.anexo2");
        }
        if ($id== "Compras menores"){
            return view("Program.Anexos.anex3");
        }
        if ($id== "Invitacion restringida"){
            return view("Program.Anexos.anexo4");
        }
        if ($id== "Adjudicacion directa"){
            return view("Program.Anexos.anexo5");
        }
        if ($id== "Licitacion publica"){
            return view("Program.Anexos.anexo6");
        }
    }
}
