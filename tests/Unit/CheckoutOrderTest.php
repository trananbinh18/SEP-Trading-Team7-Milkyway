<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Cart;

class CheckoutOrderTest extends TestCase
{
    /**
     * Usecase-ID: TC-CheKout-01
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithAllValidField()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-02
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithLengthOfPhoneIsTwelveCharacters()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-03
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithValidPhoneFormat()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-04
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithLengthOfAddressIsTwelveCharacters()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-05
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithSomeFieldIncludeBlank()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> ' ', 'district' => '36', 'ward' => '646', 'inputaddress' => ' ']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-06
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithLengthOfPhoneIsSixCharacters()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '123456', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-07
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithLengthOfPhoneIsTwentyThreeCharacters()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '12345678901234500000123', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-08
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithLengthOfAddressIsFiftyThreeCharacters()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang nam hà thu mục tiếu lâm cô nhi quả phụ bka bka']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-09
     * @return boolean
     */
    public function testBuyerCanAddProductToShoppingCartWithExistUserInformation()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
    /**
     * Usecase-ID: TC-CheKout-10
     * @return boolean
     */
    public function testBuyerCanNotAddProductToShoppingCartWithExistUserInformation()
    {
    	$this->json('GET',  '/BuyProduct',['id'=> 73, 'quan' => 10]);

        $this->withSession(['userid' => 2,])->json('POST',  '/postCheckout', ['phone'=> '01246952314', 'district' => '36', 'ward' => '646', 'inputaddress' => '12 Cô Giang']);

        $this->assertDatabaseHas('hoadon', [
        	'DIACHI' => '12 Cô Giang',
    	]);
    }
}
