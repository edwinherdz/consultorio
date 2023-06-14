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
            $table->text('cdiagnostico');
            $table->text('ctratamiento');
            $table->text('cobservacion')->nullable();
            $table->boolean('lactivo')->default('1');
            $table->timestamps();
        });

        Schema::table('consultas', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('lactivo');
    
            $table->foreign('user_id')->references('id')->on('users');
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
