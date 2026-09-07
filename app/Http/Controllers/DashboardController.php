<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Rutina;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function stats()
    {
        return response()->json([
            'total_ejercicios' => Ejercicio::count(),
            'total_rutinas' => Rutina::count(),
            'ultimos_ejercicios' => Ejercicio::latest()->take(5)->get(),
            'ultimas_rutinas' => Rutina::with('ejercicio')->latest()->take(5)->get(),
        ]);
    }
}
