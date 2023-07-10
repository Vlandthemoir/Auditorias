<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Documento3Seeder extends Seeder
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
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '01.MEMORÁNDUM Y FORMATO DE SOLICITUD DE COMPRA (REQUISICIONES) DEL ÁREA REQUIRENTE DEBIDAMENTE REQUISITADAS Y DEBERÁ CONTENER LOS SIGUIENTE:',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.1.NOMBRE DEL PROGRAMA O PROYECTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.2.CLAVE PRESUPUESTAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.3.NUMERO DE PARTIDA Y CONCEPTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.4.IMPORTE APROXIMADO DE LA REQUISICIÓN CON IVA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.5.ORIGEN DEL RECURSO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.6.SUFICIENCIA PRESUPUESTAL DEBIDAMENTE AUTORIZADA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '01.RECEPCIÓN DE FACTURAS Y PEDIDO, DEBIDAMENTE SELLADOS POR ALMACÉN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'ALMACEN ( SI ENTRO POR ALMACEN, SI FUE COMPRA DIRECTA EL LIDER DEL PROYECTO DEBE TENER LA INFORMACIÓN',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '02.ENTRADA DE INSUMOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '03.MEMORÁNDUM DE LIBERACIÓN DE FACTURA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '04.CUADROS DE DISTRIBUCIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '05.HOJAS DE SALIDAS DE INSUMOS Y ENTRADA DE SIAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '06.ALTA EN PATRIMONIO ( SI ES UN ACTIVO FIJO)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '01.SOLICITUD DE PAGO DEL AREA REQUIRIENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '02.SPEI',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '03.HOJA CASH (comprobante bancario)/cheque; poliza de cheque, credencial, otro documento identificación',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '04.FACTURACIÓN CON SELLO DE SERVICIO O DEL AREA VALIDADORA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '05.VERIFICACIÓN EN SAT DEL CFDI',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '06.OFICIOS DE AUTORIZACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '07.DOCUMENTACIÓN SOPERTE DE PAGO SEGÚN EL AREA REQUIRIENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '7.2.ORDEN DE TRABAJO ',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '7.3.SUFICIENCIA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '7.4.FACTURA FIRMADA Y SELLADA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '08.POLIZA CONTABLE DE PAGO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SEGUIMIENTO',
            'requisito' => '01.FORMATO DE SEGUIMIENTO DE METAS MENSUAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DP',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RENDICIÓN DE LA CUENTA PÚBLICA',
            'requisito' => '01.INFORMES TRIMESTRALES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DP',
            'aplica' =>'',
        ]);
    }
}
