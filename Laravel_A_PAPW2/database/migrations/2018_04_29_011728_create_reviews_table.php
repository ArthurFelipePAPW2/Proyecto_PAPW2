<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id-review');
            $table->integer('id-user')->unsigned();
            $table->foreign('id-user')->references('id-user')->on('users');
            $table->integer('id-videogame')->unsigned();
            $table->foreign('id-videogame')->references('id-videogame')->on('videogames');
            $table->text('text-review');
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
        Schema::dropIfExists('reviews');
    }
}
