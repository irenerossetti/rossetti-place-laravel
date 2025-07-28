<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crea 10 usuarios de prueba con datos aleatorios
        User::factory(10)->create();

        // También puedes crear un usuario específico, como el tuyo
        User::factory()->create([
            'name' => 'Emily Rossetti',
            'email' => 'emily.hinode@gmail.com',
            // La contraseña será 'password' por defecto
        ]);

        // Llama a tu nuevo seeder de productos
        $this->call([
            ProductSeeder::class,
        ]);
    }
}