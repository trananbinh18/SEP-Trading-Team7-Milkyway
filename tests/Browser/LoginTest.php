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
    public function testLoginSuccessFulWithAllValidField()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-02
     */
    public function testLoginSucessfulWithLengthOfEmailEqualFourtyFiveCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailkhongqua45kytutrading@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-03
     */
    public function testLoginSucessfulWithValidEmailFormat()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-04
     */
    public function testLoginFailWithLengthOfEmailEqualFiftyFiveCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailbang55kytutradingwebsitetrading@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-05
     */
    public function testLoginSucessfulWithLengthOfEmailEqualFiftyCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailbang50kytutradingwebsiteab@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-06
     */
    public function testLoginSucessfulWithLengthOfEmailEqualFourtyNineCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailkhongqua49kytutradingwebs@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-07
     */
    public function testLoginFailWithLengthOfEmailEqualFiftyOneCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testdodaiemailbang51kytutradingwebsiteabc@gmail.com')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-08
     */
    public function testLoginFailWithEmailNotIncludeSpaceOrBlank()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', '')
                    ->type('matkhau', '123456')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-09
     */
    public function testLoginSucessfulWithLengthOfPasswordEqualTwentyFiveCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm1@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang25kyt')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-10
     */
    public function testLoginFailWithLengthOfPasswordEqualThirtyOneCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang31kytuwebsi')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-11
     */
    public function testLoginSucessfulWithLengthOfPasswordEqualThirtyCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm2@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang30kytuwebs')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/home');
        });
    }
    /**
     * Testcase ID: TC-LOU-12
     */
    public function testLoginSucessfulWithLengthOfPasswordEqualTwentyNineCharacters()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', 'testdodaimatkhaubang29kytuweb')
                    ->press('#btnLogin')
                    ->assertPathIs('/SEP-Trading-Team7-Milkyway/Login');
        });
    }
    /**
     * Testcase ID: TC-LOU-13
     */
    public function testLoginFailWithPasswordNotIncludeSpaceOrBlank()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->type('email', 'testnm@gmail.com')
                    ->type('matkhau', '')
                    ->press('#btnLogin')
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
    /**
     * Testcase ID: TC-LOU-15
     */
    public function testLoginUIHaveLoginAndPasswordField()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->assertVisible('#inputemail')
                    ->assertVisible('#inputpass');
        });
    }
    /**
     * Testcase ID: TC-LOU-16
     */
    public function testLoginUIHaveLoginButton()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/SEP-Trading-Team7-Milkyway/Login')
                    ->assertVisible('#btnLogin');
        });
    }
}
