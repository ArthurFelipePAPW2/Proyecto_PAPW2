<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class fill_in_countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([	
        	['name-country' => 'Mexico', 'initials' => 'MEX'],
        	['name-country' => 'Canada', 'initials' => 'CAN'],
        	['name-country' => 'Chile', 'initials' => 'CHL'],
        	['name-country' => 'Colombia', 'initials' => 'COL'],
        	['name-country' => 'Argentina', 'initials' => 'ARG']
        ]);
    }
}
