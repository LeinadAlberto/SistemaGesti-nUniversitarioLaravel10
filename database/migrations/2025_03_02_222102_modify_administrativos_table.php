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
        Schema::table('administrativos', function (Blueprint $table) {
            // Cambiar el tipo de la columna a date
            $table->date('fecha_nacimiento')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administrativos', function (Blueprint $table) {
            // Revertir el cambio (por ejemplo, si era string antes)
            $table->string('fecha_nacimiento')->change();
        });
    }
};
