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
        Schema::create('recorridos', function (Blueprint $table) {
            $table->id();
            $table->string('kilometraje_actual');
            $table->string('kilometraje_regreso')->nullable();
            $table->integer('litros_combustible')->nullable();
            $table->float('costo_combustible')->nullable();
            $table->string('gasolinera')->nullable();
            $table->string('estatus');

            $table->unsignedBigInteger('empleado_id')->nullable();
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('set null');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recorridos');
    }
};
