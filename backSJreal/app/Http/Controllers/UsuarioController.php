<?php

namespace App\Http\Controllers;

use App\Http\Bases\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class UsuarioController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
        
        try {
            DB::beginTransaction();
            
            $arrayRequest = $request->all();
            
            unset($arrayRequest['rol']);
            
            $usuario = Usuario::updateOrCreate($arrayRequest,$arrayRequest);
            // $usuario = Usuario::create($arrayRequest);
            // dd($usuario); 
            if (!$usuario->roles()->where('id', $request->rol)->exists()) {
                $usuario->roles()->attach($request->rol);
            }

            DB::commit();
            return $this->responseSuccess('Se creo el Usuario  Exitosamente', $usuario, Response::HTTP_OK);
        } catch (Exception $e) {
            dd($e); 
            DB::rollBack();
            return $this->responseError('No se creo el Usuario  Exitosamente', $e, Response::HTTP_NOT_FOUND);
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usuario = Usuario::with('persona', 'roles')->find($id);

       
        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        return response()->json($usuario);
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
