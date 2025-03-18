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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('nombres');
            $table->string('apellidos');
            $table->string('ci')->unique();
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('ref_celular');
            $table->string('parentesco');
            $table->string('profesion');
            $table->string('direccion');
            $table->text('foto');
            $table->enum('estado',['activo','inactivo']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
