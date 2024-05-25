<?php

namespace App\Http\Controllers;

use App\Http\Bases\BaseController;
use App\Http\Models\Rol;
use App\Http\Repositories\RolRepository;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RolController extends BaseController
{

 private $rol_repository;

    public function __construct(RolRepository $rol_repository,
    ) {

        $this->rol_repository =  $rol_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : JsonResponse
    {
        try {
            DB::beginTransaction();

            $res =$this->rol_repository->index($request);
            DB::commit();
            return $this->responseSuccess('Se creo el Usuario  Exitosamente', $res, Response::HTTP_OK);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->responseError('No se creo el Usuario  Exitosamente', $e, Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arrayRequest = $request->all();

        $persona = Rol::create($arrayRequest);

        // Retornar una respuesta (puede ser una redirección, JSON, etc.)
        return response()->json($persona, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
