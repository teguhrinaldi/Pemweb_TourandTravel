<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    public function run()
    {
        DB::table('destinations')->insert([
            ['name' => 'Bali', 'location' => 'Indonesia', 'description' => 'Pulau Dewata', 'image' => null],
            ['name' => 'Tokyo', 'location' => 'Japan', 'description' => 'Kota modern dengan budaya tradisional', 'image' => null],
            ['name' => 'Paris', 'location' => 'France', 'description' => 'Kota cinta', 'image' => null],
        ]);
    }
}
