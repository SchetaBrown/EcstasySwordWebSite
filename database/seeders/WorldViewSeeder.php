<?php

namespace Database\Seeders;

use App\Models\WorldView;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorldViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $world_views = ['Положительный', 'Нейтральный', 'Отрицательный', 'Не указан'];

        foreach ($world_views as $world_view) {
            WorldView::create([
                'title' => $world_view
            ]);
        }
    }
}
