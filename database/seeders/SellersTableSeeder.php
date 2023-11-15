<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sellers')->insert([
            [
                'name' => 'Cliente Vendedor 1',
                'rut' => '12001234-5',
                'email' => 'cliente1@mail.com'            
            ],
            [
                'name' => 'Cliente Vendedor 2',
                'rut' => '11001234-5',
                'email' => 'cliente2@mail.com'            
            ]

        ]);
    }
}
