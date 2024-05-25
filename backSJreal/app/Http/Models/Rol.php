<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';

    protected $fillable = [
        'id_rol',
        'name_rol'
    ];

    protected $index_columns = [
        'id_rol',
        'name_rol'

    ];

    public static $rules_store = [

    ];

    public static $rules_update = [
    ];

    

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'roles_has_usuarios', 'rol_id_rol', 'usuarios_id_usuario');
    }



}
