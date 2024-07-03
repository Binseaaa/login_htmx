<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $users = [
            [
                'name'     => 'Test User',
                'email'    => 'test@example.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name'     => 'Test Admin',
                'email'    => 'admin@example.com',
                'password' => Hash::make('12345678')
            ],
        ];

        // Loop through each user and create them
        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
