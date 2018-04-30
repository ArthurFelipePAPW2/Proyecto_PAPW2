<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class fill_in_genders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([	
        	['name-gender' => 'Accion'],
        	['name-gender' => 'Aventura'],
        	['name-gender' => 'RPG'],
        	['name-gender' => 'Shooter'],
        	['name-gender' => 'Puzzles'],
        	['name-gender' => 'Plataformas'],
        	['name-gender' => 'Lucha'],
        	['name-gender' => 'MOBA'],
        	['name-gender' => 'Carreras'],
        	['name-gender' => 'Point&Click']
        ]);
    }
}
