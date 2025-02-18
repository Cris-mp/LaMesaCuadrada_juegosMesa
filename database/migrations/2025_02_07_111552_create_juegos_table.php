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
        Schema::create('juegos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->id();
            $table->string('nombre');
            $table->double('precio');
            $table->integer('unidades');
            $table->integer('duracion');
            $table->integer('edad_min');
            $table->integer('jugadores_max');
            $table->unsignedBigInteger('editorial_id');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('editorial_id')->references('id')->on('editorials')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juegos');
    }
};
