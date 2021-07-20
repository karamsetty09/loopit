<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageDisplay extends TestCase
{
    use RefreshDatabase;
    
    public function test_home_page_display()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
