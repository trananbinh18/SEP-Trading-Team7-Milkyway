<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewDeliveryPolicyTest extends TestCase
{
    /**
     * Usecase-ID: TC-VDPO-01
     * @return boolean
     */
    public function testUserCanViewDeliveryPolicyPage()
    {
        $response = $this->get('Shipping');

        $response->assertStatus(200)->assertViewIs('Shipping')->assertSee('Chính sách giao hàng');
    }
}
