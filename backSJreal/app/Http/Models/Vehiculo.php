<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    use HasFactory;
    protected $table = 'vehiculos';
    protected $primaryKey = 'id_vehiculo';

    protected $fillable = [
        'id_vehiculo',
        'vehiculo_id_usuario',
        'placa_vehiculo',
        'modelo_vehiculo',
        'color_vehiculo',
    ];

    protected $index_columns = [
        'id_vehiculo',
        'vehiculo_id_usuario',
        'placa_vehiculo',
        'modelo_vehiculo',
        'color_vehiculo',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}





