<?php

namespace App\Http\Controllers;

use App\Http\Bases\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Models\Persona;
use App\Http\Repositories\PersonaRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PersonaController extends BaseController
{
    /*
    |------------------------------------------------
    -
    | ATTRIBUTES
    | -----------------------------------------------
    */
    private $persona_repository;


    /*
    |------------------------------------------------
    | CONSTRUCTOR
    | -----------------------------------------------
    */
    public function __construct(
        PersonaRepository $persona_repository,

    ) {
        $this->persona_repository = $persona_repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->responseSuccess('Se creo el Usuario  Exitosamente', "jejeje", Response::HTTP_OK);
        
        try {
            DB::beginTransaction();

            $arrayRequest = $request->all();
            $persona = $this->persona_repository->create($arrayRequest);

            DB::commit();
            return $this->responseSuccess('Se creo el Usuario  Exitosamente', $persona, Response::HTTP_OK);
        } catch (Exception $e) {
            DB::rollBack();
            return $this->responseError('No se creo el Usuario  Exitosamente', $e, Response::HTTP_NOT_FOUND);
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
