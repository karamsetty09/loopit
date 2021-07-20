<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
   
    use RefreshDatabase;

    public function test_registering_screen_can_be_rendered()
    {
        $response = $this->get('/api/register');

        $response->assertStatus(200);
    }
    public function test_user_register()
    {
        // post data to API
        $response = $this->post('/api/register', [
            'name' => 'Tester',
            'email' => 'tester@gmail.com',
            'password' => '123456',
            'password_confirmation' => '123456'

        ]);

        // Assertion of success.
        $response->assertStatus(200);

        // Checking next route
        $respose->assertRedirect(RouteServiceProvider::Home);
    }
}
