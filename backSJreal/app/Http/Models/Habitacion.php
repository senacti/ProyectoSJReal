<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table = 'habitaciones';
    protected $primaryKey = 'id_habitacion';

    protected $fillable = [
        'id_habitacion',
        'habitacion_id_sucursal',
        'numero_habitacion',
        'descripcion_habitacion',
        'tipo_habitacion',
        'capacidad_habitacion',
        'precio_habitacion'
    ];

    protected $index_columns = [
        'id_habitacion',
        'habitacion_id_sucursal',
        'numero_habitacion',
        'descripcion_habitacion',
        'tipo_habitacion',
        'capacidad_habitacion',
        'precio_habitacion'

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
