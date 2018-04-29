<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForPlatformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for-platforms', function (Blueprint $table) {
            $table->increments('id-for');
            $table->integer('id-videogame')->unsigned();
            $table->foreign('id-videogame')->references('id-videogame')->on('videogames');
            $table->integer('id-platform')->unsigned();
            $table->foreign('id-platform')->references('id-platform')->on('platforms');
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
        Schema::dropIfExists('for-platforms');
    }
}
