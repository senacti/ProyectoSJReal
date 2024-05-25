<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Persona;
use Illuminate\Http\Request;



/**
 *
 */
class PersonaRepository extends BaseRepository
{

    public function __construct(Persona $model,
                                )
    {
        parent::__construct($model);


    }


}
