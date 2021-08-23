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
        \App\Models\Unit::insert([
            ['name' => 'meter', 'conversion_factor' => 1],
            ['name' => 'yard', 'conversion_factor' => 0.9144],
            ['name' => 'mile', 'conversion_factor' => 1609.34]
        ]);
    }
}
