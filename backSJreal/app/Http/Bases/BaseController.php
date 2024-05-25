<?php

namespace App\Http\Bases;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

/**
 * Clase BaseController
 *
 * @package App\Http\Bases
 */
class BaseController extends Controller
{


    // protected mixed $repositorio;

    // /**
    //  * Método constructor.
    //  *
    //  * @param Model $model
    //  */
    // function __construct(mixed $repositorio)
    // {
    //     $this->repositorio = $repositorio;
    // }



    /**
     * Retornar respuesta exitosa.
     *
     * @param mixed $data Datos a retornar
     * @param string $message Mensaje de respuesta.
     * @param int $code Código de repuesta.
     *
     * @return JsonResponse
     */
    public function responseSuccess(string $message, mixed $data, int $code = 200): JsonResponse
    {
        return response()->json(compact('message', 'data'), $code);
    }

    /**
     * Retornar respuesta con errores.
     *
     * @param mixed $errors Errores a retornar
     * @param string $message Mensaje de respuesta.
     * @param int $code Código de repuesta.
     *
     * @return JsonResponse
     */
    public function responseError(string $message, mixed $errors, int $code): JsonResponse
    {
        return response()->json(compact('message', 'errors'), $code);
    }
}
