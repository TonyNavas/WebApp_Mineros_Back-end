<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\CamionController;
use App\Http\Controllers\API\MineroController;
use App\Http\Controllers\API\ConductorController;
use App\Http\Controllers\API\CooperativaController;
use App\Http\Controllers\API\ProcedenciaController;
use App\Http\Controllers\API\VerificacionController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [UserController::class, 'loginUser']);

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);


// Rutas protejidas por token
Route::group(['middleware' => 'auth:sanctum'], function () {

    Route::get('/auth/logout', [AuthController::class, 'logout']);

    Route::get('/user', [UserController::class, 'index']);
    Route::get('/cooperativas', [CooperativaController::class, 'index']);
    Route::get('/mineros', [MineroController::class, 'index']);
    Route::get('/procedencias', [ProcedenciaController::class, 'index']);
    Route::get('/conductores', [ConductorController::class, 'index']);
    Route::get('/camiones', [CamionController::class, 'index']);
    Route::get('/verificacion', [VerificacionController::class, 'index']);
});
