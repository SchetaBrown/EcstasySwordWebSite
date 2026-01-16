<?php

namespace Database\Seeders;

use App\Models\Guild;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guilds = [
            [
                'title' => 'рыцари крови',
                'goal' => 'прохождение башни',
                'additional_information' => 'стремление к прохождению башни, выход из виртуальной реальности',
            ],
            [
                'title' => 'могильный камень',
                'goal' => 'истребление игроков ради удовольствия',
            ],
            [
                'title' => 'церковь карут',
                'goal' => 'распространение веры в вымышленное существо "Безликий дух", подчинение воли игроков для управления ими.',
            ],
            [
                'title' => 'пронзатели небес',
                'goal' => 'прохождение башни, исследование мира',
                'additional_information' => 'приоритетная цель - исследование мира, нахождение ценных и редких предметов, торговля',
            ],
            [
                'title' => 'изобретатели',
                'goal' => 'создание специальных предметов для игроков',
            ],
        ];

        foreach ($guilds as $guild) {
            Guild::create($guild);
        }
    }
}
