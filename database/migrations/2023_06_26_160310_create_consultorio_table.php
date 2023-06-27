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
        Schema::create('consultorios', function (Blueprint $table) {
            $table->id();
            $table->longText('cnombreconsultorio');
            $table->mediumText('cdescripcion')->nullable();
            $table->mediumText('cdireccion')->nullable();
            $table->text('ctelefono')->nullable();
            $table->longText('cemail')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('consultorio_id')->nullable()->after('email');

            $table->foreign('consultorio_id')->references('id')->on('consultorios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_consultorio_id_foreign');
            $table->dropColumn('consultorio_id');

        });
       
        Schema::dropIfExists('consultorios');
    }
};
