<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';

    protected $fillable = [
        'id_persona',
        'nombre_persona',
        'apellido_persona',
        'documento_persona',
        'telefono',
        'correo_persona',
        'tipo_documento',
        'nacionalidad'
    ];

    protected $index_columns = [
        'id_persona',
        'nombre_persona',
        'apellido_persona',
        'documento_persona',
        'telefono',
        'correo_persona',
        'tipo_documento',
        'nacionalidad'

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
