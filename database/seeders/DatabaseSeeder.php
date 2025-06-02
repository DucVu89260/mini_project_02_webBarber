<?php

namespace Database\Seeders;
use App\Models\Stylist;
use App\Models\Service;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Stylist::factory()->count(20)->create();
        Service::factory()->count(8)->create();
        
        $this->call([
            UserSeeder::class,
        ]);
    }
}
