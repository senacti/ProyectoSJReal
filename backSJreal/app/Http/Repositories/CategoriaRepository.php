<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Categoria;
use Illuminate\Http\Request;



/**
 *
 */
class CategoriaRepository extends BaseRepository
{

    public function __construct(Categoria $model,
                                )
    {
        parent::__construct($model);


    }

    public function index()
    {
        $query = $this->model->select('id','code','nombre_categoria');


        return $query->get();
    }

}
