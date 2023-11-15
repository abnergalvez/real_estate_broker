<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('properties')->insert([
            [
                'name' => 'Propiedad 1',
                'address' => 'Calle Desconocida 123, Santiago',
                'description' => 'askdjlkajsd aksldj lkasj dklaj sdj',
                'total_area' => '350',
                'price' => '200000000',
                'status' => 'for_sale',
                'seller_id' => '1',
                'agent_id' => '1'       
            ],
            [
                'name' => 'Propiedad 2',
                'address' => 'Dieciocho 555, Santiago',
                'description' => 'adad aksldj lkasj dklaj sdj',
                'total_area' => '450',
                'price' => '100000000',
                'status' => 'for_sale',
                'seller_id' => '1',
                'agent_id' => '2'       
            ],
            [
                'name' => 'Propiedad 3',
                'address' => 'Desconocida 555, Santiago',
                'description' => 'adad aksldj lkasj dklaj sdj',
                'total_area' => '250',
                'price' => '450000000',
                'status' => 'for_sale',
                'seller_id' => '2',
                'agent_id' => '1'       
            ]

        ]);
    }
}
