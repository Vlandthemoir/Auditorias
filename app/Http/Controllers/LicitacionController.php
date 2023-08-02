<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licitacion;
use App\Models\Usuarios;
use App\Models\Documentos;
use Database\Seeders\Documento1Seeder;
use Database\Seeders\Documento2Seeder;
use Database\Seeders\Documento3Seeder;
use Database\Seeders\Documento4Seeder;
use Database\Seeders\Documento5Seeder;
use Database\Seeders\Documento6Seeder;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
//use Illuminate\Database\Seeder;

class LicitacionController extends Controller
{
    public function index(){
        $id = auth()->user()->id;
        $datos = Licitacion::where('usuario_id','=',$id)->get();
        return view('Program.Licitacion.index',compact('datos'));
    }
    public function create(){
        $datos = Usuarios::all();
        return view('Program.Licitacion.create',compact('datos'));
    }
        public function store(Request $request)
    {
        $licitacion = new Licitacion();
        $licitacion->usuario_id = auth()->user()->id;
        $licitacion->nombre = $request->post('nombre');
        $licitacion->folio = $request->post('folio');
        $licitacion->area = $request->post('area');
        $licitacion->fecha_elaboracion = $request->post('fecha_elaboracion');
        $licitacion->fecha_recepcion = $request->post('fecha_recepcion');
        $licitacion->plazo_dias = $request->post('plazo_dias');
        $licitacion->formato_fecha = $request->post('formato_fecha');
        $fecha_evaluar = $request->post('fecha_documentos');
        if($fecha_evaluar == "Fecha de elaboracion"){
            $fecha_base = $request->post('fecha_elaboracion');
        }
        if($fecha_evaluar == "Fecha de recepcion"){
            $fecha_base = $request->post('fecha_recepcion');
        }

        $fechaCarbon = Carbon::parse($fecha_base);
        $verificarDia = $request->post('formato_fecha');
        if($verificarDia == "Habiles"){
            $dias_sumar = $request->post('plazo_dias');
            $calcular_fecha_timestamp = strtotime($fecha_base) + ($dias_sumar * 24 * 60 * 60);
            $fecha_calculada = date('Y-m-d', $calcular_fecha_timestamp);
        }
        if($verificarDia == "Naturales"){
            $nombreDiaSemana = $fechaCarbon->englishDayOfWeek;
            if($nombreDiaSemana == "Saturday"){
                $diaExtra = 2;
            }
            if($nombreDiaSemana == "Sunday"){
                $diaExtra = 1;
            }else{
                $diaExtra = 0;
            }

            $dias_sumar = $request->post('plazo_dias');
            $calcular_fecha_timestamp = strtotime($fecha_base) + (($dias_sumar+$diaExtra) * 24 * 60 * 60);
            $fecha_calculada = date('Y-m-d', $calcular_fecha_timestamp);
            
        }
        

        $licitacion->fecha_culminacion = $fecha_calculada;
        $licitacion->save();

        /*obtener el id de la licitaicon*/
        $getfolio = $request->post('folio');
        $getid = Licitacion::where('folio','=',$getfolio)->pluck('id');
        $ids = implode(', ', $getid->toArray());
        /*generar los requisitos*/
        $documento = $request->post('area');
        if($documento == 'Documentos a integrar'){
            $seeder = new Documento1Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Contratacion de personal'){
            $seeder = new Documento2Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Compras menores'){
            $seeder = new Documento3Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Invitacion restringida'){
            $seeder = new Documento4Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Adjudicacion directa'){
            $seeder = new Documento5Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Licitacion publica'){
            $seeder = new Documento6Seeder();
            $seeder->run($ids);
        }
        return redirect()->route("licitacion.index");
    }
    public function store_admin(Request $request)
    {
        $licitacion = new Licitacion();
        $licitacion->usuario_id = $request->post('usuario_id');
        $licitacion->nombre = $request->post('nombre');
        $licitacion->folio = $request->post('folio');
        $licitacion->area = $request->post('area');
        $licitacion->fecha_elaboracion = $request->post('fecha_elaboracion');
        $licitacion->fecha_recepcion = $request->post('fecha_recepcion');
        $licitacion->plazo_dias = $request->post('plazo_dias');
        $licitacion->formato_fecha = $request->post('formato_fecha');
        $fecha_evaluar = $request->post('fecha_documentos');
        if($fecha_evaluar == "Fecha de elaboracion"){
            $fecha_base = $request->post('fecha_elaboracion');
        }
        if($fecha_evaluar == "Fecha de recepcion"){
            $fecha_base = $request->post('fecha_recepcion');
        }
        $dias_sumar = $request->post('plazo_dias');
        $calcular_fecha_timestamp = strtotime($fecha_base) + ($dias_sumar * 24 * 60 * 60);
        $fecha_calculada = date('Y-m-d', $calcular_fecha_timestamp);

        $licitacion->fecha_culminacion = $fecha_calculada;
        $licitacion->save();

        /*obtener el id de la licitaicon*/
        $getfolio = $request->post('folio');
        $getid = Licitacion::where('folio','=',$getfolio)->pluck('id');
        $ids = implode(', ', $getid->toArray());
        /*generar los requisitos*/
        $documento = $request->post('area');
        if($documento == 'Documentos a integrar'){
            $seeder = new Documento1Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Contratacion de personal'){
            $seeder = new Documento2Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Compras menores'){
            $seeder = new Documento3Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Invitacion restringida'){
            $seeder = new Documento4Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Adjudicacion directa'){
            $seeder = new Documento5Seeder();
            $seeder->run($ids);
        }
        if($documento == 'Licitacion publica'){
            $seeder = new Documento6Seeder();
            $seeder->run($ids);
        }
        return redirect()->route("licitacion.index");
    }
    public function destroy(string $id)
    {
        $licitacion = Licitacion::find($id);
        $licitacion->delete();
        return redirect()->route("licitacion.all");
    }
    public function all(){
        $datos = Usuarios::join('licitacion', 'usuarios.id', '=', 'licitacion.usuario_id')
                    ->select('licitacion.id','usuarios.usuario','licitacion.nombre','licitacion.folio','licitacion.area','licitacion.fecha_elaboracion','licitacion.fecha_recepcion','licitacion.fecha_culminacion')->get();
        return view('Program.Licitacion.all',compact('datos'));
    }
    public function edit(string $id)
    {
        $licitacion = Licitacion::find($id);
        return view("Program.Licitacion.update",compact('licitacion'));
    }
    public function update(Request $request, string $id)
    {
        $licitacion_encontrada = Licitacion::find($id);

        $licitacion = new Licitacion();
        $licitacion->usuario_id = $licitacion_encontrada->usuario_id; 
        $licitacion->nombre = $request->post('nombre');
        $licitacion->folio = $request->post('folio');
        $licitacion->area = $licitacion_encontrada->area;
        $licitacion->fecha_elaboracion = $request->post('fecha_elaboracion');
        $licitacion->fecha_recepcion = $request->post('fecha_recepcion');
        $licitacion->plazo_dias = $request->post('plazo_dias');
        $licitacion->formato_fecha = $request->post('formato_fecha');

        
        $fecha_base = $request->post('fecha_elaboracion');
        $dias_sumar = $request->post('plazo_dias');
        $calcular_fecha_timestamp = strtotime($fecha_base) + ($dias_sumar * 24 * 60 * 60);
        $fecha_calculada = date('Y-m-d', $calcular_fecha_timestamp);
        $licitacion->fecha_culminacion = $fecha_calculada;
        $licitacion->save();
        return redirect()->route("licitacion.all");
    }
}
