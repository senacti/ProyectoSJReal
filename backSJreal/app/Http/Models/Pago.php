<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'id_pago',
        'pago_id_hospedaje',
        'pago_id_persona',
        'titular_pago',
        'medio_pago',
        'concepto_pago',
        'total_pago',
        'tipo_cliente',
        'estado_hospedaje',
    ];

    protected $index_columns = [
        'id_pago',
        'pago_id_hospedaje',
        'pago_id_persona',
        'titular_pago',
        'medio_pago',
        'concepto_pago',
        'total_pago',
        'tipo_cliente',
        'estado_hospedaje',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
