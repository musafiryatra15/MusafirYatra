<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Musafir\Installer\Database\Seeders\DatabaseSeeder as MusafirYatraDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MusafirYatraDatabaseSeeder::class);
    }
}
