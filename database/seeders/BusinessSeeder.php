<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('businesses')->insert([
            [
                'name'          => 'Next Apps',
                'description'   => 'We create digital applications with a big focus on the end user.',
                'street'        => 'Stationsplein 41',
                'city'          => 'Lokeren (9160)',
                'country_id'    => 2
            ]
        ]);

        Business::factory()
                    ->count(1000)
                    ->create();
    }
}
