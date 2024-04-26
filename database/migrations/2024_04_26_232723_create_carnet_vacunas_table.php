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
        Schema::create('carnet_vacunas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perro_id')->constrained()->onDelete('cascade');
            $table->string('vacuna');
            $table->date('fecha_aplicacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carnet_vacunas');
    }
};
