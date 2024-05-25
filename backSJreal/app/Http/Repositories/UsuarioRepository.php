<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Usuario;
use Illuminate\Http\Request;



/**
 *
 */
class UsuarioRepository extends BaseRepository
{

    public function __construct(Usuario $model,
                                )
    {
        parent::__construct($model);


    }


}
