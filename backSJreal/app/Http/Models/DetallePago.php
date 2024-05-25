<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePago extends Model
{
    use HasFactory;
    protected $table = 'destalles_pago';
    protected $primaryKey = 'id_detalle_pago';

    protected $fillable = [
        'id_detalle_pago',
        'detalle_pago_id_pago',
        'detalle_pago_id_producto',
        'precio_por_item',
        'cantidad_item',
        'detalle_pago_precio_total',
    ];

    protected $index_columns = [
        'id_detalle_pago',
        'detalle_pago_id_pago',
        'detalle_pago_id_producto',
        'precio_por_item',
        'cantidad_item',
        'detalle_pago_precio_total',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
