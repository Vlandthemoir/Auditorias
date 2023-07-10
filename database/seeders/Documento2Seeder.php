<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Documento2Seeder extends Seeder
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
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '01.TABULADORES Y MODIFICACIONES CON OFICIO DE AUTORIZACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '02.PLANTILLA DE PERSONAL AUTORIZADA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '03.MOVIMIENTOS NOMINALES DEL PERSONAL CONTRATADO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '04.CONTRATOS Y EXPEDIENTES DE PERSONAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '05.INTEGRACIÓN DE LAS RETENCIONES Y ENTEROS, DEL IMPUESTO SOBRE NÓMINAS, ISSSTE, FOVISSSTE Y SAR',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '06.BASES DE DATOS DE LAS NÓMINAS CON PERCEPCIONES Y DEDUCCIONES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '07.DATOS Y NOMBRAMIENTOS DE PERSONAL EN FUNCIONES Y EX FUNCIONARIOS.',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'EJERCICIO (RECURSOS HUMANOS)',
            'requisito' => '08.RECIBO DE REINTEGRO ( SI NO SE EJERCIO EN SU TOTALIDAD EL RECURSO)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SEGUIMIENTO',
            'requisito' => '01.FORMATO DE SEGUIMIENTO DE METAS MENSUAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE PLANEACION',
            'aplica' =>'',
        ]);
        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RENDICION DE LA CUENTA PUBLICA',
            'requisito' => '01.INFORMES TRIMESTRALES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DIRECCIÓN DE PLANEACION',
            'aplica' =>'',
        ]);
    }
}
