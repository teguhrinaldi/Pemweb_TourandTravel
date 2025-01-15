<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Booking;
use DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Menonaktifkan pemeriksaan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Menghapus data dari tabel users dan bookings
        Booking::truncate();
        User::truncate();

        // Menambahkan data user
        User::firstOrCreate([
            'email' => 'teguh@gmail.com',
        ], [
            'name' => 'teguh',
            'password' => bcrypt('password123'),
        ]);

        User::firstOrCreate([
            'email' => 'indra@gmail.com',
        ], [
            'name' => 'indra',
            'password' => bcrypt('password123'),
        ]);
        User::firstOrCreate([
            'email' => 'sal@gmail.com',
        ], [
            'name' => 'sal',
            'password' => bcrypt('password123'),
        ]);
        User::firstOrCreate([
            'email' => 'muel@gmail.com',
        ], [
            'name' => 'imuel',
            'password' => bcrypt('password123'),
        ]);
        User::firstOrCreate([
            'email' => 'raziq@gmail.com',
        ], [
            'name' => 'raziq',
            'password' => bcrypt('password123'),
        ]);

        // Menambahkan data user lainnya...

        // Mengaktifkan kembali pemeriksaan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
