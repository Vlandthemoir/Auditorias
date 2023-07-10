<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Documento5Seeder extends Seeder
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
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.2.CLAVE PRESUPUESTAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.3.NUMERO DE PARTIDA Y CONCEPTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.4.IMPORTE APROXIMADO DE LA REQUISICIÓN CON IVA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.5.ORIGEN DEL RECURSO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '1.6.SUFICIENCIA PRESUPUESTAL DEBIDAMENTE AUTORIZADA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'SOLICITUD DE ADQUISICIÓN',
            'requisito' => '02.SOLICITUD FUNDADA Y MOTIVADA DE LA URGENCIA DE LA COMPRA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '01.SOLICITUD DE COTIZACIONES DE LOS PROVEEDORES (CUANDO MENOS TRES)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '02.COTIZACIONES (INCLUIDO CURRICULUM DEL PROVEEDOR ADJUDICADO)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '03.MEMORÁNDUM DEL ÁREA DE MATERIALES DIRIGIDO AL TITULAR DEL ÓRGANO ADMINISTRATIVO SOLICITANTE, EN EL CUAL SE ANEXAN COTIZACIONES, CURRICULO DE LAS EMPRESAS PARTICIPANTES Y CATALOGO DE PRODUCTOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '04.CUADRO COMPARATIVO DE PRECIOS ENVIADO CON MEMO PARA VALIDACIÓN DEL ÁREA REQUIRENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '05.DICTAMEN TÉCNICO DEL ÁREA REQUIRENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '06.ACUERDO DE COMPRA POR PARTE DEL COMITÉ',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '07.ACUERDO DE INICIO DE COMPRA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '08.OFICIO DE NOTIFICACIÓN DEL PROVEEDOR ADJUDICADO EN EL QUE SE DAN A CONOCER LA NOTIFICACIÓN DEL FALLO O LA ADJUDICACIÓN DIRECTA, LOS LOTES Y MONTOS ASIGNADOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '09.CONTRATO Y PEDIDO U ORDEN DE TRABAJO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '10.FIANZA DE CUMPLIMIENTO ( O LA SOLICITUD Y ACEPTACIÓN DE LA EXENCIÓN DE LA FIANZA) Y FIANZA DE ANTICIPO (SI APLICA)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '11.MEMORÁNDUM AL TITULAR DEL ÁREA REQUIRENTE DE LOS PROVEEDORES ADJUDICADOS Y LOS LOTES DE BIENES ADQUIRIDOS, ASÍ COMO LOS LOTES DESIERTOS (SI EXISTIERAN)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '12.MEMORÁNDUM AL TITULAR DEL ALMACÉN, RELACIÓN DE LOS PROVEEDORES ADJUDICADOS, LOS BIENES ADQUIRIDOS Y LOS LOTES DESIERTOS SI EXISTIERAN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '13.CUADRO DE DISTRIBUCIÓN PROPORCIONADO POR EL ÁREA REQUIRENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'LIDER DEL PROYECTO',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '14.MEMORÁNDUM DEL TITULAR DEL ALMACÉN DE LA RECEPCIÓN DE LOS BIENES AL DEPARTAMENTO DE RECURSOS MATERIALES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'PROCESO DE COMPRA',
            'requisito' => '15.GARANTÍA EN CASO DE LOS BIENES MUEBLES Y EN CASO DE INSUMOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '01.RECEPCIÓN DE FACTURAS Y PEDIDO, DEBIDAMENTE SELLADOS POR ALMACÉN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'ALMACEN',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '02.ENTRADA DE INSUMOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'ALMACEN',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '03.MEMORÁNDUM DE LIBERACIÓN DE FACTURA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'ALMACEN',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '04.HOJAS DE SALIDAS DE INSUMOS Y ENTRADA DE SIAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'ALMACEN',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '05.ALTA EN PATRIMONIO ( SI ES UN ACTIVO FIJO)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'ALMACEN',
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
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '09.RECIBO DE REINTEGRO (SI APLICA)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '01.FORMATO DE CALCULO DE PENA CONVENCIONAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '02.OFICIOS DE NOTIFICACIÓN DE PENALIZACIÓN AL PROVEEDOR',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '03.MEMORÁNDUMS DIRIGIDOS A LA SUBDIRECCIÓN DE RECURSOS FINANCIEROS PARA DEPOSITO DEL CHEQUE CERTIFICADO QUE AMPARAN EL IMPORTE DE LA PENALIZACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '04.SI NO SE TIENE EL CHEQUE CERTIFICADO Y SE AGOTARON LAS 3 NOTIFICACIONES AL PROVEEDOR, MEMORÁNDUM DE LAS SUBDIRECCIÓN DE RECURSOS MATERIALES A LA SUBDIRECCIÓN DE ASUNTOS JURÍDICOS PARA QUE ESTA HAGA EFECTUAR LA FIANZA:',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '4.1.ACTA ADMINISTRATIVA DE INCUMPLIMIENTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '4.2.CONTRATO Y PEDIDO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '4.3.FIANZA O CHEQUE CERTIFICADO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '4.4.OFICIO DE PENALIZACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR',
            'requisito' => '05.MEMORÁNDUM DE LA SUBDIRECCIÓN DE RECURSOS MATERIALES AL TITULAR DE LA SUBDIRECCIÓN DE ASUNTOS JURÍDICOS PARA REALIZAR LOS TRAMITES CORRESPONDIENTES PARA LA APLICACIÓN DE LA FIANZA ACORDADA EN EL CONTRATO',
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
