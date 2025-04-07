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
        Schema::table('employees', function (Blueprint $table) {
            
            $table->foreign('job_id')->references('job_id')->on('hr_jobs');
            $table->foreign('manager_id')->references('employee_id')->on('employees');
            $table->foreign('department_id')->references('department_id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['job_id']);
            $table->dropForeign(['manager_id']);
            $table->dropForeign(['department_id']);
        });
    }
};
