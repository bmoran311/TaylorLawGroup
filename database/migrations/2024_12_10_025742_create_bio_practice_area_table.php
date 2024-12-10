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
        Schema::create('bio_practice_area', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bio_id')->constrained('bio')->onDelete('cascade'); 
            $table->foreignId('practice_area_id')->constrained('practice_area')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bio_practice_area');
    }
};
