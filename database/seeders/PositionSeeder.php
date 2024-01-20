<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = Yaml::parseFile(database_path('positions.yaml'));
        Position::factory(count($positions))
            ->sequence(...$positions)
            ->create();
    }
}
