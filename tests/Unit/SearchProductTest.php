<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchProductTest extends TestCase
{
    /**
     * Usecase-ID: TC-SP-01
     * @return boolean
     */
    public function testUserCanSearchProductViaSearchButton()
    {
        $response = $this->get('/Search', ['Timkiem' => 'Mồng Tơi']);

        $response->assertStatus(200)->assertViewIs('Search');
    }
}
