<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('visits')->insert([
            [
                'date' => '2023-10-01 12:30:00',
                'status' => 'visited',
                'property_id' => '1',
                'buyer_id' => '1',          
            ],
            [
                'date' => '2023-11-20 12:30:00',
                'status' => 'scheduled',
                'property_id' => '2',
                'buyer_id' => '1',          
            ],
            [
                'date' => '2023-12-01 10:30:00',
                'status' => 'scheduled',
                'property_id' => '3',
                'buyer_id' => '2',          
            ]
        ]);
    }
}
