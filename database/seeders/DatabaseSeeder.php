<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)
            ->count(10)
            ->create();

        $this->call([
            LocationSeeder::class,
            UniversitySeeder::class,
            ProgramSeeder::class,
            RequirementSeeder::class,
            ProgramRequirementSeeder::class,
        ]);
    }
}
