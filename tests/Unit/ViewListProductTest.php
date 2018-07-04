<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewListProductTest extends TestCase
{
    /**
     * Usecase-ID: TC-VLP-01
     * @return boolean
     */
    public function testUserCanViewListProductViaHomepage()
    {
        $response = $this->get('catalog?id=4');

        $response->assertStatus(200)->assertViewIs('catalog_sidebar')->assertSee('Danh sách sản phẩm');
    }
}
