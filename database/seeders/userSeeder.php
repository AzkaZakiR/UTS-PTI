<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Define the default user data
    $users = [
        [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('secret'),
        ],
        [
            'name' => 'Jane Doe',
            'email' => 'janedoe@gmail.com',
            'password' => bcrypt('12345'),
        ],
    ];

    // Insert the default user data
    // foreach ($users as $user) {
    //     DB::table('users')->insert($user);
    // }
    }
}
