<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;
use Symfony\Component\Yaml\Yaml;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Yaml::parseFile(database_path('rooms.yaml'));
        Room::factory(count($rooms))
            ->sequence(...$rooms)
            ->create();
    }
}
