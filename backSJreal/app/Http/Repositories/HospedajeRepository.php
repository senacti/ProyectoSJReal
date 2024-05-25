<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Hospedaje;
use Illuminate\Support\Arr;

/**
 *
 */
class HospedajeRepository extends BaseRepository
{

    public function __construct(Hospedaje $model,
                                )
    {
        parent::__construct($model);


    }


    public function store( array $requestArray){

        // if(){
        //     hospedaje_id_habitacion
        // }

        $this->updateOrCreate(["id_hospedaje"=>Arr::only($requestArray,"id_hospedaje")],$requestArray);


    }

}
