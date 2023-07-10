<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Documento6Seeder extends Seeder
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
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '01.ELABORACIÓN DE LA CEDULA DE PROGRAMACIÓN DE EVENTOS Y BASES DE LICITACIÓN PARA SU PUBLICACIÓN EN EL DIARIO OFICIAL DE LA FEDERACIÓN ASÍ COMO EN COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '02.MEMORÁNDUM DE MATERIALES A LA SUBDIRECCIÓN DE RECURSOS FINANCIEROS PARA SOLICITAR EL TRÁMITE DE PAGO PARA LA CONVOCATORIA EN EL DIARIO OFICIAL DELA FEDERACIÓN EN LA CIUDAD DE MÉXICO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '03.COMPROBANTE DE PAGO DE LAS CONVOCATORIAS PARA SU PUBLICACIÓN EN EL DIARIO OFICIAL DE LA FEDERACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '04.PUBLICACIÓN DE LA CONVOCATORIA EN EL DIARIO OFICIAL DE LA FEDERACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '05.AUTORIZACIÓN POR PARTE DE LA SECRETARIA DE HACIENDA Y CRÉDITO PUBLICO PARA EL PROCEDIMIENTO DE COMPRAS, TRANSFERENCIAS DE CONVOCATORIA Y BASES DE LICITACIONES AL SISTEMA COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '06.RECEPCIÓN DE DEUDAS DE LOS PROVEEDORES PARTICIPANTES A TRAVÉS DEL SISTEMA DE COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '07.MEMORÁNDUM CITANDO AL COMITÉ DE ADQUISICIONES Y AL ÁREA REQUIRENTE PARA LA JUNTA DE ACLARACIÓN DE DUDAS, DONDE SE LEVANTA ACTA DE ACLARACIÓN DE DUDAS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '08.TRANSFERENCIA DEL ACTA DE ACLARACIÓN A COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '09.PROPUESTAS TÉCNICAS Y ECONÓMICAS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '10.ACTA DE APERTURA Y TRANSFERENCIA AL SISTEMA COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '11.MEMORÁNDUM DEL ÁREA REQUIRENTE DE ENVÍO DE DOCUMENTACIÓN TÉCNICA PARA SU ANÁLISIS Y EVALUACIÓN CORRESPONDIENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '12.MEMORÁNDUM DE DOCUMENTACIÓN TÉCNICA DEBIDAMENTE VALIDADA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '13.ACTA DE FALLO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '14.ADJUDICACIÓN DEL PROCESO LICITATORIO Y TRANSFERIDO A COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '15.CONTRATOS Y PEDIDOS ASÍ COMO SU TRANSFERENCIA A COMPRANET',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '16.OFICIO DE NOTIFICACIÓN AL PROVEEDOR ADJUDICADO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '17.MEMORÁNDUM DE LA SUBDIRECCIÓN DE RECURSOS MATERIALES AL ÁREA REQUIRENTE CON LA RELACIÓN DE LOS PROVEEDORES ADJUDICADOS, LOTES DE BIENES ADQUIRIDOS, LOTES DESIERTOS EN SU CASO, CUADRO DE DISTRIBUCIÓN PARA SU ABASTECIMIENTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DRM',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE LICITACIÓN PÚBLICA:',
            'requisito' => '18.MEMORÁNDUM DE RECURSOS MATERIALES DIRIGIDO AL TITULAR DEL ALMACÉN DE LA RELACIÓN DE PROVEEDORES ADJUDICADOS Y LOS LOTES DE BIENES ADQUIRIDOS, LOS LOTES DESIERTOS EN SU CASO Y CUADROS DE DISTRIBUCIÓN',
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
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '01.FORMATO DE CALCULO DE PENA CONVENCIONAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '02.OFICIOS DE NOTIFICACIÓN DE PENALIZACIÓN AL PROVEEDOR',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '03.MEMORÁNDUMS DIRIGIDOS A LA SUBDIRECCIÓN DE RECURSOS FINANCIEROS PARA DEPOSITO DEL CHEQUE CERTIFICADO QUE AMPARAN EL IMPORTE DE LA PENALIZACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '04.SI NO SE TIENE EL CHEQUE CERTIFICADO Y SE AGOTARON LAS 3 NOTIFICACIONES AL PROVEEDOR, MEMORÁNDUM DE LAS SUBDIRECCIÓN DE RECURSOS MATERIALES A LA SUBDIRECCIÓN DE ASUNTOS JURÍDICOS PARA QUE ESTA HAGA EFECTUAR LA FIANZA:',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '4.1.ACTA ADMINISTRATIVA DE INCUMPLIMIENTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '4.2.CONTRATO Y PEDIDO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '4.3.FIANZA O CHEQUE CERTIFICADO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
            'requisito' => '4.4.OFICIO DE PENALIZACIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'GENERALIDADES EN EL CASO DE PENALIZACIONES AL PROVEDOR:',
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
            'area' =>'',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RENDICIÓN DE LA CUENTA PÚBLICA',
            'requisito' => '01.INFORMES TRIMESTRALES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'',
            'aplica' =>'',
        ]);
    }
}
