<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// tambahkan ini
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);

         Hero::create([
            'image' => 'hero1.jpg',
        ]);

         Product::create([
            'name' => 'Rose',
            'description' => '35 ml',
            'image' => '',
            'price' => 100000,
        ]);

         Gallery::create([
            'title' => 'Galeri kami',
            'image' => 'gallery1.jpg',
        ]);

         Information::create([
            'phone' => '0897635534',
            'tiktok' => 'tiktok.com',
            'instagram' => 'instagram.com',
            'location' => 'jl.mangga',
        ]);
    }
}