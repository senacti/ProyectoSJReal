<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\DetallePago;



/**
 *
 */
class DetallePagoRepository extends BaseRepository
{

    public function __construct(DetallePago $model,
                                )
    {
        parent::__construct($model);


    }


}
