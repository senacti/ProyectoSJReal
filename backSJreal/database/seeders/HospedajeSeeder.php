<?php

namespace Database\Seeders;

use App\Http\Repositories\HospedajeRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Arr;

class HospedajeSeeder extends Seeder
{

    /*
    |--------------------------------------------------------------------------
    | ATTRIBUTES
    |--------------------------------------------------------------------------
    */
    private $hospedaje_repository;

    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct(
        HospedajeRepository $hospedaje_repository
    ){
        $this->hospedaje_repository = $hospedaje_repository;

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/seeders/seedersJson/hospedajes.json');
        $hospedajes = json_decode($json);
        // dd(gettype($hospedajes));
        // foreach ($hospedajees as $hospedaje) {
        //     $hospedaje = (array) $hospedaje;
        // $this->hospedaje_repository->store(["id_hospedaje"=>Arr::only($hospedaje,"id_hospedaje")],$hospedaje);
        $this->hospedaje_repository->store($hospedajes);
        // }

    }

}