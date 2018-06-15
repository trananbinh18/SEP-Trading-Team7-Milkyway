<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * Testcase ID: TC-LOU-01
     */
    public function testLoginWithAllValidField()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-02
     */
    public function testLoginWithValidEmailFormat()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-03
     */
    public function testLoginWithValidEmailFormat()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-04
     */
    public function testLoginWithValidEmailFormat()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
}
