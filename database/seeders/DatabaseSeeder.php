<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Tambahkan baris ini
use Database\Seeders\UsersSeeder;
use Database\Seeders\PackagesSeeder;
use Database\Seeders\BookingsSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Memanggil seeder untuk users, packages, dan bookings
        $this->call([
            UsersSeeder::class,
            PackagesSeeder::class,
            BookingsSeeder::class,
        ]);
    }
}
