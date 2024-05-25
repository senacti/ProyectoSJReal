<?php

namespace Database\Seeders;

use App\Http\Repositories\HabitacionRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Arr;

class HabitacionSeeder extends Seeder
{

    /*
    |--------------------------------------------------------------------------
    | ATTRIBUTES
    |--------------------------------------------------------------------------
    */
    private $habitacion_repository;

    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct(
        HabitacionRepository $habitacion_repository
    ){
        $this->habitacion_repository = $habitacion_repository;

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/seeders/seedersJson/habitaciones.json');
        $habitaciones = json_decode($json);
        foreach ($habitaciones as $habitacion) {
            $habitacion = (array) $habitacion;
            $this->habitacion_repository->updateOrCreate(["id_habitacion"=>Arr::only($habitacion,"id_habitacion")],$habitacion);
        }

    }

}