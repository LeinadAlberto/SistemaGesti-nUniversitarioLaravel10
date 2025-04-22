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
        Schema::create('grupos_academicos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('docente_id')->constrained()->on('docentes')->onDelete('cascade');
            $table->foreignId('gestion_id')->constrained()->on('gestions')->onDelete('cascade');
            $table->foreignId('nivel_id')->constrained()->on('nivels')->onDelete('cascade');
            $table->foreignId('periodo_id')->constrained()->on('periodos')->onDelete('cascade');
            $table->foreignId('carrera_id')->constrained()->on('carreras')->onDelete('cascade');
            $table->foreignId('materia_id')->constrained()->on('materias')->onDelete('cascade');
            $table->foreignId('turno_id')->constrained()->on('turnos')->onDelete('cascade');
            $table->foreignId('paralelo_id')->constrained()->on('paralelos')->onDelete('cascade');

            $table->date('fecha_asignacion');
            $table->integer('cupo_maximo');
            $table->enum('estado', ['activo', 'inactivo']);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos_academicos');
    }
};
