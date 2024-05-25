<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventarios';
    protected $primaryKey = 'id_inventario';

    protected $fillable = [
        'id_inventario',
        'inventario_id_control',
        'inventario_id_sucursal',
        'cantidad_inventarios',
        'nombre_Inventario',
        'categoria_Inventario',
    ];

    protected $index_columns = [
        'id_inventario',
        'inventario_id_control',
        'inventario_id_sucursal',
        'cantidad_inventarios',
        'nombre_Inventario',
        'categoria_Inventario',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
