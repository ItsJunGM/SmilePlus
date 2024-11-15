<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Dentist;
use App\Models\User;
use App\Models\Specialty;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Specialty::factory()
            ->count(5)
            ->create();
        
        Service::factory()
            ->count(20)
            ->create();
    
        Dentist::factory()
            ->count(15)
            ->create();
    
        Appointment::factory()
            ->count(50)
            ->create();
    }
}
