<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'admin1',
            'nama' => 'administrator',
            'password' => bcrypt('12345'), 
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'resep1',
            'nama' => 'resepsionis',
            'password' => bcrypt('12345'), 
            'role' => 'resepsionis'
        ]);
        // User::create([
        //     'username' => 'resep1',
        //     'nama' => 'resepsionis',
        //     'password' => bcrypt('12345'), 
        //     'role' => 'resepsionis'
        // ]);
    }
}
