<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        //\App\Models\Game::factory(5)->create();
        \App\Models\Game::factory(2)->create(
            ['name' => 'Mario 2']);

        \App\Models\Game::factory()->create(
            ['name' => 'Portal 2']);

            \App\Models\Records::factory()->create([
                'user_id' => 1,
                'game_id' => 1,
                'category' => 'any%',
                'time' => 155
            ]);

            \App\Models\Records::factory()->create([
                'user_id' => 2,
                'game_id' => 2,
                'category' => 'glitch-free',
                'time' => 213
            ]);

            \App\Models\Records::factory()->create([
                'user_id' => 3,
                'game_id' => 3,
                'category' => 'any%',
                'time' => 421
            ]);
    }
}
