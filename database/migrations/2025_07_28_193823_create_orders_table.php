<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// ..._create_orders_table.php
public function up(): void
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ID del usuario que compra
        $table->decimal('amount', 8, 2); // Monto del pedido
        $table->string('status')->default('pending'); // Estado: pendiente, completado, fallido
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */

    
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }


};
