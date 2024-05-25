<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Parqueadero;



/**
 *
 */
class ParqueaderoRepository extends BaseRepository
{

    public function __construct(Parqueadero $model,
                                )
    {
        parent::__construct($model);


    }


}
