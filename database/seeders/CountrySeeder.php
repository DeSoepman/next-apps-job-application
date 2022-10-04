<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['code' => 'fr',    'name' => 'France'],
            ['code' => 'be',    'name' => 'Belgium'],
            ['code' => 'nl',    'name' => 'The Netherlands'],
            ['code' => 'gb',    'name' => 'Great-Britain'],
            ['code' => 'de',    'name' => 'Germany'],
            ['code' => 's',     'name' => 'Spain'],
            ['code' => 'i',     'name' => 'Italy'],
        ]);
    }
}
