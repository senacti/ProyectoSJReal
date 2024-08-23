<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Habitacion;



/**
 *
 */
class HabitacionRepository extends BaseRepository
{

    public function __construct(Habitacion $model,
                                )
    {
        parent::__construct($model);


    }

    public function index()
    {
        $query = $this->model->select(  'id_habitacion',
                                        'habitacion_tipo',
                                        'numero_habitacion',
                                        'descripcion_habitacion',
                                        'capacidad_habitacion',
                                        'precio_habitacion',
                                        'status_habitacion',
                                        'estado_aseo'
                                    );


        return $query->get();
    }
    

}
