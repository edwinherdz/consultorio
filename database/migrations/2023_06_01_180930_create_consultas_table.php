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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('eedad')->nullable();
            $table->double('dtalla')->nullable();
            $table->double('dpeso')->nullable();
            $table->string('calergias')->nullable();
            $table->string('cpresion')->nullable();
            $table->string('cdiagnostico');
            $table->string('ctratamiento');
            $table->string('idusuario');
            $table->String('cobservacion')->nullable();
            $table->boolean('lactivo')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
