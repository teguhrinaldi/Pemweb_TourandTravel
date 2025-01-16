<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackagesSeeder extends Seeder
{
    public function run()
    {
        Package::firstOrCreate([
            'name' => 'Tour A',
        ], [
            'price' => 1000,
            'description' => 'Description for Tour A',
        ]);

        Package::firstOrCreate([
            'name' => 'Tour B',
        ], [
            'price' => 1500,
            'description' => 'Description for Tour B',
        ]);

        Package::firstOrCreate([
            'name' => 'Tour C',
        ], [
            'price' => 2000,
            'description' => 'Description for Tour C',
        ]);
        Package::firstOrCreate([
            'name' => 'Tour D',
        ], [
            'price' => 3500,
            'description' => 'Description for Tour D',
        ]);
        Package::firstOrCreate([
            'name' => 'Tour E',
        ], [
            'price' => 55000,
            'description' => 'Description for Tour E',
        ]);
        Package::firstOrCreate([
            'name' => 'Tour F',
        ], [
            'price' => 12500,
            'description' => 'Description for Tour F',
        ]);
        
    }
}
