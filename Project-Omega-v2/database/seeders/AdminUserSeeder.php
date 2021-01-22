<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('secret'),
            'is_admin' => 1
        ]);
    }
}
