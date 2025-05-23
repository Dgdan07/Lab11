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
        Schema::create('countries', function (Blueprint $table) {
            // $table->id();
            $table->char('country_id', 2)->primary();
            $table->string('country_name', 40)->nullable();
            $table->unsignedBigInteger('region_id');
            
            $table->foreign('region_id')->references('region_id')->on('regions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
