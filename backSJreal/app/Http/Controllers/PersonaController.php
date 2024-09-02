<?php

namespace App\Http\Controllers;

use App\Http\Bases\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Models\Persona;
use App\Http\Repositories\PersonaRepository;
use App\Models\Person;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonaController extends Controller
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
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
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
    public function login(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|string',
            'contrasena_usuario' => 'required|string',
        ]);
        $credentials = [
            'nombre_usuario' => $request->nombre_usuario,
            'password' => $request->contrasena_usuario, // Use 'password' for the hashed field
        ];
        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
        // try {
        //     DB::beginTransaction();

        //     $arrayRequest = $request->all();
        //     $persona = $this->persona_repository->create($arrayRequest);

        //     DB::commit();
        //     return $this->responseSuccess('Se creo el Usuario  Exitosamente', $persona, Response::HTTP_OK);
        // } catch (Exception $e) {
        //     DB::rollBack();
        //     return $this->responseError('No se creo el Usuario  Exitosamente', $e, Response::HTTP_NOT_FOUND);
        // }
    }

    public function register(Request $request){
        $request->validate([
            'nombre_persona' => 'required|string|max:255',
            'apellido_persona' => 'required|string|max:255',
            'documento_persona' => 'required|string|max:255',
            'telefono_persona' => 'required|string|max:255',
            'correo_persona' => 'required|string|email|max:255|',
            'tipo_documento' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'tipo_persona' => 'required|string|max:255',
            'contrasena_usuario' => 'required|string|min:6',
            'rol_usuario' => 'required|string|max:255',
        ]);

        $person = Person::create([
            'nombre_persona' => $request->nombre_persona,
            'apellido_persona' => $request->apellido_persona,
            'documento_persona' => $request->documento_persona,
            'telefono_persona' => $request->telefono_persona,
            'correo_persona' => $request->correo_persona,
            'tipo_documento' => $request->tipo_documento,
            'nacionalidad' => $request->nacionalidad,
            'tipo_persona' => $request->tipo_persona,
        ]);

        $user = User::create([
            'usuario_id_persona' => $person->id,
            'nombre_usuario' => $person->nombre_persona,
            'email_usuario' => $person->correo_persona,
            'contrasena_usuario' => Hash::make($request->contrasena_usuario),
            'rol_usuario' => $request->rol_usuario,
        ]);

        $token = Auth::login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $person,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'User logged out successfully',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
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
