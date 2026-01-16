<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $characters = [
            [
                "name" => "шевис",
                "world_view_id" => 1,
            ],
            [
                "name" => "зенон",
                "world_view_id" => 1,
                "guild_id" => 4,
            ],
            [
                "name" => "алисия грейвуд",
                "world_view_id" => 1,
                "guild_id" => 1,
            ],
            [
                "name" => "арбитр/друман",
                "world_view_id" => 2,
                "guild_id" => 1,
            ],
            [
                "name" => "гайдур",
                "world_view_id" => 3,
                "guild_id" => 2,
            ],
            [
                "name" => "госпожа гельмир витц",
                "world_view_id" => 2,
                "guild_id" => 2,
            ],
            [
                "name" => "джонни голденхед",
                "world_view_id" => 2,
                "guild_id" => 2,
            ],
            [
                "name" => "джонни голденхед",
                "world_view_id" => 2,
                "guild_id" => 2,
            ],
            [
                "name" => "джонни голденхед",
                "world_view_id" => 2,
                "guild_id" => 2,
            ],
            [
                "name" => "шрам",
                "world_view_id" => 2,
                "guild_id" => 2,
            ],
        ];

        foreach ($characters as $character) {
            Character::create($character);
        }
    }
}
