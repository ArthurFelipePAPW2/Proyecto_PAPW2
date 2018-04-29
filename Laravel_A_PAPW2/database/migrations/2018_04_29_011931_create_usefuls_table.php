<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsefulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usefuls', function (Blueprint $table) {
            $table->increments('id-useful');
            $table->integer('id-user')->unsigned();
            $table->foreign('id-user')->references('id-user')->on('users');
            $table->integer('id-review')->unsigned();
            $table->foreign('id-review')->references('id-review')->on('reviews');
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
        Schema::dropIfExists('usefuls');
    }
}
