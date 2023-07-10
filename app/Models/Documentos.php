<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    use HasFactory;
    protected $fillable = [
        'licitacion_id',
        'categoria',
        'requisito',
        'informacion_estado',
        'ruta_documento',
        'comentario',
        'area',
        'aplica',
        ];
    //sobreescritura de las convenciones
    protected $table = 'documentos';
    /**
    * The name of the "created at" column.
    * @var string
    */
    const CREATED_AT = 'fecha_creado';
    /**
    * The name of the "updated at" column.
    * @var string
    */
    const UPDATED_AT = 'fecha_modificado';
}
