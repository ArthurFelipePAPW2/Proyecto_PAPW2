<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class fill_in_questions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('securities')->insert([	
        	['question' => '¿Como se llama tu mascota?'],
        	['question' => '¿Cual es tu color favorito?'],
        	['question' => '¿Cual es tu videojuego favorito?'],
        	['question' => '¿Juegas en PC o en consola?'],
        	['question' => '¿Crador de videojuegos favorito?']
        ]);
    }
}
