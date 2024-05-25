<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Producto;
use Illuminate\Http\Request;



/**
 *
 */
class ProductoRepository extends BaseRepository
{

    public function __construct(Producto $model,
                                )
    {
        parent::__construct($model);


    }


}
