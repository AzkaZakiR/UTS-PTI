<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cars;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\Users::factory(10)->create();

        \App\Models\Users::create([
            'username' => 'Jono',
            'email' => 'Jono@g.com',
            'roles' => 'admin',
            'active' => 1,
            'password' => bcrypt('jono'),
        ]);

        Cars::create([
            'brand' => 'Toyota',
            'model' => 'Camry',
            'year' => '2022',
            'status' => 'Available',
            'plat_number' => 'ABC123',
            'color' => 'Blue',
            'mileage' => '5000',
            'transmission' => 'Automatic',
            'image' => 'toyota_camry.jpg',
        ]);
        
        // Create the second car
        Cars::create([
            'brand' => 'Honda',
            'model' => 'Accord',
            'year' => '2021',
            'status' => 'Unavailable',
            'plat_number' => 'XYZ789',
            'color' => 'Red',
            'mileage' => '8000',
            'transmission' => 'Manual',
            'image' => 'honda_accord.jpg',
        ]);
        
        // Create the third car
        Cars::create([
            'brand' => 'Ford',
            'model' => 'Fusion',
            'year' => '2023',
            'status' => 'Available',
            'plat_number' => 'PQR456',
            'color' => 'Silver',
            'mileage' => '3000',
            'transmission' => 'Automatic',
            'image' => 'ford_fusion.jpg',
        ]);
    }
}
