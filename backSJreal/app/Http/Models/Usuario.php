<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'id_usuario',
        'usuario_id_persona',
        'contrasena_usuario',
        'nombre_usuario'
    ];

    protected $index_columns = [
        'id_usuario',
        'usuario_id_persona',
        'contrasena_usuario',
        'nombre_usuario'

    ];


    public function roles(){
        return $this->belongsToMany(Rol::class, 'roles_has_usuarios', 'usuarios_id_usuario', 'rol_id_rol');
    }
    public function persona(){
        return $this->hasOne(Usuario::class, 'usuario_id_persona');
    }
}
