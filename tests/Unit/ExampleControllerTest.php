<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example_endpoint_returns_expected_json_data()
    {
        $response = $this->get('/api/example');

        $response->assertStatus(200)
             ->assertJson([
                'name' => 'Renniel Taladtad',
                'email' => 'renniel0012@gmail.com',
                'age' => 31,
             ]);
    }
}
