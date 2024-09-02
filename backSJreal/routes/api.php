<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\lnventarioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReservaController;
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

// Route::post('/personas', [PersonaController::class, 'store']);
// Route::post('/roles', [RolController::class, 'store']);
// Route::post('/register', [PersonaController::class, 'store']);

Route::controller(PersonaController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::post('/categoria', [CategoriaController::class, 'store']);
Route::get('/categoria', [CategoriaController::class, 'index']);

Route::post('/productos', [ProductoController::class, 'store']);
Route::get('/productos', [ProductoController::class, 'index']);

Route::post('/habitacion', [HabitacionController::class, 'store']);
Route::get('/habitacion', [HabitacionController::class, 'index']);

Route::post('/reserva', [ReservaController::class, 'store']);
Route::get('/reserva', [ReservaController::class, 'index']);

Route::post('/inventario', [lnventarioController::class, 'store']);
Route::get('/inventario', [lnventarioController::class, 'index']);
// Route::post('/usuarios', [UsuarioController::class, 'store']);
// Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);

// Route::group(['namespace' => 'App\Http\Controllers'], function () {
//     Route::get('usuarios/{id}', 'UsuarioController@show');
//     Route::post('usuarios','UsuarioController@store');
// });