<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Proveedor;



/**
 *
 */
class ProveedorRepository extends BaseRepository
{

    public function __construct(Proveedor $model,
                                )
    {
        parent::__construct($model);


    }


}
