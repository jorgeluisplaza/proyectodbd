<?php

use Illuminate\Database\Seeder;
use App\Vuelo;

class VuelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Vuelo', 10)->create();
    }
}
