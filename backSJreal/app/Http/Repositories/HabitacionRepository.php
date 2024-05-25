<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Habitacion;



/**
 *
 */
class HabitacionRepository extends BaseRepository
{

    public function __construct(Habitacion $model,
                                )
    {
        parent::__construct($model);


    }


}
