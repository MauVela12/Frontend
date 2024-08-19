<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('idusuario'); // Clave primaria
            $table->string('nombre');
            $table->string('correo')->unique();
            $table->string('password');
            $table->string('tipo');
        });
    }
    

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
}

