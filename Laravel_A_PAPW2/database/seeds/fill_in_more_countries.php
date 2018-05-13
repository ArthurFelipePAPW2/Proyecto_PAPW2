<?php

use Illuminate\Database\Seeder;

class fill_in_more_countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([	
        	['name-country' => 'Japon', 'initials' => 'JAP'],
        	['name-country' => 'Estados Unidos de America', 'initials' => 'EUA'],
        	['name-country' => 'Francia', 'initials' => 'FRN'],
        	['name-country' => 'Alemania', 'initials' => 'ALM'],
        	['name-country' => 'China', 'initials' => 'CHI']
        ]);
    }
}
