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
        Schema::table('careers', function(Blueprint $table)
        {
            $table->text('job_summary')->change();
            $table->text('responsibilities')->change();
            $table->text('qualifications')->change();
            $table->text('skills')->change();
            $table->text('salary_benefits')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
