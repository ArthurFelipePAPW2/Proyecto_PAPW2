<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateDiduknow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('did-u-know', function($table) {
              //$table->boolean('active', 1)->default(1)->after('id-administrador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::table('did-u-know', function($table) {
           // $table->dropColumn('active');
        });
    }
}
