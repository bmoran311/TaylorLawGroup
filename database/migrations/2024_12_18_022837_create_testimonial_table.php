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
        Schema::create('testimonial', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firm_id');
            $table->string('client_name'); 
            $table->string('title'); 
            $table->text('summary'); 
            $table->text('content'); 
            $table->string('photo')->nullable(); 
            $table->text('outcome')->nullable(); 
            $table->date('date_of_resolution')->nullable(); 
            $table->boolean('client_consent')->default(false);  
            $table->text('type');                 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial');
    }
};
