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
        User::truncate();
        User::create([
            'name' => 'Admin Perpus',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(10),
        ]);
    }
}
