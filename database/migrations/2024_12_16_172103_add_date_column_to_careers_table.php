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
        Schema::table('careers', function (Blueprint $table) {
            // Replace the existing columns with the new date type columns
            if (Schema::hasColumn('careers', 'application_deadline')) {
                $table->dropColumn('application_deadline');
            }
            if (Schema::hasColumn('careers', 'job_posting_date')) {
                $table->dropColumn('job_posting_date');
            }
            $table->date('application_deadline')->default(date("Y-m-d"));
            $table->date('job_posting_date')->default(date("Y-m-d"));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('careers', function (Blueprint $table) {
            // Replace the new date type columns with the existing columns
            // $table->string('application_deadline');
            // $table->string('job_posting_date');
        });
    }
};
