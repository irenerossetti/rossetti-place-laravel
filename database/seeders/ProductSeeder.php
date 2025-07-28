<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // --- PERFUMES ---
        Product::create([
            'name' => 'Latitude Ultra',
            'code' => 'Cod. 010273',
            'description' => '100ml',
            'price' => 240.00,
            'image_url' => 'images/lattitude ultra.png',
            'category' => 'Perfumes',
        ]);

        Product::create([
            'name' => 'Inebriante for him',
            'code' => 'Cod. 010119',
            'description' => '100ml',
            'price' => 380.00,
            'image_url' => 'images/inebriante for him.jpeg',
            'category' => 'Perfumes',
        ]);
        
        Product::create([
            'name' => 'Inebriante for her',
            'code' => 'Cod. 010115', // Revisa si el código es correcto
            'description' => '100ml',
            'price' => 380.00,
            'image_url' => 'images/inebriante for her.png',
            'category' => 'Perfumes',
        ]);

        Product::create([
            'name' => 'GRACE La Rose Sublime',
            'code' => 'Cod. 010211',
            'description' => '100ml',
            'price' => 278.00,
            'image_url' => 'images/grace la rose sublime.png',
            'category' => 'Perfumes',
        ]);
        
        Product::create([
            'name' => 'Empire ICON',
            'code' => 'Cod. 010115', // Revisa si el código es correcto
            'description' => '100ml',
            'price' => 360.00,
            'image_url' => 'images/empire icon.png',
            'category' => 'Perfumes',
        ]);
        
        Product::create([
            'name' => 'Empire Woman',
            'code' => 'Cod. 010227', // Revisa si el código es correcto
            'description' => '100ml',
            'price' => 380.00,
            'image_url' => 'images/empire woman.png',
            'category' => 'Perfumes',
        ]);
        
        Product::create([
            'name' => 'Feeling Sexy for him',
            'code' => 'Cod. 010115', // Revisa si el código es correcto
            'description' => '100ml',
            'price' => 254.00,
            'image_url' => 'images/feeling sexy for him.jpeg',
            'category' => 'Perfumes',
        ]);
        
        Product::create([
            'name' => 'Feeling Sexy for her',
            'code' => 'Cod. 010115', // Revisa si el código es correcto
            'description' => '100ml',
            'price' => 254.00,
            'image_url' => 'images/felling sexy for her.jpeg', // Ojo: hay un error de tipeo en tu nombre de archivo ("felling")
            'category' => 'Perfumes',
        ]);


        // --- PROMOCIONES ---
        Product::create([
            'name' => 'Kit básico de cuidado H-Men',
            'description' => 'Promoción del mes',
            'price' => 288.60,
            'old_price' => 370.00,
            'image_url' => 'images/kit_h_men.jpg', // Asegúrate de tener esta imagen
            'category' => 'Promociones',
        ]);

        Product::create([
            'name' => 'Kit de cuidado de manos',
            'description' => 'Promoción del mes',
            'price' => 130.00,
            'old_price' => 260.00,
            'image_url' => 'images/kit_manos.jpg', // Asegúrate de tener esta imagen
            'category' => 'Promociones',
        ]);
    }
}