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
        Schema::create('college_course', function (Blueprint $table) {
            $table->foreignId('collegesID')->constrained('colleges');
            $table->foreignId('coursesID')->constrained('courses');

            // Definindo a chave primária composta
            $table->primary(['collegesID', 'coursesID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_course');
    }
};
