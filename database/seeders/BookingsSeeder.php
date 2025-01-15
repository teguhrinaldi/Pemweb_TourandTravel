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
        $user1 = User::firstOrCreate(['email' => 'teguh@gmail.com'], [
            'name' => 'Teguh',
            'password' => bcrypt('password123'),
        ]);
        $user2 = User::firstOrCreate(['email' => 'indra@gmail.com'], [
            'name' => 'indra',
            'password' => bcrypt('password123'),
        ]);
        $user3 = User::firstOrCreate(['email' => 'sal@gmail.com'], [
            'name' => 'sal',
            'password' => bcrypt('password123'),
        ]);
        $user4 = User::firstOrCreate(['email' => 'muel@gmail.com'], [
            'name' => 'muel',
            'password' => bcrypt('password123'),
        ]);
        $user5 = User::firstOrCreate(['email' => 'raziq@gmail.com'], [
            'name' => 'raziq',
            'password' => bcrypt('password123'),
        ]);

        // Pastikan paket sudah ada
        $package1 = Package::firstOrCreate(['name' => 'Tour A'], ['price' => 1000]);
        $package2 = Package::firstOrCreate(['name' => 'Tour B'], ['price' => 1500]);
        $package3 = Package::firstOrCreate(['name' => 'Tour C'], ['price' => 2000]);
        $package4 = Package::firstOrCreate(['name' => 'Tour D'], ['price' => 3500]);
        $package5 = Package::firstOrCreate(['name' => 'Tour E'], ['price' => 55000]);
        $package6 = Package::firstOrCreate(['name' => 'Tour F'], ['price' => 12500]);;

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
        Booking::firstOrCreate([
            'user_id' => $user3->id,
            'package_id' => $package3->id,
        ], [
            'status' => 1,
        ]);
        Booking::firstOrCreate([
            'user_id' => $user4->id,
            'package_id' => $package4->id,
        ], [
            'status' => 1,
        ]);
        Booking::firstOrCreate([
            'user_id' => $user5->id,
            'package_id' => $package5->id,
        ], [
            'status' => 1,
        ]);
    }
}
