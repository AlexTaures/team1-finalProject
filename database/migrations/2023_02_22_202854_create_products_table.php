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
            $table->string('name');
            $table->string('description');
            $table->integer('amount');
            $table->double('price');
            $table->date('admission_date');
            $table->date('expiration_date');
            $table->string('img_url');

            $table->foreignId('brand_id')
            ->nullable()
            ->constrained('brands')
            ->cascadeOnUpdate();

            $table->foreignId('presentation_id')
            ->nullable()
            ->constrained('presentations')
            ->cascadeOnUpdate();

            $table->foreignId('category_id')
            ->nullable()
            ->constrained('categories')
            ->cascadeOnUpdate();
            
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
