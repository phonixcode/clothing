<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Qudus O',
                'email' => 'qudus@example.com',
                'password' => Hash::make('password'),
                'address' => '123 Main St',
                'city' => 'Lagos',
                'postcode' => '100001',
                'state' => 'Lagos',
                'country' => 'Nigeria',
            ],
            [
                'name' => 'Alan Abiodun',
                'email' => 'alan@example.com',
                'password' => Hash::make('password'),
                'address' => '456 Broad St',
                'city' => 'Abuja',
                'postcode' => '900001',
                'state' => 'Abuja',
                'country' => 'Nigeria',
            ],
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
