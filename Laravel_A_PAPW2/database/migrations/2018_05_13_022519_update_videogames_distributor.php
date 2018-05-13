<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVideogamesDistributor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videogames', function (Blueprint $table) {
            $table->integer('id-developer')->unsigned()->after('id-administrador');
            $table->foreign('id-developer')->references('id-distributor')->on('distributors');
            $table->integer('id-distributor')->unsigned()->after('id-administrador');
            $table->foreign('id-distributor')->references('id-distributor')->on('distributors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videogames', function (Blueprint $table) {
            //
        });
    }
}
