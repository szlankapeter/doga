<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Book::factory(10)->create();
        \App\Models\Copy::factory(10)->create();
        \App\Models\Lending::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Reservation::factory(10)->create();
    }
}
