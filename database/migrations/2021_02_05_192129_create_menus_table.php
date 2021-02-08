<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('menu_id');
            $table->string('menu_nombre');
            $table->string('menu_descripcion');
            $table->integer('menu_padre');
            $table->string('menu_icono');
            $table->integer('menu_espadre');
            $table->string('menu_nombreformulario');
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
        Schema::dropIfExists('menus');
    }
}
