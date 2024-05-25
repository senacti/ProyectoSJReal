<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Rol;
use Illuminate\Http\Request;



/**
 *
 */
class RolRepository extends BaseRepository
{

    public function __construct(Rol $model,
                                )
    {
        parent::__construct($model);


    }


}
