<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ReservaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/todo', [LibroController::class, 'api_general']);

Route::get('/libros', [LibroController::class, 'api_libros']);

Route::get('/asignaturas', [LibroController::class, 'api_asignaturas']);

Route::get('/alumnos', [AlumnoController::class, 'api_alumnos']);

Route::get('/reservas', [ReservaController::class,'api_reservas']);

Route::post('/reservas_crear', [ReservaController::class,'api_reservas_crear']);

Route::post('/reservas_editar/{id}', [ReservaController::class,'api_reservas_editar']);

Route::delete('/reservas_eliminar/{id}', [ReservaController::class,'api_reservas_eliminar']);