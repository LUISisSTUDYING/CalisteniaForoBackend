<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Administrador
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@calisthenics.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);

        // Usuario Regular
        User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@calisthenics.com',
            'password' => bcrypt('password123'),
            'role' => 'regular',
        ]);

        $this->call([
            EjercicioSeeder::class,
            RutinaSeeder::class,
        ]);
    }
}
