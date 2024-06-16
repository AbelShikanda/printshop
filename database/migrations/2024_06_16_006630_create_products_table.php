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
            $table->bigIncrements('id');
            $table->string('sku');
            $table->foreignId('categories_id')->constrained('product_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('type_id')->constrained('product_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('colors_id')->constrained('product_colors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('sizes_id')->constrained('product_sizes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('materials_id')->constrained('product_materials')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->decimal('price', 10, 2)->nullable();
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
