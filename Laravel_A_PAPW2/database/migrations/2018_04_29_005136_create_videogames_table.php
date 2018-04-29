<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideogamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videogames', function (Blueprint $table) {
            $table->increments('id-videogame')->unsigned();
            $table->string('name-videogame', 50);
            $table->binary('cover');
            $table->text('description');
            $table->date('date-out');
            $table->integer('id-administrador')->unsigned();
            $table->foreign('id-administrador')->references('id-administrador')->on('administradors');
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
        Schema::dropIfExists('videogames');
    }
}
