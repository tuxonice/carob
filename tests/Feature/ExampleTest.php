<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        request()->headers->set('HOST', env('SHOP_HOST'));
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertRedirectContains('/login');
    }
}
