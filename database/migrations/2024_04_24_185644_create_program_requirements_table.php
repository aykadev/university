<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('program_requirements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('requirement_id')->nullable();
            $table->foreign('university_id')->references('id')->on('universities');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('requirement_id')->references('id')->on('requirements');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('program_requirements');
    }
};
