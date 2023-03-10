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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->text('products');
            $table->date('sale_date');
            $table->double('total_sale');
            $table->foreignId('customer_id')
            ->nullable()
            ->constrained('customers')
            ->cascadeOnUpdate();

            $table->timestamps();
        });
    }
    /*
        $table->foreignId('articulo_id')
            ->nullable()
            ->constrained('articulos')
            ->cascadeOnUpdate()
    */
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }

    /**
     */
    public function __construct() {
    }
};
