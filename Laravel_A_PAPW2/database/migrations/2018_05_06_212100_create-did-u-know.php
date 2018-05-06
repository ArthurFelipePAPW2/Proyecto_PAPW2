<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDidUKnow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('did-u-know', function (Blueprint $table) {
            $table->increments('id-did-u-know')->unsigned();
            $table->string('description', 255);
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
       Schema::dropIfExists('did-u-know');
    }
}
