<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DrinkSeeder::class,
        ]);

        User::insert([
            'id' => '1',
            'name' => 'Mahir',
            'email' => 'mahir@262live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => 2,
        ]);

        User::insert([
            'id' => '2',
            'name' => 'Levent',
            'email' => 'levent@262live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => 2,
        ]);

        User::insert([
            'id' => '3',
            'name' => 'Melih',
            'email' => 'melih@262live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => 2,
        ]);

        User::insert([
            'id' => '4',
            'name' => 'Aykut',
            'email' => 'aykut@262live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);

        User::insert([
            'id' => '5',
            'name' => 'Türker',
            'email' => 'turker@262live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);

        User::insert([
            'id' => '6',
            'name' => 'Ali',
            'email' => 'ali@262live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'is_admin' => 0,
        ]);
    }
}
