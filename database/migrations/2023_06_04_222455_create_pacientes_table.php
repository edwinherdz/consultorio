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
            $table->text('cobservacion')->nullable();
            $table->boolean('lactivo')->default('1');
            $table->timestamps();
        });
        Schema::table('consultas', function (Blueprint $table) {
            $table->unsignedBigInteger('paciente_id')->after('id');

            $table->foreign('paciente_id')->references('id')->on('pacientes');
        });

        Schema::table('pacientes', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('lactivo');

            $table->foreign('user_id')->references('id')->on('users');
    });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultas', function (Blueprint $table) {
            $table->dropForeign('consultas_paciente_id_foreign');
            $table->dropColumn('paciente_id');

        });
       
        Schema::dropIfExists('pacientes');
    }
};
