<?php

namespace Database\Seeders;

use App\Http\Repositories\PersonaRepository;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Arr;

class PersonaSeeder extends Seeder
{

    /*
    |--------------------------------------------------------------------------
    | ATTRIBUTES
    |--------------------------------------------------------------------------
    */
    private $persona_repository;

    /*
    |--------------------------------------------------------------------------
    | CONSTRUCTOR
    |--------------------------------------------------------------------------
    */
    public function __construct(
        PersonaRepository $persona_repository
    ){
        $this->persona_repository = $persona_repository;

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/seeders/seedersJson/personas.json');
        $personas = json_decode($json);
        foreach ($personas as $persona) {
            $persona = (array) $persona;
            
            $this->persona_repository->updateOrCreate(["id_persona"=>Arr::only($persona,"id_persona")],$persona);
        }


    }

}
