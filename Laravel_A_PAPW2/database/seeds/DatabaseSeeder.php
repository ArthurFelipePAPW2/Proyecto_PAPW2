<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(fill_in_countries::class);
        $this->call(fill_in_cities::class);
        $this->call(fill_in_genders::class);
        $this->call(fill_in_platforms::class);
        $this->call(fill_in_questions::class);
        $this->call(fill_in_distributors::class);
        $this->call(fill_in_more_countries::class);
    }
}
