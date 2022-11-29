<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'id' => 1,
            'firstname' => 'Sarah',
            'lastname' => 'Oben',
            'email' => 'sarah@example.com',
            'password' => bcrypt('password'),
            'type' => 'admin',

        ]);
        Product::create(['name' => 'Shabu', 'quantity' => 10000, 'price' => 500.25, 'user_id' => 1]);
        Product::create(['name' => 'Shanghai', 'quantity' => 500, 'price' => 20, 'user_id' => 1]);
        Product::create(['name' => 'Icecream', 'quantity' => 45, 'price' => 15, 'user_id' => 1]);
        Product::create(['name' => 'Milktea', 'quantity' => 45, 'price' => 60, 'user_id' => 1]);
    }
}
