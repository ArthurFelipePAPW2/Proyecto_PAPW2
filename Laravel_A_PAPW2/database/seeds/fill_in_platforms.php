<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class fill_in_platforms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([	
        	['name-platform' => 'Nintendo Switch', 'initials' => 'NS'],
        	['name-platform' => 'Xbox One', 'initials' => 'XONE'],
        	['name-platform' => 'Play Station 4', 'initials' => 'PS4'],
        	['name-platform' => 'Nintendo 3DS', 'initials' => 'N3DS'],
        	['name-platform' => 'Steam', 'initials' => 'ST'],
        	['name-platform' => 'Play Station Vita', 'initials' => 'Vita'],
        	['name-platform' => 'Wii U', 'initials' => 'WIIU'],
        	['name-platform' => 'Nintendo DS', 'initials' => 'NDS']
        ]);
    }
}
