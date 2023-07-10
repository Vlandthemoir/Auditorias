<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Documento1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($id)
    {
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'planeacion',
            'requisito' => '01.NORMATIVA (CONVENIOS ESTADO - FEDERACION (INSABI, AFASPE, E023), REGLAS DE OPERACIÓN)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'planeacion',
            'requisito' => '02.CARATULA DEL PROYECTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'SD DE PLANEACION EN SALUD',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'planeacion',
            'requisito' => '03.PARTIDAS AUTORIZADAS (EP 01)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'CONTROL PRESUPUESTAL',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'planeacion',
            'requisito' => '04.SOLICITUD ANTE LA SECRETARIA DE HACIENDA ( ORIGEN Y MODIFICACIONES)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'SD DE PROGRAMACION, ORG Y PPTO',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'planeacion',
            'requisito' => '05.OFICIO DE AUTORIZACION DE RECURSOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'SD DE PROGRAMACION, ORG Y PPTO',
            'aplica' =>'',
        ]);
    }
}
