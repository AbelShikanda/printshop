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
        Schema::create('visitor_journeys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visitor_data_id')->constrained('visitor_data')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('event_type', ['page_visit', 'button_click'])->default('page_visit'); 
            $table->mediumText('page_url')->nullable();       
            $table->mediumText('button_clicked')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_journeys');
    }
};