<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjercicioSeeder extends Seeder
{
    public function run(): void
    {
        $ejercicios = [
            ['nombre' => 'Dominadas (Pull-ups)', 'grupo_muscular' => 'Espalda y Bíceps', 'dificultad' => 'Intermedio', 'descripcion' => 'Ejercicio de tirón vertical utilizando el peso corporal.'],
            ['nombre' => 'Flexiones (Push-ups)', 'grupo_muscular' => 'Pecho y Tríceps', 'dificultad' => 'Principiante', 'descripcion' => 'Ejercicio fundamental de empuje horizontal.'],
            ['nombre' => 'Muscle-up', 'grupo_muscular' => 'Espalda, Pecho y Tríceps', 'dificultad' => 'Avanzado', 'descripcion' => 'Movimiento explosivo que combina una dominada alta con un fondo en barra.'],
            ['nombre' => 'Fondos (Dips)', 'grupo_muscular' => 'Pecho y Tríceps', 'dificultad' => 'Intermedio', 'descripcion' => 'Ejercicio de empuje vertical en paralelas.'],
            ['nombre' => 'Sentadillas (Squats)', 'grupo_muscular' => 'Piernas', 'dificultad' => 'Principiante', 'descripcion' => 'Ejercicio básico para el tren inferior utilizando el peso corporal.'],
            ['nombre' => 'Pistol Squat', 'grupo_muscular' => 'Piernas', 'dificultad' => 'Avanzado', 'descripcion' => 'Sentadilla a una sola pierna que requiere fuerza y equilibrio.'],
            ['nombre' => 'Dominadas Australianas', 'grupo_muscular' => 'Espalda y Bíceps', 'dificultad' => 'Principiante', 'descripcion' => 'Tirón horizontal debajo de una barra baja, excelente para iniciar.'],
            ['nombre' => 'Plancha (Plank)', 'grupo_muscular' => 'Core', 'dificultad' => 'Principiante', 'descripcion' => 'Ejercicio isométrico para fortalecer el abdomen y la espalda baja.'],
            ['nombre' => 'Front Lever', 'grupo_muscular' => 'Espalda y Core', 'dificultad' => 'Élite', 'descripcion' => 'Sostener el cuerpo paralelo al suelo colgado de una barra.'],
            ['nombre' => 'Back Lever', 'grupo_muscular' => 'Espalda y Core', 'dificultad' => 'Avanzado', 'descripcion' => 'Figura isométrica inversa al front lever.'],
            ['nombre' => 'L-Sit', 'grupo_muscular' => 'Core y Tríceps', 'dificultad' => 'Intermedio', 'descripcion' => 'Sostener el cuerpo con los brazos extendidos y las piernas paralelas al suelo formando una L.'],
            ['nombre' => 'Pino (Handstand)', 'grupo_muscular' => 'Hombros y Core', 'dificultad' => 'Avanzado', 'descripcion' => 'Sostener el cuerpo invertido apoyado sobre las manos.'],
            ['nombre' => 'Handstand Push-ups', 'grupo_muscular' => 'Hombros y Tríceps', 'dificultad' => 'Élite', 'descripcion' => 'Flexiones estando en posición de pino (vertical).'],
            ['nombre' => 'Dragon Flag', 'grupo_muscular' => 'Core', 'dificultad' => 'Avanzado', 'descripcion' => 'Ejercicio avanzado de abdomen, popularizado por Bruce Lee.'],
            ['nombre' => 'Burpees', 'grupo_muscular' => 'Cuerpo Completo', 'dificultad' => 'Intermedio', 'descripcion' => 'Ejercicio cardiovascular que combina flexión y salto.'],
        ];

        foreach ($ejercicios as $ejercicio) {
            Ejercicio::create($ejercicio);
        }
    }
}
