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
            $cantidad_aplica = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->count();
            $documento1 = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                        ->whereRaw("LENGTH(ruta_documento) != 0")
                        ->count();

            $limitar_porcentaje = (100/$cantidad_aplica)*$progreso;
            $porcentaje  = bcdiv($limitar_porcentaje, '1', 1);
            return view("Program.Documentos.documento1",compact('documento1','porcentaje'));
        }
        if($obtenerVista[0] == 'documento2'){
            $cantidad_aplica = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->count();
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','EJERCICIO (RECURSOS HUMANOS)')
                                ->where("aplica","=","si")
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICION DE LA CUENTA PUBLICA')
                                ->where("aplica","=","si")
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            
            $limitar_porcentaje = (100/$cantidad_aplica)*$progreso;
            $porcentaje  = bcdiv($limitar_porcentaje, '1', 1);
            return view("Program.Documentos.documento2",compact('resultado1','resultado2','resultado3','porcentaje'));
        }
        if($obtenerVista[0] == 'documento3'){
            $cantidad_aplica = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->count();
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->where("aplica","=","si")
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->where("aplica","=","si")
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->where("aplica","=","si")
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            
            $limitar_porcentaje = (100/$cantidad_aplica)*$progreso;
            $porcentaje  = bcdiv($limitar_porcentaje, '1', 1);
            return view("Program.Documentos.documento3",compact('resultado1','resultado2','resultado3','resultado4','resultado5','porcentaje'));
        }
        if($obtenerVista[0] == 'documento4'){
            $cantidad_aplica = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->count();
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->where("aplica","=","si")
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS:')
                                ->where("aplica","=","si")
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->where("aplica","=","si")
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR')
                                ->where("aplica","=","si")
                                ->get();
            $resultado6 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado7 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->where("aplica","=","si")
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            
            $limitar_porcentaje = (100/$cantidad_aplica)*$progreso;
            $porcentaje  = bcdiv($limitar_porcentaje, '1', 1);
            return view("Program.Documentos.documento4",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7','porcentaje'));
        }
        if($obtenerVista[0] == 'documento5'){
            $cantidad_aplica = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->count();
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->where("aplica","=","si")
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','PROCESO DE COMPRA')
                                ->where("aplica","=","si")
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->where("aplica","=","si")
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR')
                                ->where("aplica","=","si")
                                ->get();
            $resultado6 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado7 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->where("aplica","=","si")
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            
            $limitar_porcentaje = (100/$cantidad_aplica)*$progreso;
            $porcentaje  = bcdiv($limitar_porcentaje, '1', 1);
            return view("Program.Documentos.documento5",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7','porcentaje'));
        }
        if($obtenerVista[0] == 'documento6'){
            $cantidad_aplica = Documentos::where("licitacion_id","=",$id)
                        ->where("aplica","=","si")
                        ->count();
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SOLICITUD DE ADQUISICIÓN')
                                ->where("aplica","=","si")
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:')
                                ->where("aplica","=","si")
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS')
                                ->where("aplica","=","si")
                                ->get();
            $resultado4 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','TRÁMITE DE PAGO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado5 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:')
                                ->where("aplica","=","si")
                                ->get();
            $resultado6 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->where("aplica","=","si")
                                ->get();
            $resultado7 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICIÓN DE LA CUENTA PÚBLICA')
                                ->where("aplica","=","si")
                                ->get();
            $progreso = Documentos::where("licitacion_id","=",$id)
                                ->whereRaw("LENGTH(ruta_documento) != 0")
                                ->count();
            
            $limitar_porcentaje = (100/$cantidad_aplica)*$progreso;
            $porcentaje  = bcdiv($limitar_porcentaje, '1', 1);
            return view("Program.Documentos.documento6",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7','porcentaje'));
        }
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
            return view("Program.Anexos.anexo3");
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
    public function aplicavista(string $id){
        $data = Licitacion::find($id);
        $documentos = collect([
            ['nombre' => 'Documentos a integrar', 'vista' => 'aplica1'],
            ['nombre' => 'Contratacion de personal', 'vista' => 'aplica2'],
            ['nombre' => 'Compras menores', 'vista' => 'aplica3'],
            ['nombre' => 'Invitacion restringida', 'vista' => 'aplica4'],
            ['nombre' => 'Adjudicacion directa', 'vista' => 'aplica5'],
            ['nombre' => 'Licitacion publica', 'vista' => 'aplica6'],
        ]);
        
        $obtenerVista = $documentos->where('nombre',$data->area)->pluck('vista');
        if($obtenerVista[0] == 'aplica1'){
            $documento1 = Documentos::where("licitacion_id","=",$id)->get();
            
            return view("Program.Aplica.aplica1",compact('documento1'));
        }
        if($obtenerVista[0] == 'aplica2'){
            $resultado1 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','EJERCICIO (RECURSOS HUMANOS)')
                                ->get();
            $resultado2 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','SEGUIMIENTO')
                                ->get();
            $resultado3 = Documentos::where('licitacion_id','=',$id)
                                ->where('categoria', '=','RENDICION DE LA CUENTA PUBLICA')
                                ->get();
            return view("Program.Aplica.aplica2",compact('resultado1','resultado2','resultado3'));
        }
        if($obtenerVista[0] == 'aplica3'){
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
            return view("Program.Aplica.aplica3",compact('resultado1','resultado2','resultado3','resultado4','resultado5'));
        }
        if($obtenerVista[0] == 'aplica4'){
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
            return view("Program.Aplica.aplica4",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7'));
        }
        if($obtenerVista[0] == 'aplica5'){
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
            return view("Program.Aplica.aplica5",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7'));
        }
        if($obtenerVista[0] == 'aplica6'){
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
            return view("Program.Aplica.aplica6",compact('resultado1','resultado2','resultado3','resultado4','resultado5','resultado6','resultado7'));
        }
    }
    public function aplica (Request $request, string $id){
        $documento_encontrado = Documentos::find($id);

        $documento_encontrado->licitacion_id = $documento_encontrado->licitacion_id;//
        $documento_encontrado->categoria = $documento_encontrado->categoria;
        $documento_encontrado->requisito = $documento_encontrado->requisito;
        $documento_encontrado->informacion_estado = $documento_encontrado->informacion_estado;//
        $documento_encontrado->ruta_documento = $documento_encontrado->ruta_documento;//
        $documento_encontrado->comentario = $documento_encontrado->comentario;//
        $documento_encontrado->area = $documento_encontrado->area;
        $documento_encontrado->aplica = $request->post('aplica');
        
        $documento_encontrado->save();         
        $id = $documento_encontrado->licitacion_id;
        return redirect()->route("licitacion.index");
        //return redirect()->route("licitacion.index",$id);
    }
}
