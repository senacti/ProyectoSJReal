<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = 'sucursales';
    protected $primaryKey = 'id_sucursal';

    protected $fillable = [
        'id_sucursal',
        'sucursal_id_usuario',
        'NIT_sucursal',
        'nombre_sucursal',
        'departamento_sucursal',
        'cuidad_sucursal',
        'calle_sucursal',
        'carrera_sucursal',
        'telefono_sucursal',
        'correo_sucursal',
    ];

    protected $index_columns = [
        'id_sucursal',
        'sucursal_id_usuario',
        'NIT_sucursal',
        'nombre_sucursal',
        'departamento_sucursal',
        'cuidad_sucursal',
        'calle_sucursal',
        'carrera_sucursal',
        'telefono_sucursal',
        'correo_sucursal',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
