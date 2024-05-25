<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlInventario extends Model
{
    use HasFactory;
    protected $table = 'control_inventarios';
    protected $primaryKey = 'id_control_inventario';

    protected $fillable = [
        'id_control_inventario',
        'control_inventario_id_producto',
        'fecha_actualizacion',
        'tipop_actualizacion',
        'cantidad_añadida',
        'cantidad_restada',
    ];

    protected $index_columns = [
        'id_control_inventario',
        'control_inventario_id_producto',
        'fecha_actualizacion',
        'tipop_actualizacion',
        'cantidad_añadida',
        'cantidad_restada',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
