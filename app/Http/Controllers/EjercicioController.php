<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    public function index(Request $request)
    {
        $query = Ejercicio::query();

        if ($request->has('search')) {
            $query->where('nombre', 'like', '%' . $request->search . '%');
        }

        return response()->json($query->paginate(10));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'grupo_muscular' => 'required|string|max:255',
            'dificultad' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $ejercicio = Ejercicio::create($validated);
        return response()->json($ejercicio, 201);
    }

    public function show($id)
    {
        $ejercicio = Ejercicio::find($id);
        
        if (!$ejercicio) {
            return response()->json(['message' => 'Ejercicio no encontrado'], 404);
        }

        return response()->json($ejercicio);
    }

    public function update(Request $request, $id)
    {
        $ejercicio = Ejercicio::find($id);

        if (!$ejercicio) {
            return response()->json(['message' => 'Ejercicio no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'grupo_muscular' => 'sometimes|required|string|max:255',
            'dificultad' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
        ]);

        $ejercicio->update($validated);
        return response()->json($ejercicio);
    }

    public function destroy($id)
    {
        $ejercicio = Ejercicio::find($id);

        if (!$ejercicio) {
            return response()->json(['message' => 'Ejercicio no encontrado'], 404);
        }

        $ejercicio->delete();
        return response()->json(['message' => 'Ejercicio eliminado'], 200);
    }
}
