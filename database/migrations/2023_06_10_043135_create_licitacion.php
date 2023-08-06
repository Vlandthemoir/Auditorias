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
        Schema::create('licitacion', function (Blueprint $table) {
            $table->id();
            $table->string('usuario_id');
            $table->string('nombre');
            $table->string('folio');
            $table->string('area');
            $table->date('fecha_elaboracion');
            $table->date('fecha_recepcion');
            $table->string('plazo_dias');
            $table->string('formato_fecha');
            $table->date('fecha_culminacion');
            $table->string('cantidad_aplica');
            $table->string('progreso_aplica');
            $table->timestamp('fecha_creado')->nullable();
            $table->timestamp('fecha_modificado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licitacion');
    }
};
