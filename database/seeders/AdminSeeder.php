<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //CREATE THE ADMIN USERS HERE
        User::create([
            'name' => 'Owner',
            'email' => 'admin@gmail.com',
            'password' => 'password',
            'user_type' => 'admin'
        ]);
    }
}
