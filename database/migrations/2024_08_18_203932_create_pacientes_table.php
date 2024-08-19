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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('idpaciente'); // Clave primaria
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fechanacimiento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
