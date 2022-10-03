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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
};
