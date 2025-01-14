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

        // Add more packages if needed
    }
}
