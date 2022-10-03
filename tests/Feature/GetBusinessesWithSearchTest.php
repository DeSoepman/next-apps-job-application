<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetBusinessesWithSearchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_businesses_with_search()
    {
        // Search with "country" Belgium and "name" Next Apps
        $response = $this->getJson('/api/businesses?country%5B%5D=2&search=Next+Apps');

        $response->assertJson(fn (AssertableJson $json) =>
        $json->has('data', 1)
            ->has('data.0', fn ($json) =>
            $json->where('name', 'Next Apps')
                ->has('owners.0', fn ($json) =>
                $json->where('first_name', 'Wim')
                    ->where('last_name', 'Van Buynder')
                    ->etc()
                )
                ->etc()
            )
        );
    }
}
