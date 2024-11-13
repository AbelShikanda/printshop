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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('blog_categories_id')->constrained('blog_categories');
            $table->string('title');
            $table->string('sub_title');
            $table->text('body');
            $table->string('slug');
            $table->text('meta_keywords')->nullable();
            $table->tinyInteger('whatsapp')->default(0);
            $table->tinyInteger('telegram')->default(0);
            $table->tinyInteger('website')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
