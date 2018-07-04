<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewContactTest extends TestCase
{
    /**
     * Usecase-ID: TC-VC-01
     * @return boolean
     */
    public function testUserCanViewContactPageWhenAccessPage()
    {
        $response = $this->get('/Contact');

        $response->assertViewIs('Contact');
    }
}
