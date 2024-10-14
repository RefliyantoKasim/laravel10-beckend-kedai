<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 user secara acak dengan factory
        User::factory(10)->create();

        // Membuat user Admin Kedai
        User::factory()->create([
            'name' => 'Admin Kedai',
            'email' => 'kedai@gmail.com',
            'password' => Hash::make('12345678'), // Hashing password untuk keamanan
        ]);
    }
}
