<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Pedido;
use Illuminate\Http\Request;



/**
 *
 */
class PedidoRepository extends BaseRepository
{

    public function __construct(Pedido $model,
                                )
    {
        parent::__construct($model);


    }


}
