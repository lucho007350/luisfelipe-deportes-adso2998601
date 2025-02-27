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
        Schema::create('entrenador', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');
            $table->string('correo')->unique();
            $table->integer('telefono')->unique();
            $table->integer('edad');
            $table->integer('cedula')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrenador');
    }
};
