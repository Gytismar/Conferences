<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(5),
                'content' => Lorem::text(),
                'conference_date' => '2024-10-22',
                'address' => Lorem::sentence(3),
                'attending_people_count' => rand(20, 500),
            ],
            [
                'title' => Lorem::sentence(5),
                'content' => Lorem::text(),
                'conference_date' => '2024-10-22',
                'address' => Lorem::sentence(3),
                'attending_people_count' => rand(20, 500),
            ]
        ]);
    }
}
