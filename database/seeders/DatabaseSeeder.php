<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
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

        City::create([
            'name' => 'Jakarta',
        ]);
        City::create([
            'name' => 'Surabaya',
        ]);
        City::create([
            'name' => 'Bandung',
        ]);
        City::create([
            'name' => 'Jogjakarta',
        ]);
    }
}
