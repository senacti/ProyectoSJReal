<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto',
        'precio_producto',
        'descripcion_producto',
        'nombre_producto',
        'estado_producto',
        'existencias_producto',
        'maximo_producto',
        'minimo_producto',
        'tipo_producto',
    ];

    protected $index_columns = [
        'id_producto',
        'precio_producto',
        'descripcion_producto',
        'nombre_producto',
        'estado_producto',
        'existencias_producto',
        'maximo_producto',
        'minimo_producto',
        'tipo_producto',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
