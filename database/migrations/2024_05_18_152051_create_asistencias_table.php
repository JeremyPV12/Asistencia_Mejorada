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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellido_paterno',100);
            $table->string('apellido_materno',100);
            $table->string('fecha_nacimiento');
            $table->string('telefono', 9)->unique();
            $table->string('direccion',255)->nullable();
            $table->string('dni', 8)->unique();           
            $table->dateTime('ingreso');
            $table->dateTime('salida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
