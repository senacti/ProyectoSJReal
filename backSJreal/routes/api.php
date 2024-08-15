<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/personas', [PersonaController::class, 'store']);
Route::post('/roles', [RolController::class, 'store']);
Route::post('/register', [PersonaController::class, 'store']);

Route::post('/categoria', [CategoriaController::class, 'store']);
Route::get('/categoria', [CategoriaController::class, 'index']);

Route::post('/productos', [ProductoController::class, 'store']);
Route::get('/productos', [ProductoController::class, 'index']);
// Route::post('/usuarios', [UsuarioController::class, 'store']);
// Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('usuarios/{id}', 'UsuarioController@show');
    Route::post('usuarios','UsuarioController@store');
});