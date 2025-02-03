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
        Schema::table('bio', function (Blueprint $table) {
            if(!Schema::hasColumn('bio', 'title')) {
                $table->string('title')->nullable();
            }
            if(!Schema::hasColumn('bio', 'twitter')) {
                $table->string('twitter')->nullable();
            }
            if(!Schema::hasColumn('bio', 'linkedin')) {
                $table->string('linkedin')->nullable();
            }
            if(!Schema::hasColumn('bio', 'headshot')) {
                $table->string('headshot')->nullable();
            }

            if(!Schema::hasColumn('bio', 'summary')) {
                $table->text('summary')->nullable();
            }
            if(!Schema::hasColumn('bio', 'description')) {
                $table->text('description')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bios', function (Blueprint $table) {
            //
        });
    }
};
