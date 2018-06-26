<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class ExampleTest extends TestCase
{
    /**
     * A basic test example for test switching to secondary Database when running test!.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $hd = DB::table('sanpham')->first();
        $this->assertTrue(count($hd) === 1);
    }
}
