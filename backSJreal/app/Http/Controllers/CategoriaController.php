<?php

namespace App\Http\Controllers;

use App\Http\Bases\BaseController;
use App\Http\Repositories\CategoriaRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CategoriaController extends BaseController
{

    private $categoria_repository;

    public function __construct(CategoriaRepository $categoria_repository,
    ) {

        $this->categoria_repository =  $categoria_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            DB::beginTransaction();

            $categoria = $this->categoria_repository->index();

            DB::commit();
            return $this->responseSuccess('Categorias obtenidas Exitosamente', $categoria, Response::HTTP_OK);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->responseError('Categorias  no se obtuvieron Exitosamente', $e, Response::HTTP_NOT_FOUND);
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
        try {
            DB::beginTransaction();

            $arrayRequest = $request->all();
            
            $categoria = $this->categoria_repository->create($arrayRequest);
            DB::commit();
            return $this->responseSuccess('Se creo la categoria  Exitosamente', $categoria, Response::HTTP_OK);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->responseError('No se creo la categoria  Exitosamente', $e, Response::HTTP_NOT_FOUND);
        }
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
