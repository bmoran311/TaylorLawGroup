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
        Schema::table('practice_area', function (Blueprint $table) {
            if(!Schema::hasColumn('practice_area', 'summary')) {
                $table->text('summary')->nullable();
            }
            if(!Schema::hasColumn('practice_area', 'description')) {
                $table->text('description')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('practice_areas', function (Blueprint $table) {
            //
        });
    }
};
