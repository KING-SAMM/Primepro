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
        DB::table('prototypes')->insert([
            'title' => 'Microdrone',
            'tags' => 'drone spy surveilance',
            'company' => 'Zinox Corp',
            'location' => 'Tel aviv, Israel',
            'email' => 'test@example.com',
            'website' => 'https://www.zinox.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aperiam voluptas, ipsa culpa eum nemo accusantium natus ab cum aliquid. Ut ad consectetur aperiam praesentium id fuga nobis, numquam dignissimos rerum quasi voluptas placeat maxime, quidem deserunt repudiandae illo nesciunt.'
        ]);

        DB::table('prototypes')->insert([
            'title' => 'AI Home Assistant',
            'tags' => 'ai robotics',
            'company' => 'Nova Technologies',
            'location' => 'Palo Alto, Ca',
            'email' => 'mova@example.com',
            'website' => 'https://www.novatech.com',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis aperiam voluptas, ipsa culpa eum nemo accusantium natus ab cum aliquid. Ut ad consectetur aperiam praesentium id fuga nobis, numquam dignissimos rerum quasi voluptas placeat maxime, quidem deserunt repudiandae illo nesciunt.'
        ]);
    }
}
