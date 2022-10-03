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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('business_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
};
