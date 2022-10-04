<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'business_id' => 1,
                'first_name' => 'Wim',
                'last_name' => 'Van Buynder'
            ],
            [
                'business_id' => 1,
                'first_name' => 'Christophe',
                'last_name' => 'Todts'
            ],
            [
                'business_id' => 1,
                'first_name' => 'Sander',
                'last_name' => 'Versluys'
            ]
        ]);
    }
}
