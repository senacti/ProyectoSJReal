<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table = 'proveedores';
    protected $primaryKey = 'id_proveedor';

    protected $fillable = [
        'id_proveedor',
        'NIT_proveedor',
        'nombre_proveedor',
        'telefono_proveedor',
        'correo_proveedor',
        'categoria_proveedor',
    ];

    protected $index_columns = [
        'id_proveedor',
        'NIT_proveedor',
        'nombre_proveedor',
        'telefono_proveedor',
        'correo_proveedor',
        'categoria_proveedor',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
