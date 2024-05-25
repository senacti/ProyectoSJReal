<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'PQRS';
    protected $primaryKey = 'id_PQRS';

    protected $fillable = [
        'id_PQRS',
        'pqrs_id_usuario',
        'fecha_pqrs',
        'tipo_pqrs',
        'descripcion_pqrs',
    ];

    protected $index_columns = [
        'id_PQRS',
        'pqrs_id_usuario',
        'fecha_pqrs',
        'tipo_pqrs',
        'descripcion_pqrs',

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
