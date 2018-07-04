<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewShoppingCartTest extends TestCase
{
    /**
     * Usecase-ID: TC-VSCA-01
     * @return boolean
     */
    public function testBuyerCanViewShoppingCartPage()
    {
        $response = $this->withSession(['typeuser' => 2,])->get('shopping');

        $response->assertViewIs('shopping_cart')->assertStatus(200)->assertSee('Giỏ hàng');
    }
}
