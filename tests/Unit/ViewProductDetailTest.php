<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewProductDetailTest extends TestCase
{
    /**
     * Usecase-ID: TC-VPD-01
     * @return boolean
     */
    public function testUserViewProductDetailOfXaLachMo()
    {
    	//MASP of "Xà Lách Mỡ" in Database is 73
        $response = $this->get('/Productdetail/73');

        $response->assertStatus(200)->assertSee('Xà Lách Mỡ');
    }
}
