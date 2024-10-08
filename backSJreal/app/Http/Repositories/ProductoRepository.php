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

    public function index()
    {
        $query = $this->model->select('id_producto','producto_id_categoria','precio_producto','estado_producto','nombre_producto' );

        return $query->get();
    }


}
