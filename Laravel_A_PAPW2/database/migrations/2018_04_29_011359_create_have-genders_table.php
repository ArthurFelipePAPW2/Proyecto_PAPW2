<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHaveGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('have-genders', function (Blueprint $table) {
            $table->increments('id-belongs');
            $table->integer('id-videogame')->unsigned();
            $table->foreign('id-videogame')->references('id-videogame')->on('videogames');
            $table->integer('id-gender')->unsigned();
            $table->foreign('id-gender')->references('id-gender')->on('genders');
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
        Schema::dropIfExists('have-genders');
    }
}
