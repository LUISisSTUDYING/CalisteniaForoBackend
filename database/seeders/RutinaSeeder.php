<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rutina;

class RutinaSeeder extends Seeder
{
    public function run(): void
    {
        $rutinas = [
            ['ejercicio_id' => 1, 'nombre' => 'Dominadas al fallo', 'objetivo' => 'Resistencia muscular', 'esquema_series_reps' => '4 series al fallo', 'notas' => 'Mantener buena forma, evitar balanceo.'],
            ['ejercicio_id' => 2, 'nombre' => 'Flexiones explosivas', 'objetivo' => 'Potencia', 'esquema_series_reps' => '5 series de 8', 'notas' => 'Empujar fuerte para dar un aplauso.'],
            ['ejercicio_id' => 3, 'nombre' => 'Progresión Muscle-up', 'objetivo' => 'Técnica de transición', 'esquema_series_reps' => '3 series de 5', 'notas' => 'Usar banda elástica gruesa.'],
            ['ejercicio_id' => 4, 'nombre' => 'Fondos lastrados', 'objetivo' => 'Fuerza máxima', 'esquema_series_reps' => '4 series de 5', 'notas' => 'Añadir 20kg de lastre.'],
            ['ejercicio_id' => 5, 'nombre' => 'Sentadillas 100 reps', 'objetivo' => 'Resistencia', 'esquema_series_reps' => '1 serie de 100', 'notas' => 'Tomar descansos cortos (10 seg) si es necesario.'],
            ['ejercicio_id' => 6, 'nombre' => 'Pistol Squat asistida', 'objetivo' => 'Equilibrio y fuerza', 'esquema_series_reps' => '3 series de 6 por pierna', 'notas' => 'Apoyarse ligeramente en una banda o pared.'],
            ['ejercicio_id' => 7, 'nombre' => 'Remos invertidos', 'objetivo' => 'Fuerza base', 'esquema_series_reps' => '4 series de 12', 'notas' => 'Tocar el pecho con la barra en cada repetición.'],
            ['ejercicio_id' => 8, 'nombre' => 'Plancha de 2 minutos', 'objetivo' => 'Core isométrico', 'esquema_series_reps' => '3 series de 2 min', 'notas' => 'Apretar glúteos y abdomen todo el tiempo.'],
            ['ejercicio_id' => 9, 'nombre' => 'Intentos de Front Lever', 'objetivo' => 'Isometría estática', 'esquema_series_reps' => '5 intentos máximos', 'notas' => 'Descansar 2-3 minutos entre intentos.'],
            ['ejercicio_id' => 10, 'nombre' => 'Back Lever Straddle', 'objetivo' => 'Fuerza de espalda baja', 'esquema_series_reps' => '4 series de 10 seg', 'notas' => 'Mantener piernas abiertas para menor palanca.'],
            ['ejercicio_id' => 11, 'nombre' => 'L-Sit en paralelas', 'objetivo' => 'Tensión abdominal', 'esquema_series_reps' => '5 series de 15 seg', 'notas' => 'Mantener los codos completamente bloqueados.'],
            ['ejercicio_id' => 12, 'nombre' => 'Equilibrio en pino', 'objetivo' => 'Equilibrio libre', 'esquema_series_reps' => '10 minutos acumulados', 'notas' => 'Practicar cerca de una pared por seguridad.'],
            ['ejercicio_id' => 13, 'nombre' => 'HSPU asistidas', 'objetivo' => 'Empuje vertical', 'esquema_series_reps' => '4 series de 6', 'notas' => 'Hacerlas apoyando los pies en la pared.'],
            ['ejercicio_id' => 14, 'nombre' => 'Dragon Flag negativas', 'objetivo' => 'Control excéntrico', 'esquema_series_reps' => '3 series de 5 bajadas lentas', 'notas' => 'Controlar la bajada lo más que se pueda.'],
            ['ejercicio_id' => 15, 'nombre' => 'Reto 50 Burpees', 'objetivo' => 'HIIT', 'esquema_series_reps' => '1 serie por tiempo', 'notas' => 'Intentar completar los 50 en menos de 4 minutos.']
        ];

        foreach ($rutinas as $rutina) {
            Rutina::create($rutina);
        }
    }
}
