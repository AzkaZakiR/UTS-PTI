<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cars;
use App\Models\Users;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\Users::factory(10)->create();

        Users::create([
            'username' => 'Jono',
            'email' => 'Jono@g.com',
            'roles' => 'admin',
            'active' => 1,
            'password' => bcrypt('jono'),
        ]);

        Users::create([
            'username' => 'John Doe',
            'email' => 'john@gmail.com',
            'roles' => 'customer',
            'active' => 1,
            'password' => bcrypt('john'),
        ]);
        Cars::create([
            'brand' => 'Toyota',
            'model' => 'Camry',
            'year' => '2022',
            'status' => 'Available',
            'plat_number' => 'ABC123',
            'price' =>  300000,
            'color' => 'Blue',
            'seats' => '4',
            'gasoline' => 'bensin',
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
            'price' =>  250000,
            'color' => 'Blue',
            'seats' => '4',
            'gasoline' => 'bensin',
            'transmission' => 'Manual',
            'image' => 'honda_accord.jpg',
        ]);
        
        // Create the third car
        Cars::create([
            'brand' => 'Mitsubishi',
            'model' => 'Pajero',
            'year' => '2023',
            'status' => 'Available',
            'plat_number' => 'PQR456',
            'color' => 'Silver',
            'price' =>  400000,
            'color' => 'Blue',
            'seats' => '7',
            'gasoline' => 'bensin',
            'transmission' => 'Automatic',
            'image' => 'ford_pajero.jpg',
        ]);
    }
}
