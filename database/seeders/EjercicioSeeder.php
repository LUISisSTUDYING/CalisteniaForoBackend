<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjercicioSeeder extends Seeder
{
    public function run(): void
    {
        $ejercicios = [
            [
                'nombre' => 'Dominadas (Pull-ups)',
                'grupo_muscular' => 'Espalda y Bíceps',
                'dificultad' => 'Intermedio',
                'descripcion' => 'Ejercicio de tirón vertical utilizando el peso corporal.',
            ],
            [
                'nombre' => 'Flexiones (Push-ups)',
                'grupo_muscular' => 'Pecho y Tríceps',
                'dificultad' => 'Principiante',
                'descripcion' => 'Ejercicio fundamental de empuje horizontal.',
            ],
            [
                'nombre' => 'Muscle-up',
                'grupo_muscular' => 'Espalda, Pecho y Tríceps',
                'dificultad' => 'Avanzado',
                'descripcion' => 'Movimiento explosivo que combina una dominada alta con un fondo en barra.',
            ],
            [
                'nombre' => 'Fondos (Dips)',
                'grupo_muscular' => 'Pecho y Tríceps',
                'dificultad' => 'Intermedio',
                'descripcion' => 'Ejercicio de empuje vertical en paralelas.',
            ],
        ];

        foreach ($ejercicios as $ejercicio) {
            Ejercicio::create($ejercicio);
        }
    }
}
