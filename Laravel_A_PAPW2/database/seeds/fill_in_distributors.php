<?php

use Illuminate\Database\Seeder;

class fill_in_distributors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distributors')->insert([	
        	['name-distributor' => 'Nintendo', 'id-country' => '6'],
        	['name-distributor' => 'Sony', 'id-country' => '6'],
        	['name-distributor' => 'Microsoft', 'id-country' => '7'],
        	['name-distributor' => 'Ubisoft', 'id-country' => '8'],
        	['name-distributor' => 'Bethesda', 'id-country' => '7'],
        	['name-distributor' => 'Valve', 'id-country' => '7'],
        	['name-distributor' => 'Sega', 'id-country' => '6'],
        	['name-distributor' => 'Electronic Arts', 'id-country' => '7']
        ]);
    }
}
