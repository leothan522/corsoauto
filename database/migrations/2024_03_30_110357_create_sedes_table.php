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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->text('direccion');
            $table->text('adicional')->nullable();
            $table->integer('estatus')->default(1);
            $table->bigInteger('estados_id')->unsigned()->nullable();
            $table->bigInteger('municipios_id')->unsigned()->nullable();
            $table->bigInteger('parroquias_id')->unsigned()->nullable();
            $table->bigInteger('ciudades_id')->unsigned()->nullable();
            $table->foreign('estados_id')->references('id')->on('estados')->nullOnDelete();
            $table->foreign('municipios_id')->references('id')->on('municipios')->nullOnDelete();
            $table->foreign('parroquias_id')->references('id')->on('parroquias')->nullOnDelete();
            $table->foreign('ciudades_id')->references('id')->on('ciudades')->nullOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
