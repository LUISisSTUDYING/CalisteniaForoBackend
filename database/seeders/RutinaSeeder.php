<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rutina;

class RutinaSeeder extends Seeder
{
    public function run(): void
    {
        $rutinas = [
            [
                'ejercicio_id' => 1, // Dominadas
                'nombre' => 'Dominadas al fallo',
                'objetivo' => 'Resistencia muscular',
                'esquema_series_reps' => '4 series al fallo',
                'notas' => 'Mantener buena forma, evitar balanceo excesivo.',
            ],
            [
                'ejercicio_id' => 2, // Flexiones
                'nombre' => 'Flexiones explosivas (aplauso)',
                'objetivo' => 'Potencia',
                'esquema_series_reps' => '5 series de 8 repeticiones',
                'notas' => 'Empujar tan fuerte como sea posible para despegar las manos del suelo y dar un aplauso.',
            ],
            [
                'ejercicio_id' => 3, // Muscle-up
                'nombre' => 'Progresión de Muscle-up con banda',
                'objetivo' => 'Técnica de transición',
                'esquema_series_reps' => '3 series de 5 repeticiones',
                'notas' => 'Usar banda elástica gruesa para asistir en la fase más difícil (transición).',
            ],
            [
                'ejercicio_id' => 4, // Fondos
                'nombre' => 'Fondos lastrados',
                'objetivo' => 'Fuerza máxima',
                'esquema_series_reps' => '4 series de 5 repeticiones',
                'notas' => 'Añadir 20kg de lastre. Bajar controlado.',
            ]
        ];

        foreach ($rutinas as $rutina) {
            Rutina::create($rutina);
        }
    }
}
