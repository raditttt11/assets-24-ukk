<?php

namespace Database\Seeders;

use App\Models\User;
use illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            [
                'name' => 'Admin Perpus',
                'role' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('12345'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Petugas Perpus',
                'role' => 'petugas',
                'email' => 'petugas@petugas.com',
                'password' => bcrypt('12345'),
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'Peminjam Perpus',
                'role' => 'peminjam',
                'email' => 'peminjam@peminjam.com',
                'password' => bcrypt('12345'),
                'remember_token' => Str::random(10),
            ],
        ]);
    }
}
