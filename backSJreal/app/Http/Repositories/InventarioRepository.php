<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Inventario;
use Illuminate\Http\Request;



/**
 *
 */
class InventarioRepository extends BaseRepository
{

    public function __construct(Inventario $model,
                                )
    {
        parent::__construct($model);


    }


}
