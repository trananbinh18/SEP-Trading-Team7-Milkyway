<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewListDiscountedProduct extends TestCase
{
    /**
     * Usecase-ID: TC-VLDP-01
     * @return boolean
     */
    public function testExample()
    {
        $response = $this->get('/catalog?id=0');

        $response->assertStatus(200)->assertViewIs('catalog_sidebar')->assertSee('');
    }
}
