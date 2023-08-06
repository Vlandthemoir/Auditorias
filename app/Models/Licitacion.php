<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licitacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'nombre',
        'folio',
        'area',
        'fecha_elaboracion',
        'fecha_recepcion',
        'plazo_dias',
        'formato_fecha',
        'fecha_culminacion',
        'cantidad_aplica',
        'progreso_aplica',
        ];
    //sobreescritura de las convenciones
    protected $table = 'licitacion';
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
