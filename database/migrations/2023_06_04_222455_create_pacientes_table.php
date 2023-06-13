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
       
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('id');
            $table->string('cnombre');
            $table->string('cprimerapellido');
            $table->string('csegundoapellido')->nullable();
            $table->date('dfechanacimiento')->nullable();;
            $table->string('csexo')->nullable();
            $table->string('ctelefono')->nullable();
            $table->string('cemail')->nullable();
            $table->string('idusuario')->nullable();
            $table->string('cobservacion')->nullable();
            $table->boolean('lactivo')->default('1');
            $table->timestamps();
        });
        Schema::table('consultas', function (Blueprint $table) {
            $table->unsignedBigInteger('paciente_id')->after('id');

            $table->foreign('paciente_id')->references('id')->on('pacientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultas', function (Blueprint $table) {
            $table->dropForeign('consultas_idpaciente_foreign');
            $table->dropColumn('paciente_id');

        });

        Schema::dropIfExists('pacientes');
    }
};
