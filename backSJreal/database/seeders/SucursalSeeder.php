<?php

namespace Database\Seeders;

use App\Http\Repositories\SucursalRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Arr;

class SucursalSeeder extends Seeder
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
        SucursalRepository $rol_repository
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
        $json = File::get('database/seeders/seedersJson/sucursales.json');
        $sucursales = json_decode($json);
        foreach ($sucursales as $sucursal) {
            $sucursal = (array) $sucursal;
            $this->rol_repository->updateOrCreate(["id_sucursal"=>Arr::only($sucursal,"id_sucursal")],$sucursal);
        }

    }

}