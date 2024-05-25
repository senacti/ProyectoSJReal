<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parqueadero extends Model
{
    use HasFactory;
    protected $table = 'parqueadero';
    protected $primaryKey = 'id_parqueadero';

    protected $fillable = [
        'id_parqueadero',
        'vehiculo_id_vehiculo',
        'hospedaje_id_hospedaje',
        'status',
        'code',
    ];

    protected $index_columns = [
        'id_parqueadero',
        'vehiculo_id_vehiculo',
        'hospedaje_id_hospedaje',
        'status',
        'code',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
