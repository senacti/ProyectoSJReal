<?php

namespace Database\Seeders;

use App\Http\Repositories\RolRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Arr;

class RolSeeder extends Seeder
{

    /*
    |--------------------------------------------------------------------------
    | ATTRIBUTES
    |--------------------------------------------------------------------------
    */
    private $rol_repository;

    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct(
        RolRepository $rol_repository
    ){
        $this->rol_repository = $rol_repository;

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/seeders/seedersJson/roles.json');
        $personas = json_decode($json);
        foreach ($personas as $persona) {
            $persona = (array) $persona;
            $this->rol_repository->updateOrCreate(["id_rol"=>Arr::only($persona,"id_rol")],$persona);
        }

    }

}