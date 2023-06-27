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
        Schema::create('dato_empresas', function (Blueprint $table) {
            $table->id();
            $table->longText('cnombreconsultorio');
            $table->mediumText('cdescripción')->nullable();
            $table->mediumText('cdireccion')->nullable();
            $table->text('ctelefono')->nullable();
            $table->longText('cemail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dato_empresas');
    }
};
