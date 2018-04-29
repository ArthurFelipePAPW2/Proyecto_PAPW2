<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id-user');
            $table->string('name-user', 50);
            $table->string('last-name-user', 50);
            $table->string('email-user', 50)->unique();
            $table->string('pass-user', 30);
            $table->boolean('gender');
            $table->binary('avatar');
            $table->date('birthday');
            $table->integer('id-city')->unsigned();
            $table->foreign('id-city')->references('id-city')->on('cities');
            $table->integer('id-security')->unsigned();
            $table->foreign('id-security')->references('id-security')->on('securities');
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
        Schema::dropIfExists('users');
    }
}
