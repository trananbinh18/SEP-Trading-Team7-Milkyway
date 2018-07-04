<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class RegisterBuyerTest extends TestCase
{
    /**
     * Usecase-ID: TC-RE-01
     * @return boolean
     */
    public function testSignUpSuccessWithAddValidField()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyên',
        	'phone' => '123456789',
        	'email' => 'mwtester@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtester@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtester@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-02
     * @return boolean
     */
    public function testSignUpSuccessWithEmailAndPhoneValidFormat()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyên',
        	'phone' => '123456789',
        	'email' => 'mwtester1@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtester1@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtester1@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-03
     * @return boolean
     */
    public function testSignUpSuccessWithLengthOfNameEqualTenCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyên ABC',
        	'phone' => '123456789',
        	'email' => 'mwtester12@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtester12@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtester12@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-04
     * @return boolean
     */
    public function testSignUpSuccessWithLengthOfPhoneEqualElevenCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyên',
        	'phone' => '12345678901',
        	'email' => 'mwtesterre04@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtesterre04@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtesterre04@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-05
     * @return boolean
     */
    public function testSignUpSuccessWithLengthOfAddressEqualFifteenCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyên',
        	'phone' => '12345678901',
        	'email' => 'mwtesterre05@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Trần Hưng Đạo'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtesterre05@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtesterre05@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-06
     * @return boolean
     */
    public function testSignUpUnsuccessWithLengthOfAddressEqualFiftyFourCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyên',
        	'phone' => '12345678901',
        	'email' => 'mwtesterre06@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Trần Hưng Đạo Vương Đánh Thắng Quân Mông Đến Từ TQ'
        ]);
        $this->assertDatabaseMissing('nguoimua', [
        	'email' => 'mwtesterre06@gmail.com'
    	]);
    }
    /**
     * Usecase-ID: TC-RE-07
     * @return boolean
     */
    public function testSignUpUnsuccessWithLengthOfNameEqualThirtyOneCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn Đình Nguyên Trần An Bình',
        	'phone' => '123456789',
        	'email' => 'mwtesterre07@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseMissing('nguoimua', [
        	'email' => 'mwtesterre07@gmail.com'
    	]);
    }
    /**
     * Usecase-ID: TC-RE-08
     * @return boolean
     */
    public function testSignUpUnsuccessWithLengthOfNumberEqualSevenCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '1234567',
        	'email' => 'mwtesterre07a@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseMissing('nguoimua', [
        	'email' => 'mwtesterre07a@gmail.com'
    	]);
    }
    /**
     * Usecase-ID: TC-RE-09
     * @return boolean
     */
    public function testSignUpSuccessWithLengthOfPasswordEqualTenCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '12345678912',
        	'email' => 'mwtesterre09@gmail.com',
        	'password' => '1234567890',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtesterre09@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtesterre09@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-10
     * @return boolean
     */
    public function testSignUpUnsuccessWithLengthOfPasswordEqualFiveCharacters()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'mwtesterre10@gmail.com',
        	'password' => '12345',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseMissing('nguoimua', [
        	'email' => 'mwtesterre10@gmail.com'
    	]);
    }
    /**
     * Usecase-ID: TC-RE-11
     * @return boolean
     */
    public function testSignUpSuccessWithDistrictFieldHaveBeenChoosen()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'mwtesterre11@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 807,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtesterre11@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtesterre11@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-12
     * @return boolean
     */
    public function testSignUpSuccessWithDistrictHaveBeenChoosen()
    {
        $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'mwtesterre12a@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 808,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseHas('nguoimua', [
        	'email' => 'mwtesterre12a@gmail.com'
    	]);
    	DB::table('nguoimua')->where('email', '=', 'mwtesterre12a@gmail.com')->delete();
    }
    /**
     * Usecase-ID: TC-RE-13
     * @return boolean
     */
    public function testSignUpUnsuccessWithDistrictAndWardFieldHaventBeenChoosen()
    {
        $respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'mwtesterre13@gmail.com',
        	'password' => '123456789',
        	'district' => null,
        	'ward' => null,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseMissing('nguoimua', [
        	'email' => 'mwtesterre13@gmail.com'
    	]);
    }
    /**
     * Usecase-ID: TC-RE-14
     * @return boolean
     */
    public function testSignUpUnsuccessWithLengthOfEmailEqualFiftyOneCharacters()
    {
        $respone = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/SignUpBuyer', [
        	'name' => 'Nguyễn',
        	'phone' => '123456789',
        	'email' => 'testdodaiemaillonhon51kytuduansepmilkyway@gmail.com',
        	'password' => '123456789',
        	'district' => 48,
        	'ward' => 809,
        	'number_house' => '101 Lê Văn Quới'
        ]);
        $this->assertDatabaseMissing('nguoimua', [
        	'email' => 'testdodaiemaillonhon51kytuduansepmilkyway@gmail.com'
    	]);
    }
}