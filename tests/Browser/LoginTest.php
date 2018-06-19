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
    public function testLoginWithLengthOfEmailEqualFourtyFiveCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailkhongqua45kytutrading@gmail.com')
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
    public function testLoginWithLengthOfEmailEqualFiftyFiveCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailbang55kytutradingwebsitetrading@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-05
     */
    public function testLoginWithLengthOfEmailEqualFiftyCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailbang50kytutradingwebsiteab@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-06
     */
    public function testLoginWithLengthOfEmailEqualFourtyNineCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailkhongqua49kytutradingwebs@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-07
     */
    public function testLoginWithLengthOfEmailEqualFiftyOneCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailbang51kytutradingwebsiteabc@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-08
     */
    public function testLoginWithEmailNotIncludeSpaceOrBlank()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', '')
                    ->type('matkhau', '123456')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-09
     */
    public function testLoginWithLengthOfPasswordEqualTwentyFiveCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm1@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang25kyt')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-10
     */
    public function testLoginWithLengthOfPasswordEqualThirtyOneCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang31kytuwebsi')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-11
     */
    public function testLoginWithLengthOfPasswordEqualThirtyCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm2@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang30kytuwebs')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-12
     */
    public function testLoginWithLengthOfPasswordEqualTwentyNineCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang29kytuweb')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-13
     */
    public function testLoginWithPasswordNotIncludeSpaceOrBlank()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '')
                    ->press('btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-14
     */
    public function testLoginUIHaveTitleLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->assertVisible('#titleLogin');
        });
    }
}
