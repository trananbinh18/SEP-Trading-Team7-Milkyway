<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewUserConditionTest extends TestCase
{
    /**
     * Usecase-ID: TC-UC-01
     * @return boolean
     */
    public function testUserCanSeeUserConditionPageViaHomepage()
    {
        $response = $this->get('Term&Condition');

        $response->assertStatus(200)->assertViewIs('Term')->assertSee('Điều khoản và điều kiện');
    }
}
