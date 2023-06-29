<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Models\Licitacion;
use App\Models\Usuarios;
use App\Models\Documentos;
use ZipArchive;
class DescargarController extends Controller
{
    public function download_all(){
        $storagePath = storage_path('app/public/Docs');
        $zipFileName = 'documentos licitaciones.zip';
        $zip = new ZipArchive();
        if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            $files = File::allFiles($storagePath);
    
            foreach ($files as $file) {
                $zip->addFile($file->getRealPath(), $file->getRelativePathname());
            }
            $zip->close();

            return Response::download($zipFileName)->deleteFileAfterSend();
        } else {
            return 'No se pudo descargar el archivo';
        }
    }
    public function donwload_licitacion(string $id){
        $licitacion = Licitacion::find($id);
        $usuario = Usuarios::find($licitacion->usuario_id);
        $documentos = Documentos::where("licitacion_id","=",$licitacion->id)->get();

        //$storagePath = storage_path('app/public/Docs');
        //$zipFileName = strval($usuario->usuario)."-".strval($licitacion->area).".zip";
        $zipFileName = "prueba.zip";
        $rutaZip = storage_path('app/public/Docs/'.$zipFileName);
        $zip = new ZipArchive();

        
        if ($zip->open($rutaZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
            foreach ($documentos as $documento) {
                $rutaDocumento = storage_path('app/'.$documento);
                $zip->addFile($rutaDocumento,$documento);
            }
            $zip->close();
            return Response::download($rutaZip)->deleteFileAfterSend();
        } else {
            return 'No se pudo descargar el archivo';
        }
    }
}
