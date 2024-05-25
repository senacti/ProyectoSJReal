<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Sucursal;
use Illuminate\Http\Request;



/**
 *
 */
class SucursalRepository extends BaseRepository
{

    public function __construct(Sucursal $model,
                                )
    {
        parent::__construct($model);

    }


}
