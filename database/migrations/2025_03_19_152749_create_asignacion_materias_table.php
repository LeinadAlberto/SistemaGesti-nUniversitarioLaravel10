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
        Schema::create('asignacion_materias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('matriculacion_id')->constrained('matriculacions')->onDelete('cascade');
            $table->foreignId('materia_id')->constrained('materias')->onDelete('cascade');
            $table->foreignId('turno_id')->constrained('turnos')->onDelete('cascade');
            $table->foreignId('paralelo_id')->constrained('paralelos')->onDelete('cascade');

            $table->enum('estado', ['activo', 'inactivo', 'aprobo', 'reprobo']);
            $table->decimal('nota_final', 5, 2)->nullable();
            $table->date('fecha_asignacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_materias');
    }
};
