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
        //\App\Models\User::factory(10)->create();
        //\App\Models\Game::factory(5)->create();
        \App\Models\Game::factory(5)->create(
            ['name' => 'Mario 2']);

        \App\Models\Game::factory(5)->create(
            ['name' => 'Portal 2']);
    }
}
