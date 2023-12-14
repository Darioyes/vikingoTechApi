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
        Schema::create('purcharse_orders', function (Blueprint $table) {
            $table->id();
            $table->decimal('purcharse', 10, 2);
            $table->decimal('amount', 10, 2);
            $table->text('description');
            $table->string('purcharse_order');
            $table->timestamps();
            $table->foreignId('products_id')->constrained('products');
            $table->foreignId('suppliers_id')->constrained('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purcharse_orders');
    }
};
