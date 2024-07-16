<?php

namespace Database\Seeders;

use App\Http\Controllers\UsuarioController;
use App\Http\Repositories\UsuarioRepository;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Arr;

class UsuarioSeeder extends Seeder
{

    /*
    |--------------------------------------------------------------------------
    | ATTRIBUTES
    |--------------------------------------------------------------------------
    */
    private $usuario_repository;
    private $usuario_controller;

    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct(
        UsuarioRepository $usuario_repository,
        UsuarioController $usuario_controller
    ){
        $this->usuario_repository = $usuario_repository;
        $this->usuario_controller = $usuario_controller;

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/seeders/seedersJson/usuarios.json');
        $usuarios = json_decode($json);
        foreach ($usuarios as $usuario) {
            // dd(gettype(($usuario)));
            
            $usuarioRequets = new Request([
                 'usuario_id_persona' => $usuario->usuario_id_persona,
                 'contrasena_usuario' =>$usuario->contrasena_usuario,
                 'nombre_usuario' => $usuario->nombre_usuario,
                 'rol' => $usuario->rol,
                ]);
                
            $this->usuario_controller->store($usuarioRequets);
        }

    }

}
