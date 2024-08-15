<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'code',
        'nombre_categoria',
        'updated_at'
    ];

    protected $index_columns = [
        'code',
        'nombre_categoria',
        'updated_at'

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];


}
