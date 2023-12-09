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
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'roles' => 'admin',
            'active' => 1,
            'password' => bcrypt('admin'),
        ]);

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
            'price_per_day' =>  600000,
            'price_per_week' =>  3000000,
            'type' => 'sedan',
            'seats' => '4',
            'engine' => '2500 CC',
            'gasoline' => 'bensin',
            'transmission' => 'Automatic',
            'image' => 'camry.jpg',
        ]);
        
        Cars::create([
            'brand' => 'Honda',
            'model' => 'Accord',
            'year' => '2021',
            'status' => 'Maintenance',
            'plat_number' => 'XYZ789',
            'price_per_day' =>  550000,
            'price_per_week' =>  2800000,
            'type' => 'sedan',
            'seats' => '4',
            'engine' => '2200 CC',
            'gasoline' => 'bensin',
            'transmission' => 'Manual',
            'image' => 'honda_accord.jpg',
        ]);
        
        Cars::create([
            'brand' => 'Mitsubishi',
            'model' => 'Pajero',
            'year' => '2023',
            'status' => 'Available',
            'plat_number' => 'PQR456',
            'price_per_day' =>  1000000,
            'price_per_week' =>  6100000,
            'type' => 'SUV',
            'seats' => '7',
            'engine' => '2500 CC',
            'gasoline' => 'bensin',
            'transmission' => 'Automatic',
            'image' => 'mitsubishi_pajero.png',
        ]);
        Cars::create([
            'brand' => 'Toyota',
            'model' => 'Fortuner',
            'year' => '2023',
            'status' => 'Available',
            'plat_number' => 'PQR456',
            'price_per_day' =>  900000,
            'price_per_week' =>  5700000,
            'type' => 'SUV',
            'seats' => '7',
            'engine' => '2600 CC',
            'gasoline' => 'bensin',
            'transmission' => 'Automatic',
            'image' => 'toyota_fortuner.png',
        ]);
        // Toyota data entry
    Cars::create([
        'brand' => 'Toyota',
        'model' => 'Corolla',
        'year' => '2021',
        'status' => 'Available',
        'plat_number' => 'XYZ456',
        'price_per_day' => 500000,
        'price_per_week' => 2500000,
        'type' => 'sedan',
        'seats' => '5',
        'engine' => '1800 CC',
        'gasoline' => 'bensin',
        'transmission' => 'Automatic',
        'image' => 'toyota_corolla.jpg',
    ]);

    // Honda data entry
    Cars::create([
        'brand' => 'Honda',
        'model' => 'Civic',
        'year' => '2023',
        'status' => 'Available',
        'plat_number' => 'DEF789',
        'price_per_day' => 550000,
        'price_per_week' => 2750000,
        'type' => 'sedan',
        'seats' => '5',
        'engine' => '2000 CC',
        'gasoline' => 'bensin',
        'transmission' => 'CVT',
        'image' => 'honda_civic.jpg',
    ]);

    Cars::create([
        'brand' => 'Mitsubishi',
        'model' => 'Outlander',
        'year' => '2022',
        'status' => 'Available',
        'plat_number' => 'GHI012',
        'price_per_day' => 650000,
        'price_per_week' => 3250000,
        'type' => 'SUV',
        'seats' => '7',
        'engine' => '2200 CC',
        'gasoline' => 'bensin',
        'transmission' => 'Automatic',
        'image' => 'mitsubishi_outlander.png',
    ]);

    Cars::create([
        'brand' => 'Ford',
        'model' => 'F-150',
        'year' => '2022',
        'status' => 'Available',
        'plat_number' => 'JKL345',
        'price_per_day' => 700000,
        'price_per_week' => 3500000,
        'type' => 'Truck',
        'seats' => '2',
        'engine' => '3000 CC',
        'gasoline' => 'diesel',
        'transmission' => 'Automatic',
        'image' => 'ford_f150.jpg',
    ]);
    // Toyota SUV data entry
Cars::create([
    'brand' => 'Toyota',
    'model' => 'RAV4',
    'year' => '2022',
    'status' => 'Available',
    'plat_number' => 'LMN678',
    'price_per_day' => 550000,
    'price_per_week' => 2750000,
    'type' => 'SUV',
    'seats' => '5',
    'engine' => '2000 CC',
    'gasoline' => 'bensin',
    'transmission' => 'Automatic',
    'image' => 'toyota_RAV4.jpg',
]);

// Honda SUV data entry
Cars::create([
    'brand' => 'Honda',
    'model' => 'Pilot',
    'year' => '2022',
    'status' => 'Available',
    'plat_number' => 'OPQ901',
    'price_per_day' => 600000,
    'price_per_week' => 3000000,
    'type' => 'SUV',
    'seats' => '8',
    'engine' => '3500 CC',
    'gasoline' => 'bensin',
    'transmission' => 'Automatic',
    'image' => 'honda_pilot.png',
]);

// Mitsubishi Hatchback data entry
Cars::create([
    'brand' => 'Honda',
    'model' => 'Brio',
    'year' => '2021',
    'status' => 'Available',
    'plat_number' => 'RST234',
    'price_per_day' => 480000,
    'price_per_week' => 2400000,
    'type' => 'Hatchback',
    'seats' => '4',
    'engine' => '1200 CC',
    'gasoline' => 'bensin',
    'transmission' => 'CVT',
    'image' => 'honda_brio.jpg',
]);

// Electric car data entry
Cars::create([
    'brand' => 'Tesla',
    'model' => 'Model S',
    'year' => '2023',
    'status' => 'Available',
    'plat_number' => 'UVW345',
    'price_per_day' => 800000,
    'price_per_week' => 4000000,
    'type' => 'Electric',
    'seats' => '5',
    'engine' => 'Electric',
    'gasoline' => 'Electric',
    'transmission' => 'Automatic',
    'image' => 'tesla_modelS.jpg',
]);

    }
}
