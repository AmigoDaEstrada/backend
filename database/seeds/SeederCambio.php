<?php

use App\Models\Cambio;  
use Illuminate\Database\Seeder;

class SeederCambio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cambio::create([
            'user' 		=> 1,
            'destination' 	=> 2,
            'message' 		=> 'Olá Amigão!'
        ]);
    }
}
