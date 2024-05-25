<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\ControlInventario;



/**
 *
 */
class ControlInventarioRepository extends BaseRepository
{

    public function __construct(ControlInventario $model,
                                )
    {
        parent::__construct($model);


    }


}
