<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'usertype' => '1',
            'password' => Hash::make('password')
        ]);
        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'usertype' => '0',
            'address'=>'dgk',
            'phone' => '32232323232',
            'password' => Hash::make('password')
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
