<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BuyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('buyers')->insert([
            [
                'name' => 'Comprador Interesado 1',
                'rut' => '9001234-3',
                'email' => 'comprador1@mail.com'            
            ],
            [
                'name' => 'Comprador Interesado 2',
                'rut' => '10001234-0',
                'email' => 'comprador2@mail.com'            
            ]
        ]);
    }
}
