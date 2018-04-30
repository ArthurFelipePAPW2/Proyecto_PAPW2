<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class fill_in_cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([	
        	['name-city' => 'Nuevo Leon', 'initials' => 'NL', 'id-country' => '1'],
        	['name-city' => 'Ciudad de Mexico', 'initials' => 'CDMX', 'id-country' => '1'],
        	['name-city' => 'Vancouver', 'initials' => 'VNC', 'id-country' => '2'],
        	['name-city' => 'Toronto', 'initials' => 'TOR', 'id-country' => '2'],
        	['name-city' => 'Santiago de Chile', 'initials' => 'SDC', 'id-country' => '3'],
        	['name-city' => 'Temuco', 'initials' => 'TCO', 'id-country' => '3'],
        	['name-city' => 'Bogota', 'initials' => 'BTA', 'id-country' => '4'],
        	['name-city' => 'Medellin', 'initials' => 'MLN', 'id-country' => '4'],
        	['name-city' => 'Buenos Aires', 'initials' => 'BAS', 'id-country' => '5'],
        	['name-city' => 'Rosario', 'initials' => 'RSA', 'id-country' => '5']
        ]);
    }
}
