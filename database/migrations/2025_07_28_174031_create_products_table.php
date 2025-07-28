<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nombre del producto, ej: "Empire ICON"
        $table->string('code')->nullable(); // Ej: "Cod. 010115"
        $table->text('description')->nullable(); // Ej: "100ml"
        $table->decimal('price', 8, 2); // Precio
        $table->decimal('old_price', 8, 2)->nullable(); // Para promociones
        $table->string('image_url')->nullable(); // Ruta de la imagen
        $table->string('category'); // Para separar "Perfumes" de "Promociones"
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
