<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Pago;



/**
 *
 */
class PagoRepository extends BaseRepository
{

    public function __construct(Pago $model,
                                )
    {
        parent::__construct($model);


    }


}
