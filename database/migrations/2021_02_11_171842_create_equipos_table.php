<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('equi_id');
            $table->integer('tipo_idEquipo');
            $table->string('equi_nombreTipoEquipo');
            $table->string('marc_id');
            $table->string('equi_marcaNombre');
            $table->string('equi_serie');
            $table->string('equi_modelo');
            $table->string('equi_color');
            $table->string('equi_estado');
            $table->string('equi_comentarios')->nullable();
            $table->string('equi_estadoAsigando')->nullable();
            $table->string('equi_asiganadoActualA')->nullable();
            $table->string('equi_ubicacionActual')->nullable();
            $table->integer('usua_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
