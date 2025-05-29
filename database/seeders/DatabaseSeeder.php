<?php

namespace Database\Seeders;
use App\Models\Stylist;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Stylist::factory()->count(10)->create();
    }
}
