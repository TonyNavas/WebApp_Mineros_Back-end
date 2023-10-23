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
        Schema::create('verificacions', function (Blueprint $table) {
            $table->id();
            $table->integer('num_verificacion');
            $table->dateTime('hora_registro');

            $table->unsignedBigInteger('minero_id');
            $table->foreign('minero_id')->references('id')->on('mineros')->cascadeOnDelete();

            $table->unsignedBigInteger('procedencia_id');
            $table->foreign('procedencia_id')->references('id')->on('procedencias')->cascadeOnDelete();

            $table->unsignedBigInteger('conductor_id');
            $table->foreign('conductor_id')->references('id')->on('conductores')->cascadeOnDelete();

            $table->unsignedBigInteger('camion_id');
            $table->foreign('camion_id')->references('id')->on('camiones')->cascadeOnDelete();

            $table->integer('cant_sacos');

            $table->dateTime('hora_envio');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verificacions');
    }
};
