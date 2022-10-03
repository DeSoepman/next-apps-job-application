<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetBusinessesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_businesses()
    {
        $response = $this->getJson('/api/businesses');

        $response->assertJson(fn (AssertableJson $json) =>
            $json->has('data', 11)
                ->has('data.0', fn ($json) =>
                    $json->where('name', 'Next Apps')
                        ->has('owners.0', fn ($json) =>
                            $json->where('first_name', 'Wim')
                                ->where('last_name', 'Van Buynder')
                                ->etc()
                        )
                        ->etc()
                )
                ->has('data.1.owners', 0)
        );
    }
}
