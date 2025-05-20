<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@dyacara.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
            'email_verified_at' => now(),
        ]);
    }
}