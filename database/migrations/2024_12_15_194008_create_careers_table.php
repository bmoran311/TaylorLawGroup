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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firm_id');
            $table->string('job_title');
            $table->string('location');
            $table->string('employment_type');
            $table->string('job_summary');
            $table->string('responsibilities');
            $table->string('qualifications');
            $table->string('skills');
            $table->string('practice_area');
            $table->string('salary_benefits')->nullable();
            $table->string('application_deadline');
            $table->string('job_posting_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
