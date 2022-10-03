<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetBusinessDetailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_business_detail()
    {
        $response = $this->getJson('/api/business/1');

        $response->assertJson(fn (AssertableJson $json) =>
            $json->has('data')
                ->where('data.id', 1)
                ->where('data.name', 'Next Apps')
                ->where('data.country', 'Belgium')
                ->etc()
        );
    }
}
