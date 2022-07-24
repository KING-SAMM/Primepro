<?php

namespace Database\Seeders;

// // use App\Models\Prototype;

use App\Models\Prototype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed users table
        \App\Models\User::factory(5)->create();

        // Seed prototype table
        Prototype::factory(10)->create();
    }
}
