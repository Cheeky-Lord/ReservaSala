<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservarSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservar_salas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('bloco', 1);
            $table->integer('numero');
            $table->unsignedInteger('professor_id');
            $table->datetime('inicio');
            $table->datetime('fim');
            $table->timestamps();

            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservar_salas');
    }
}
