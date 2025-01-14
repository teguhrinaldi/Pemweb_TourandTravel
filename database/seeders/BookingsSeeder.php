<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Booking;
use App\Models\Package;

class BookingsSeeder extends Seeder
{
    public function run()
    {
        // Pastikan bahwa data di tabel users dan packages sudah ada sebelum menambah data booking
        $user1 = User::firstOrCreate(['email' => 'john@example.com'], [
            'name' => 'John Doe',
            'password' => bcrypt('password123'),
        ]);
        $user2 = User::firstOrCreate(['email' => 'jane@example.com'], [
            'name' => 'Jane Doe',
            'password' => bcrypt('password123'),
        ]);

        // Pastikan paket sudah ada
        $package1 = Package::firstOrCreate(['name' => 'Tour A'], ['price' => 1000]);
        $package2 = Package::firstOrCreate(['name' => 'Tour B'], ['price' => 1500]);

        // Menambahkan data booking dengan relasi foreign key yang sesuai
        Booking::firstOrCreate([
            'user_id' => $user1->id,
            'package_id' => $package1->id,
        ], [
            'status' => 1,
        ]);

        Booking::firstOrCreate([
            'user_id' => $user2->id,
            'package_id' => $package2->id,
        ], [
            'status' => 1,
        ]);
    }
}
