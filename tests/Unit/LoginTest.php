<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class LoginTest extends TestCase
{
    /**
     * Usecase-ID: TC-LOU-01
     * @return boolean
     */
    public function testUserLoginSuccessfulWithAllValidFields()
    {
    	$response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
        	'email' => 'testnm@gmail.com',
        	'matkhau' => '123456789'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-02
     * @return boolean
     */
    public function testUserLoginSuccessfulWithLengthOfEmailIsFourtyFiveCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testdodaiemailkhongqua45kytutrading@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-03
     * @return boolean
     */
    public function testUserLoginSuccessfulWithValidEmailFormat()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnm@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-04
     * @return boolean
     */
    public function testUserLoginUnsuccessfulWithLengthOfEmailIsFiftyFiveCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testdodaiemailbang55kytutradingwebsitetrading@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertJsonValidationErrors('email');
    }
    /**
     * Usecase-ID: TC-LOU-05
     * @return boolean
     */
    public function testUserLoginSuccessfulWithLengthOfEmailIsFiftyCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testdodaiemailbang50kytutradingwebsiteab@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-06
     * @return boolean
     */
    public function testUserLoginSuccessfulWithLengthOfEmailIsFourtyNineCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testdodaiemailkhongqua45kytutradingwebs@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-07
     * @return boolean
     */
    public function testUserLoginUnsuccessfulWithLengthOfEmailIsFiftyOneCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testdodaiemailbang51kytutradingwebsiteabc@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertJsonValidationErrors('email');
    }
    /**
     * Usecase-ID: TC-LOU-08
     * @return boolean
     */
    public function testUserLoginUnsuccessfulWithEmailFieldIncludeBlanks()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => ' ',
            'matkhau' => '123456789'
        ]);

        $response->assertJsonValidationErrors('email');
    }
    /**
     * Usecase-ID: TC-LOU-09
     * @return boolean
     */
    public function testUserLoginSuccessfulWithLengthOfPasswordIsTwentyFiveCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnm1@gmail.com',
            'matkhau' => 'testdodaimatkhaubang25kyt'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-10
     * @return boolean
     */
    public function testUserLoginUnsuccessfulWithLengthOfPasswordIsThirtyOneCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnmabc@gmail.com',
            'matkhau' => 'testdodaimatkhaubang31kytuwebsi'
        ]);

        $response->assertJsonValidationErrors('matkhau');
    }
    /**
     * Usecase-ID: TC-LOU-11
     * @return boolean
     */
    public function testUserLoginSuccessfulWithLengthOfPasswordIsThirtyCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnmabc1@gmail.com',
            'matkhau' => 'testdodaimatkhaubang30kytuwebs'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-12
     * @return boolean
     */
    public function testUserLoginSuccessfulWithLengthOfPasswordIsTwentyNineCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnmacba@gmail.com',
            'matkhau' => 'testdodaimatkhaubang29kytuweb'
        ]);

        $response->assertRedirect('home');
    }
    /**
     * Usecase-ID: TC-LOU-13
     * @return boolean
     */
    public function testUserLoginUnsuccessfulWithEmailAndPasswordIncludeBlanks()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => ' ',
            'matkhau' => ' '
        ]);

        $response->assertJsonValidationErrors('email')->assertJsonValidationErrors('matkhau');
    }
    /**
     * Usecase-ID: TC-LOU-14
     * @return boolean
     */
    public function testUserLoginUnsuccessfulWithLengthOfPasswordIsSevenCharacters()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnm@gmail.com',
            'matkhau' => '1234567'
        ]);

        $response->assertJsonValidationErrors('matkhau');
    }
    /**
     * Usecase-ID: TC-LOU-15
     * @return boolean
     */
    public function testUserLoginSuccessfulWhenClickOnSignInButton()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/Signin', [
            'email' => 'testnm@gmail.com',
            'matkhau' => '123456789'
        ]);

        $response->assertRedirect('home');
    }
}
