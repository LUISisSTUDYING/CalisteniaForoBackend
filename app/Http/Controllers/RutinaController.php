<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    public function index(Request $request)
    {
        $query = Rutina::with('ejercicio');

        if ($request->has('search')) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        return response()->json($query->paginate(10));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ejercicio_id' => 'required|exists:ejercicios,id',
            'nombre' => 'required|string|max:255',
            'objetivo' => 'required|string|max:255',
            'esquema_series_reps' => 'required|string|max:255',
            'notas' => 'nullable|string',
        ]);

        $rutina = Rutina::create($validated);
        return response()->json($rutina, 201);
    }

    public function show($id)
    {
        $rutina = Rutina::with('ejercicio')->find($id);

        if (!$rutina) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }

        return response()->json($rutina);
    }

    public function update(Request $request, $id)
    {
        $rutina = Rutina::find($id);

        if (!$rutina) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }

        $validated = $request->validate([
            'ejercicio_id' => 'sometimes|required|exists:ejercicios,id',
            'nombre' => 'sometimes|required|string|max:255',
            'objetivo' => 'sometimes|required|string|max:255',
            'esquema_series_reps' => 'sometimes|required|string|max:255',
            'notas' => 'nullable|string',
        ]);

        $rutina->update($validated);
        return response()->json($rutina);
    }

    public function destroy($id)
    {
        $rutina = Rutina::find($id);

        if (!$rutina) {
            return response()->json(['message' => 'Rutina no encontrada'], 404);
        }

        $rutina->delete();
        return response()->json(['message' => 'Rutina eliminada'], 200);
    }
}
