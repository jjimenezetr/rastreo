<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmotorizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmotorizados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUsuario');
            $table->string('numero_chip');
            $table->string('placa');
            $table->string('color');
            $table->string('descripcion');
            $table->string('modelo');
            $table->integer('gestion');
            $table->integer('idLinea');
            $table->integer('idCategoria');
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
        Schema::dropIfExists('tmotorizados');
    }
}
