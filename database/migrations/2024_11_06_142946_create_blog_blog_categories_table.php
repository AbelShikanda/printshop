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
        Schema::create('blog_blog_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->foreignId('blogs_id')->constrained('blogs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('blog_categories_id')->constrained('blog_categories')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_blog_categories');
    }
};
