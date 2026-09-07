<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\RutinaController;

use App\Http\Controllers\DashboardController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/dashboard/stats', [DashboardController::class, 'stats']);

    // Rutas públicas (para usuarios autenticados)
    Route::apiResource('ejercicios', EjercicioController::class)->only(['index', 'show']);
    Route::apiResource('rutinas', RutinaController::class)->only(['index', 'show']);

    // Rutas protegidas (solo admin)
    Route::apiResource('ejercicios', EjercicioController::class)->only(['store', 'update', 'destroy'])->middleware('admin');
    Route::apiResource('rutinas', RutinaController::class)->only(['store', 'update', 'destroy'])->middleware('admin');
});
