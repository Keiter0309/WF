<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => env('ADMIN_NAME', 'Admin'),
            'email'=> env('ADMIN_EMAIL', 'admin@gmail.com'),
            'password' => bcrypt(env('ADMIN_PASSWORD', '12345678')),
            'role' => 'admin',
        ]);
    }
}
