<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('agents')->insert([
            [
                'name' => 'Agente Corredor 1',
                'rut' => '16001234-3',
                'email' => 'agente1@mail.com'            
            ],
            [
                'name' => 'Agente Corredor 2',
                'rut' => '15001234-0',
                'email' => 'agente2@mail.com'            
            ]
        ]);
    }
}
