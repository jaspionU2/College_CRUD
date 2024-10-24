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
        Schema::create('teacher_course', function (Blueprint $table) {
            $table->foreignId('teacherID')->constrained('teachers');
            $table->foreignId('coursesID')->constrained('courses');

            // Definindo a chave primária composta
            $table->primary(['teacherID', 'coursesID']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_course');
    }
};
