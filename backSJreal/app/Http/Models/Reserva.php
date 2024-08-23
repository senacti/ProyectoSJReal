<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';
    protected $primaryKey = 'id_reserva';

    protected $fillable = [
        'id_reserva',
        'reserva_id_usuario',
        'codigo_reserva',
        'checkin_reserva',
        'checkout_reserva',
        'cantidad_habitaciones_reserva',
        'precio_por_habitacion_reserva',
        'precio_total_reserva',
    ];

    protected $index_columns = [
        'id_reserva',
        'reserva_id_usuario',
        'codigo_reserva',
        'checkin_reserva',
        'checkout_reserva',
        'cantidad_habitaciones_reserva',
        'precio_por_habitacion_reserva',
        'precio_total_reserva',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
