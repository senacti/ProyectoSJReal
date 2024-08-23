<?php

namespace App\Http\Repositories;

use App\Http\Bases\BaseRepository;
use App\Http\Models\Reserva;

/**
 *
 */
class ReservaRepository extends BaseRepository
{

    public function __construct(Reserva $model,
                                )
    {
        parent::__construct($model);


    }


    public function index()
    {
        $query = $this->model->select(
                                        'id_reserva',
                                        'reserva_id_usuario',
                                        'codigo_reserva',
                                        'checkin_reserva',
                                        'checkout_reserva',
                                        'cantidad_habitaciones_reserva',
                                        'precio_por_habitacion_reserva',
                                        'precio_total_reserva'
                                    );


        return $query->get();
    }


}
