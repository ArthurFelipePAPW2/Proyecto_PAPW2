<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggestions', function (Blueprint $table) {
            $table->increments('id-suggestion');
            $table->string('game-suggested');
            $table->text('reason');
            $table->integer('id-user')->unsigned();
            $table->foreign('id-user')->references('id-user')->on('users');
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
        Schema::dropIfExists('suggestions');
    }
}
