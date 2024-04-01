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
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono')->nullable();
            $table->bigInteger('cargos_id')->unsigned()->nullable();
            $table->bigInteger('sedes_id')->unsigned()->nullable();
            $table->integer('estatus')->default(1);
            $table->text('adicional')->nullable();
            $table->foreign('cargos_id')->references('id')->on('cargos')->nullOnDelete();
            $table->foreign('sedes_id')->references('id')->on('sedes')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsables');
    }
};
