<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class RegisterBuyerTestTwo extends TestCase
{
    /**
     * Usecase-ID: TC-RE-15
     * @return boolean
     */
    public function testSignUpSuccessWithLengthOfEmailEqualFiftyCharacters()
    {
        $respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'testdodaiemaillbanghon50kytuduansepmilky@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 809,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'testdodaiemaillbanghon50kytuduansepmilky@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'testdodaiemaillbanghon50kytuduansepmilky@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-16
     * @return boolean
     */
    public function testSignUpSuccessWithEmailIsUniqueInDatabase()
    {
        $respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'emailuniqueinsystem@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 809,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'emailuniqueinsystem@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'emailuniqueinsystem@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-17
     * @return boolean
     */
    public function testUserCanClickOnSignUpButtonToSubmitForm()
    {
        $respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'testemail123@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 809,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'testemail123@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'testemail123@gmail.com')->delete();
    }
}