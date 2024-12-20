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
        Schema::create('resource_category', function (Blueprint $table) 
        {
            $table->id();
            $table->unsignedBigInteger('firm_id');
            $table->string('name');                        
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
        Schema::create('resource', function (Blueprint $table) 
        {
            $table->id();
            $table->integer('firm_id');
            $table->integer('download_count')->default(0);           
            $table->string('title');                       
            $table->longText('description')->nullable();
            $table->foreignId('resource_category_id')->constrained('resource_category')->onDelete('cascade');
            $table->string('tags');
            $table->string('thumbnail_image')->nullable();
            $table->string('file_upload')->nullable();
            $table->timestamp('published_date')->useCurrent();                     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resource');
        Schema::dropIfExists('resource_category');
    }
};
