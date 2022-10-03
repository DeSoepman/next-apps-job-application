<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetCountriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_countries()
    {
        $response = $this->getJson('/api/countries');

        $response->assertJson(fn (AssertableJson $json) =>
        $json->has('data', 3)
            ->has('data.1', fn ($json) =>
            $json->where('name', 'Belgium')
                ->etc()
            )
        );
    }
}
