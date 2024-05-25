<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'id_pedido';

    protected $fillable = [
        'id_pedido',
        'pedido_id_usuario',
        'pedido_id_control_inventario',
        'pedido_id_proveedor',
        'cantidad_producto',
        'fecha_entrega',
        'precio_total_pedido',
        'precio_unitario_producto',
    ];

    protected $index_columns = [
        'id_pedido',
        'pedido_id_usuario',
        'pedido_id_control_inventario',
        'pedido_id_proveedor',
        'cantidad_producto',
        'fecha_entrega',
        'precio_total_pedido',
        'precio_unitario_producto',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
