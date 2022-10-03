<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('address');
            $table->tinyInteger('country_id');
            $table->timestamps();
        });

        DB::table('businesses')->insert([
            [
                'name'          => 'Next Apps',
                'description'   => 'We create digital applications with a big focus on the end user.',
                'address'       => 'Stationsplein 41, Lokeren (9160)',
                'country_id'    => 2
            ],
            [
                'name'          => 'Business 1',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 1, Stad (XXXX)',
                'country_id'    => 3
            ],
            [
                'name'          => 'Business 2',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 2, Stad (XXXX)',
                'country_id'    => 3
            ],
            [
                'name'          => 'Business 3',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 3, Stad (XXXX)',
                'country_id'    => 3
            ],
            [
                'name'          => 'Business 4',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 4, Stad (XXXX)',
                'country_id'    => 1
            ],
            [
                'name'          => 'Business 5',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 5, Stad (XXXX)',
                'country_id'    => 1
            ],
            [
                'name'          => 'Business 6',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 6, Stad (XXXX)',
                'country_id'    => 1
            ],
            [
                'name'          => 'Business 7',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 7, Stad (XXXX)',
                'country_id'    => 1
            ],
            [
                'name'          => 'Business 8',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 8, Stad (XXXX)',
                'country_id'    => 1
            ],
            [
                'name'          => 'Business 9',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 9, Stad (XXXX)',
                'country_id'    => 1
            ],
            [
                'name'          => 'Business 10',
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'address'       => 'Straat 10, Stad (XXXX)',
                'country_id'    => 1
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};
