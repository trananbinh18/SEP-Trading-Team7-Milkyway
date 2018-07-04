<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewPolicyTest extends TestCase
{
    /**
     * Usecase-ID: TC-VPO-01
     * @return boolean
     */
    public function testUserCanViewPolicyPage()
    {
        $response = $this->get('Legal');

        $response->assertStatus(200)->assertViewIs('Legal')->assertSee('Pháp lý');
    }
}
