<?php

namespace Database\Seeders;

use App\Models\RoboticsKit;
use Illuminate\Database\Seeder;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        RoboticsKit::insert([
            ['name' => 'StarterKit',               'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Educational Robotics Kit',  'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kit5',                      'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
