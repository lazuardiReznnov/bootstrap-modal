<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $province1 = Province::create([
            'name' => 'Jakarta',
        ]);
        $province2 = Province::create([
            'name' => 'Tangerang',
        ]);

        $province1->city()->create([
            'name' => 'Jakarta Pusat',
        ]);
        $province1->city()->create([
            'name' => 'Jakarta Barat',
        ]);
        $province1->city()->create([
            'name' => 'Jakarta timur',
        ]);
        $province1->city()->create([
            'name' => 'Jakarta Selatan',
        ]);
        $province1->city()->create([
            'name' => 'Jakarta Utara',
        ]);
        $province2->city()->create([
            'name' => 'Tangerang Kota',
        ]);
        $province2->city()->create([
            'name' => 'Tangerang kabupaten',
        ]);
        $province2->city()->create([
            'name' => 'Tangerang Selatan',
        ]);
    }
}
