<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->post('/login');

        $response->assertStatus(200);
    }
    public function test_users()
    {
        $response = $this->get('/users');

        $response->assertStatus(200);
    }
    public function test_welcome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
