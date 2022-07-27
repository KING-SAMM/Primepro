<?php

namespace Database\Seeders;

// // use App\Models\Prototype;

use App\Models\User;
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
        // Seed users table - generate five random users
        // \App\Models\User::factory(5)->create();

        // Create single user with predetermined name and email
        $user = User::factory()->create([
            'name' => 'Phill Davids',
            'email' => 'phil@gmail.com'
        ]);

        // Seed prototype table - assign all prototypes to the above single user
        Prototype::factory(5)->create([
            'user_id' => $user->id
        ]);
    }
}
