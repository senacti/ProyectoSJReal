<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    use HasFactory;
    protected $table = 'hospedajes';
    protected $primaryKey = 'id_hospedaje';

    protected $fillable = [
        'id_hospedaje',
        'hospedaje_id_habitacion',
        'hospedaje_id_usuario',
        'check_in_hospedaje',
        'check_out_hospedaje',
        'cantidad_habitaciones_hospedaje',
        'cantidad_personas_hospedaje',
        'dias_hospedaje',
        'estado_hospedaje',
    ];

    protected $index_columns = [
        'id_hospedaje',
        'hospedaje_id_habitacion',
        'hospedaje_id_usuario',
        'check_in_hospedaje',
        'check_out_hospedaje',
        'cantidad_habitaciones_hospedaje',
        'cantidad_personas_hospedaje',
        'dias_hospedaje',
        'estado_hospedaje',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


    public function habitaciones(){
        return $this->hasMany(Rol::class, 'hospedaje_id_habitacion');
    }
}
