<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Documento4Seeder extends Seeder
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
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '01.CEDULA DE PROGRAMACIÓN DE EVENTOS Y BASES DE LA INV. RESTRINGIDA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '02.AUTORIZACIÓN POR PARTE DEL COMITÉ DE ADQUISICIONES (ACUERDO DE INICIO)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '03.OFICIO DE INVITACIÓN A PARTICIPAR EN EL PROCESO  A LOS PROVEEDORES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '04.ACTA DE ACLARACIÓN DE DUDAS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '05.ACTA DE APERTURA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '06.MEMORÁNDUM DEL ENVIÓ DEL ÁREA REQUIRENTE DE LA DOCUMENTACIÓN TÉCNICA PARA SU ANÁLISIS Y EVALUACIÓN CORRESPONDIENTES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '07.ACTA DE FALLO Y ADJUDICACIÓN DEL PROCESO ',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '08.OFICIO DE NOTIFICACIÓN AL PROVEEDOR ADJUDICADO, ESPECIFICANDO LOTES Y MONTOS SIGNADOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '09.CONTRATOS Y PEDIDOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.DOCUMENTACIÓN DEL PROVEEDOR:',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.1.CURRICULUM FIRMADO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.2.RFC',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.3.ACTA CONSTITUTIVA EN EL REGISTRO PUBLICO DE LA PROPIEDAD',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.4.PODER NOTARIAL DEL REPRESENTANTE E INE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.5.CARTA DE DOMICILIO PARA ESCUCHAR Y RECIBIR NOTIFICACIONES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.6.GIRO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.7.ESTADOS FINANCIEROS DICTAMINADOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.8.INFRAESTRUCTURA (SI CUENTA CON INFRAESTRUCTURA ADECUADA)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.9.DECLARACIÓN ANUAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.10.LISTA DE CLIENTES',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.11.DATOS BANCARIOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.12.CONSTANCIA DE NO ADEUDOS FISCALES U OPINIÓN DE CUMPLIMIENTO FISCAL ANTES EL SAT (VIGENTE)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '10.13.REGISTRO DE PROVEEDORES (Recurso estatal)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '11.MEMORÁNDUM DEL ÁREA REQUIRENTE INDICANDO RELACIÓN DE PROVEEDORES ADJUDICADOS E INFORMANDO LOTES ADQUIRIDOS Y LOTES DESIERTOS',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '12.FIANZA DE CUMPLIMIENTO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '13.FIANZA DE ANTICIPO EN SU CASO',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'ADQUISICIONES DE BIENES Y SERVICIOS MEDIANTE INVITACIÓN A CUANDO MENOS TRES PERSONAS: ',
            'requisito' => '14.RECIBO DE REINTEGRO (SI APLICA)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '01.ENTRADA DE INSUMOS Y REMISIÓN SI APLICA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '02.MEMORÁNDUM DE LIBERACIÓN DE FACTURA',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '03.CUADROS DE DISTRIBUCIÓN',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '04.HOJAS DE SALIDAS DE INSUMOS Y ENTRADA DE SIAL',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'RECEPCIÓN DE INSUMOS MEDICOS, ADMINISTRATIVOS Y ACTIVOS FIJOS',
            'requisito' => '05.ALTA EN PATRIMONIO ( SI ES UN ACTIVO FIJO)',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'D RECURSOS MATERIALES',
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
            'requisito' => '06.DOCUMENTACIÓN SOPORTE DE PAGO SEGÚN EL AREA REQUIRIENTE',
            'informacion_estado' => '',
            'ruta_documento' =>'',
            'comentario' =>'',
            'area' =>'DAF',
            'aplica' =>'',
        ]);

        DB::table('documentos')->insert([
            'licitacion_id' => $id,
            'categoria' => 'TRÁMITE DE PAGO',
            'requisito' => '07.POLIZA CONTABLE DE PAGO',
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
